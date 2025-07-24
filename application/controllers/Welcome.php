<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		$data['title'] = 'AKT Indonesia | Career';

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
}
