<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {

    public function index() {
        $this->load->view('Login');
    }

    public function cekUserPass() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $statusLogin = $this->db_admin->getData($username, $password)->row_array();
        if ($statusLogin) {
            $this->session->set_userdata('logged_user', $username);
            $this->tampilkanGrafikPenjualan();
        } else {
            $salah = 'Username atau Password salah';
            $data['notif'] = $salah;
            $this->load->view('Login', $data);
        }
    }

 
    public function tampilkanGrafikPenjualan() {
        $data = $this->session->userdata('logged_user') ? TRUE : FALSE;
        if ($data) {
            $transaksiPenjualan['transaksi'] = $this->db_TransaksiPenjualan->getTransaksiPenjualanLaporan()->result();            
            $this->load->view('grafikPenjualan', $transaksiPenjualan);
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        $terimakasih = 'Terima Kasih';
        $data['notif'] = $terimakasih;
        $this->load->view('Login', $data);
    }

}
