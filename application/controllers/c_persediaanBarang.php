<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_persediaanBarang extends CI_Controller {



    public function tampilkanFormInputPersediaan() {
        $this->load->view('formInputPersediaanBarang');
    }

    public function simpanDataPersediaanBarang() {
        $data = $this->session->userdata('logged_user') ? TRUE : FALSE;
        if ($data) {
            $dataBarang = array(
                'nama_barang' => $this->input->post('nama_barang'),
                'jenis_barang' => $this->input->post('jenis_barang'),
                'jumlah_barang' => $this->input->post('jumlah_barang'),
                'harga_barang' => $this->input->post('harga_barang'),
                'tanggal_barang_masuk' => $this->input->post('tanggal_barang_masuk'),
                'tanggal_barang_keluar' => $this->input->post('tanggal_barang_keluar')
            );
            $result = $this->db_persediaanBarang->simpanDataPersediaanBarang($dataBarang);
            if ($result) {
                $dataBarang['notif'] = "Data Berhasil Disimpan";
                $dataBarang['barang'] = $this->db_persediaanBarang->getPersediaanBarangKelola()->result();
                $this->load->view('kelolaPersediaanBarang', $dataBarang);
            } else {
                $dataBarang['notif'] = "Data Gagal Disimpan";
                $dataBarang['barang'] = $this->db_persediaanBarang->getPersediaanBarangKelola()->result();
                $this->load->view('kelolaPersediaanBarang', $dataBarang);
            }
        } else {
            $session = 'Waktu Session Habis';
            $data['notif'] = $session;
            $this->load->view('Login', $data);
        }
    }

    public function editDataPersediaanBarang() {
        $id_barang = $this->input->post('id_barang');
        $dataBarang = array(
            'nama_barang' => $this->input->post('nama_barang'),
            'jenis_barang' => $this->input->post('jenis_barang'),
            'jumlah_barang' => $this->input->post('jumlah_barang'),
            'harga_barang' => $this->input->post('harga_barang'),
            'tanggal_barang_masuk' => $this->input->post('tanggal_barang_masuk'),
            'tanggal_barang_keluar' => $this->input->post('tanggal_barang_keluar')
        );
        $result = $this->db_persediaanBarang->editDataPersediaanBarang($id_barang, $dataBarang);
        if ($result) {
            $data = $this->session->userdata('logged_user') ? TRUE : FALSE;
            if ($data) {
                $dataBarang['notif'] = "Data Berhasil Diubah";
                $dataBarang['barang'] = $this->db_persediaanBarang->getPersediaanBarangKelola()->result();
                $this->load->view('kelolaPersediaanBarang', $dataBarang);
            }
        } else {
            $dataBarang['notif'] = "Data Gagal Diubah";
            $dataBarang['barang'] = $this->db_persediaanBarang->getPersediaanBarangKelola()->result();
            $this->load->view('kelolaPersediaanBarang', $dataBarang);
        }
    }

    public function tampilkanFormEditPersediaanBarang($id_barang) {
        $dataBarang['barang'] = $this->db_persediaanBarang->getPersediaanBarangTertentu($id_barang)->result();
        $this->load->view('formEditPersediaanBarang', $dataBarang);
    }

    public function hapusDataPersediaanBarang($id_barang) {
        $result = $this->db_persediaanBarang->hapusDataPersediaanBarang($id_barang);
        if ($result) {
            $data = $this->session->userdata('logged_user') ? TRUE : FALSE;
            if ($data) {
                $dataBarang['notif'] = "Data Berhasil Dihapus";
                $dataBarang['barang'] = $this->db_persediaanBarang->getPersediaanBarangKelola()->result();
                $this->load->view('kelolaPersediaanBarang', $dataBarang);
            }
        } else {
            $dataBarang['notif'] = "Data Gagal Dihapus";
            $dataBarang['barang'] = $this->db_persediaanBarang->getPersediaanBarangKelola()->result();
            $this->load->view('kelolaPersediaanBarang', $dataBarang);
        }
    }

    public function cetakLaporan($tanda) {
        $dataBarang['barang'] = $this->db_persediaanBarang->getPersediaanBarangLaporan()->result();
        $dataBarang['tanda'] = $tanda;
        $dataBarang['asal'] = 'barang';
        $this->load->view('printPreview', $dataBarang);
    }

    public function tampilkanLaporanPersediaanBarang() {
        $dataBarang['barang'] = $this->db_persediaanBarang->getPersediaanBarangLaporan()->result();
        $this->load->view('laporanPersediaanBarang', $dataBarang);
    }

    public function tampilkanKelolaPersediaanBarang() {
        $data = $this->session->userdata('logged_user') ? TRUE : FALSE;
        if ($data) {
            $dataBarang['barang'] = $this->db_persediaanBarang->getPersediaanBarangKelola()->result();
            $this->load->view('kelolaPersediaanBarang', $dataBarang);
        } else {
            $session = 'Waktu Session Habis';
            $data['notif'] = $session;
            $this->load->view('Login', $data);
        }
    }

}
