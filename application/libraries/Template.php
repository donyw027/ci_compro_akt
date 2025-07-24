<?php

class Template {

    protected $CI;

    public function __construct() {
        $this->CI =& get_instance();
    }

    public function load($content_view, $data = null) {
        $this->CI->load->view('admin/layout/head', $data);
        $this->CI->load->view('admin/layout/side', $data);
        $this->CI->load->view('admin/layout/nav', $data);
        $this->CI->load->view($content_view, $data);
        $this->CI->load->view('admin/layout/footer', $data);
    }
}
