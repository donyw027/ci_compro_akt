<?php

function cek_login()
{
    $ci = get_instance();
    if (!$ci->session->has_userdata('login_session')) {
        set_pesan('Silakan login terlebih dahulu.', false);
        redirect('auth');
        return false;
    }
}

function is_admin()
{
    $ci = get_instance();
    return $ci->session->userdata('login_session')['role'] === 'admin';
}

function is_non_admin()
{
    $ci = get_instance();
    return $ci->session->userdata('login_session')['role'] === 'non_admin';
}



function set_pesan($pesan, $tipe = 'success')
{
    $class = $tipe === 'success' ? 'alert-success' : ($tipe === 'danger' ? 'alert-danger' : 'alert-info');
    $ci =& get_instance();
    $ci->session->set_flashdata('pesan', "<div class='alert $class alert-dismissible fade show' role='alert'>
        <strong>" . strtoupper($tipe) . "!</strong> $pesan
        <button type='button' class='close' data-dismiss='alert'>&times;</button>
    </div>");
}


function userdata($field)
{
    $ci = get_instance();
    $ci->load->model('Admin_model', 'admin');

    $session = $ci->session->userdata('login_session');
    if (!$session || !isset($session['user'])) {
        return null;
    }

    $userId = $session['user'];
    $user = $ci->admin->get('user', ['id_user' => $userId]);

    return $user[$field] ?? null;
}


function output_json($data, $status_code = 200)
{
    $ci = get_instance();
    $ci->output
        ->set_content_type('application/json')
        ->set_status_header($status_code)
        ->set_output(json_encode($data));
}


function format_indo($date){
    $Bulan = ["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"];
    $tgl = substr($date,8,2);
    $bulan = substr($date,5,2);
    $tahun = substr($date,0,4);
    $waktu = substr($date,11,5);
    return "$tgl {$Bulan[(int)$bulan - 1]} $tahun $waktu";
}
