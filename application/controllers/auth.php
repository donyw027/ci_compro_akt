<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function login() {
        $this->load->view('admin/login');
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('auth/login');
    }
    
    public function dashboard() {
        $this->load->view('admin/layout/head');
        $this->load->view('admin/layout/side');
        $this->load->view('admin/layout/nav');
        $this->load->view('admin/dashboard');
        $this->load->view('admin/layout/footer');

    }
}
