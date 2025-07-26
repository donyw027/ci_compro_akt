<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */




	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model', 'admin');
		$this->load->library('form_validation');

		// Cek jika tidak ada bahasa tersimpan, default ke indonesian
		if (!$this->session->userdata('site_lang')) {
			$this->session->set_userdata('site_lang', 'indonesian');
		}

		// Load bahasa sesuai session
		$this->lang->load('web_lang', $this->session->userdata('site_lang'));
	}


	public function change_language($lang)
	{
		// Set session sesuai pilihan bahasa
		if ($lang == 'en') {
			$this->session->set_userdata('site_lang', 'english');
		} else {
			$this->session->set_userdata('site_lang', 'indonesian');
		}

		redirect($_SERVER['HTTP_REFERER']); // kembali ke halaman sebelumnya
	}

	public function index()
	{
		$data['title'] = 'AKT Indonesia';

		// Load layout
		$this->load->view('head_foot/header', $data);
		$this->load->view('home');
		$this->load->view('head_foot/footer');
	}

	public function home()
	{
		$data['title'] = 'AKT Indonesia';

		// Load layout
		$this->load->view('head_foot/header', $data);
		$this->load->view('home');
		$this->load->view('head_foot/footer');
	}

	public function about()
	{
		$data['title'] = 'AKT Indonesia | About';

		// Load layout
		$this->load->view('head_foot/header', $data);
		$this->load->view('about');
		$this->load->view('head_foot/footer');
	}

	public function career()
	{
		$this->load->helper('text');
		$data['title'] = 'AKT Indonesia | Career';
		$data['loker'] = $this->admin->get('loker');

		// Load layout
		$this->load->view('head_foot/header', $data);
		$this->load->view('career');
		$this->load->view('head_foot/footer');
	}

	public function contact()
	{
		$data['title'] = 'AKT Indonesia | Contact';

		// Load layout
		$this->load->view('head_foot/header', $data);
		$this->load->view('contact');
		$this->load->view('head_foot/footer');
	}

	// public function applyjob()
	// {
	// 	$data['title'] = 'AKT Indonesia | Form Aplikasi';

	// 	// Load layout
	// 	$this->load->view('head_foot/header', $data);
	// 	$this->load->view('applyjob');
	// 	$this->load->view('head_foot/footer');
	// }

	private function _validasi($mode)
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('tempat_lahir', 'tempat_lahir', 'required|trim');
		$this->form_validation->set_rules('tgl_lahir', 'tgl_lahir', 'required|trim');

		if ($mode == 'add') {
			$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
			$this->form_validation->set_rules('tempat_lahir', 'tempat_lahir', 'required|trim');
			$this->form_validation->set_rules('tgl_lahir', 'tgl_lahir', 'required|trim');
			$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]');
			$this->form_validation->set_rules('no_wa', 'no_wa', 'required|trim');
			$this->form_validation->set_rules('pendidikan', 'pendidikan', 'required|trim');
			$this->form_validation->set_rules('jurusan', 'jurusan', 'required|trim');
			$this->form_validation->set_rules('jk', 'jk', 'required|trim');
		} else {
			$db = $this->admin->get('kandidat', ['id' => $this->input->post('id', true)]);
			$username = $this->input->post('username', true);
		}
	}

	public function applyjob($id_loker = null)
	{
		$this->_validasi('add');

		if ($this->form_validation->run() == false) {
			$data['title'] = 'AKT Indonesia | Form Aplikasi';
			$data['loker'] = $this->admin->get('loker', ['id' => $id_loker]);

			$this->load->view('head_foot/header', $data);
			$this->load->view('applyjob');
			$this->load->view('head_foot/footer');
		} else {
			$input = $this->input->post(null, true);
			$input_data = [
				'nama'          => $input['nama'],
				'tempat_lahir'      => $input['tempat_lahir'],
				'tgl_lahir'         => $input['tgl_lahir'],
				'email'       => $input['email'],
				'no_wa'          => $input['no_wa'],
				'pendidikan'          => $input['pendidikan'],
				'jurusan'          => $input['jurusan'],
				'jk'          => $input['jk'],
				'foto'          => '-',
				'cv'          => '-',
				'id_loker'          => $id_loker,
				'applydate'    => date('d-m-Y H:i'),
				'status'          => 'sortir'
			];

			if ($this->admin->insert('kandidat', $input_data)) {
				set_pesan('Data apply disimpan tolong menunggu review dari pihak HRD kami');

				$this->load->helper('text');
				redirect('welcome/career');
			} else {
				set_pesan('data gagal disimpan', false);
				$this->load->view('head_foot/header', $data);
				$this->load->view('applyjob');
				$this->load->view('head_foot/footer');
			}
		}
	}
}
