<?php
defined('BASEPATH') or exit('No direct script access allowed');

class kandidat extends CI_Controller
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

    public function ubah_status($id, $new_status)
{
    $id = encode_php_tags($id);
    $status_asal = $this->input->get('from'); // ambil dari query string

    $kandidat = $this->admin->get('kandidat', ['id' => $id]);
    if (!$kandidat) {
        set_pesan('Data kandidat tidak ditemukan.', false);
        redirect('dashboard');
    }

    $id_loker = $kandidat['id_loker'];

    $input_data = ['status' => $new_status];
    if ($this->admin->update('kandidat', 'id', $id, $input_data)) {
        set_pesan('Status kandidat berhasil diubah.');
    } else {
        set_pesan('Status gagal diubah.', false);
    }

    // Redirect ke status_asal (bukan ke status baru)
    redirect('cek_sortir/kandidat_by_status/' . $id_loker . '/' . $status_asal);
}



    public function status_interview($getId)
{
    $id = encode_php_tags($getId);

    // Ambil status asal dari URI segment 4
    $status_asal = $this->uri->segment(4); // hasilnya: sortir / interview / dll

    // Cari data kandidat
    $kandidat = $this->admin->get('kandidat', ['id' => $id]);
    $id_loker = $kandidat['id_loker'];

    $input_data = ['status' => 'interview'];

    if ($this->admin->update('kandidat', 'id', $id, $input_data)) {
        set_pesan('Status kandidat berhasil diubah.');
    } else {
        set_pesan('Status gagal diubah.', false);
    }

    // Kembali ke halaman asal
    redirect('cek_sortir/kandidat_by_status/' . $id_loker . '/' . $status_asal);
}


    

    public function status_sortir($getId)
    {
        $id = encode_php_tags($getId);

        // Cari data kandidat untuk ambil id_loker
        $kandidat = $this->admin->get('kandidat', ['id' => $id]);
        $id_loker = $kandidat['id_loker']; // pastikan ini tidak null

        $input_data = [
            'status' => 'sortir'
        ];

        if ($this->admin->update('kandidat', 'id', $id, $input_data)) {
            set_pesan('status kandidat berhasil diubah.');
            redirect('cek_sortir/kandidat_by_status/' . $id_loker . '/sortir');
        } else {
            set_pesan('data gagal diubah.', false);
            redirect('cek_sortir/kandidat_by_status/' . $id_loker . '/sortir');
        }
    }

    public function status_tr($getId)
    {
        $id = encode_php_tags($getId);

        // Cari data kandidat untuk ambil id_loker
        $kandidat = $this->admin->get('kandidat', ['id' => $id]);
        $id_loker = $kandidat['id_loker']; // pastikan ini tidak null

        $input_data = [
            'status' => 'tidak_relevan'
        ];

        if ($this->admin->update('kandidat', 'id', $id, $input_data)) {
            set_pesan('status kandidat berhasil diubah.');
            redirect('cek_sortir/kandidat_by_status/' . $id_loker . '/tidak_relevan');
        } else {
            set_pesan('data gagal diubah.', false);
            redirect('cek_sortir/kandidat_by_status/' . $id_loker . '/tidak_relevan');
        }
    }
}
