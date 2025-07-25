<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kandidat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
        if (!is_admin()) {
            redirect('dashboard');
        }

        $this->load->model('Admin_model', 'admin');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = "Kandidat";
        $data['loker'] = $this->admin->get('loker');
        $this->template->load('templates/dashboard', 'kandidat/data', $data);

    }

    
   

    private function _validasi($mode)
    {
        $this->form_validation->set_rules('posisi', 'Posisi', 'required|trim');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');

        if ($mode == 'add') {
            $this->form_validation->set_rules('posisi', 'Posisi', 'required');
        } else {
            $db = $this->admin->get('loker', ['id' => $this->input->post('id', true)]);
            $username = $this->input->post('posisi', true);
            
        }
    }

    public function add()
    {
        $this->_validasi('add');

        if ($this->form_validation->run() == false) {
            $data['title'] = "Tambah Loker";
            $this->template->load('templates/dashboard', 'loker/add', $data);
        } else {
            $input = $this->input->post(null, true);
            $input_data = [
                'posisi'          => $input['posisi'],
                'deskripsi'      => $input['deskripsi'],
                'batas_lamar'         => $input['batas_lamar'],
                'status'       => $input['status']
            ];

            if ($this->admin->insert('loker', $input_data)) {
                set_pesan('data berhasil disimpan.');
                redirect('loker/admin_index');
            } else {
                set_pesan('data gagal disimpan', false);
                redirect('loker/add');
            }
        }
    }

    public function edit($getId)
    {
        $id = encode_php_tags($getId);
        $this->_validasi('edit');

        if ($this->form_validation->run() == false) {
            $data['title'] = "Edit Loker";
            $data['loker'] = $this->admin->get('loker', ['id' => $id]);
            $this->template->load('templates/dashboard', 'loker/edit', $data);
        } else {
            $input = $this->input->post(null, true);
            $input_data = [
                'posisi'          => $input['posisi'],
                'deskripsi'      => $input['deskripsi'],
                'batas_lamar'         => $input['batas_lamar'],
                'status'       => $input['status']
            ];

            if ($this->admin->update('loker', 'id', $id, $input_data)) {
                set_pesan('data berhasil diubah.');
                redirect('loker/admin_index');
            } else {
                set_pesan('data gagal diubah.', false);
                redirect('loker/edit/' . $id);
            }
        }
    }

    public function delete($getId)
    {
        $id = encode_php_tags($getId);
        if ($this->admin->delete('loker', 'id', $id)) {
            set_pesan('data berhasil dihapus.');
        } else {
            set_pesan('data gagal dihapus.', false);
        }
        redirect('loker/admin_index');
    }
   

    public function toggle($getId)
    {
        $id = encode_php_tags($getId);
        $status = $this->admin->get('user', ['id_user' => $id])['is_active'];
        $toggle = $status ? 0 : 1; //Jika user aktif maka nonaktifkan, begitu pula sebaliknya
        $pesan = $toggle ? 'user diaktifkan.' : 'user dinonaktifkan.';

        if ($this->admin->update('user', 'id_user', $id, ['is_active' => $toggle])) {
            set_pesan($pesan);
        }
        redirect('user');
    }

    
}
