<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_TransaksiPenjualan extends CI_Controller {

    public function getTransaksiPenjualan() {
        $dataTransaksi['transaksi'] = $this->db_TransaksiPenjualan->getTransaksiPenjualan()->result();
        return $dataTransaksi;
    }

    public function tampilkanKelolaTransaksiPenjualan() {
        $data = $this->session->userdata('logged_user') ? TRUE : FALSE;
        if ($data) {
            $dataTransaksi['transaksi'] = $this->db_TransaksiPenjualan->getTransaksiPenjualanKelola()->result();
            $this->load->view('kelolaTransaksiPenjualan', $dataTransaksi);
        } else {
            $session = 'Waktu Session Habis';
            $data['notif'] = $session;
            $this->load->view('Login', $data);
        }
    }

    public function simpanDataTransaksiPenjualan() {
        $data = $this->session->userdata('logged_user') ? TRUE : FALSE;
        if ($data) {
            $dataTransaksi = array(
                'nama_pembeli' => $this->input->post('nama_pembeli'),
                'persediaan_barang_id_barang' => $this->input->post('pembelian'),
                'jenis_barang_pembelian' => $this->input->post('jenis_barang_pembelian'),
                'jumlah_pembelian' => $this->input->post('jumlah_pembelian'),
                'tanggal_pembelian' => $this->input->post('tanggal_pembelian'),
                'harga' => $this->input->post('harga')
            );
            $result = $this->db_TransaksiPenjualan->simpanDataTransaksiPenjualan($dataTransaksi);
            $data = $this->db->query('UPDATE persediaan_barang SET tanggal_barang_keluar = "'. $this->input->post('tanggal_pembelian').'" WHERE id_barang = ' . $this->input->post('pembelian') );
            if ($result) {
                $dataTransaksi['notif'] = "Data Berhasil Disimpan";
                $dataTransaksi['transaksi'] = $this->db_TransaksiPenjualan->getTransaksiPenjualanKelola()->result();
                $this->load->view('kelolaTransaksiPenjualan', $dataTransaksi);
            } else {
                $dataTransaksi['notif'] = "Data Gagal Disimpan";
                $dataTransaksi['transaksi'] = $this->db_TransaksiPenjualan->getTransaksiPenjualanKelola()->result();
                $this->load->view('kelolaTransaksiPenjualan', $dataTransaksi);
            }
        } else {
            $session = 'Waktu Session Habis';
            $data['notif'] = $session;
            $this->load->view('Login', $data);
        }
    }

    public function editDataTransaksiPenjualan() {
        $id_transaksi = $this->input->post('id_transaksi');
        $dataTransaksi = array(
            'nama_pembeli' => $this->input->post('nama_pembeli'),
            'persediaan_barang_id_barang' => $this->input->post('pembelian'),
            'jenis_barang_pembelian' => $this->input->post('jenis_barang_pembelian'),
            'jumlah_pembelian' => $this->input->post('jumlah_pembelian'),
            'tanggal_pembelian' => $this->input->post('tanggal_pembelian'),
            'harga' => $this->input->post('harga')
        );
        $result = $this->db_TransaksiPenjualan->editDataTransaksiPenjualan($id_transaksi, $dataTransaksi);
        if ($result) {
            $data = $this->session->userdata('logged_user') ? TRUE : FALSE;
            if ($data) {
                $dataTransaksi['notif'] = "Data Berhasil Diubah";
                $dataTransaksi['transaksi'] = $this->db_TransaksiPenjualan->getTransaksiPenjualanKelola()->result();
                $this->load->view('kelolaTransaksiPenjualan', $dataTransaksi);
            }
        } else {
            $dataTransaksi['notif'] = "Data Gagal Diubah";
            $dataTransaksi['transaksi'] = $this->db_TransaksiPenjualan->getTransaksiPenjualanKelola()->result();
            $this->load->view('kelolaTransaksiPenjualan', $dataTransaksi);
        }
    }

    public function hapusDataTransaksiPenjualan($id_transaksi) {
        $result = $this->db_TransaksiPenjualan->hapusDataTransaksiPenjualan($id_transaksi);
        if ($result) {
            $data = $this->session->userdata('logged_user') ? TRUE : FALSE;
            if ($data) {
                $dataTransaksi['notif'] = "Data Berhasil Dihapus";
                $dataTransaksi['transaksi'] = $this->db_TransaksiPenjualan->getTransaksiPenjualanKelola()->result();
                $this->load->view('kelolaTransaksiPenjualan', $dataTransaksi);
            }
        } else {
            $dataTransaksi['notif'] = "Data Gagal Dihapus";
            $dataTransaksi['transaksi'] = $this->db_TransaksiPenjualan->getTransaksiPenjualanKelola()->result();
        }
    }

    public function tampilkanFormInputTransaksiPenjualan() {
        $dataTransaksi['barang'] = $this->db_persediaanBarang->getPersediaanBarang()->result();
        $this->load->view('formInputTransaksiPenjualan', $dataTransaksi);
    }

    public function tampilkanFormEditTransaksiPenjualan($id_transaksi) {
        $dataTransaksi['transaksi'] = $this->db_TransaksiPenjualan->getTransaksiPenjualanTertentu($id_transaksi)->result();
        $dataTransaksi['barang'] = $this->db_persediaanBarang->getPersediaanBarang()->result();
        $this->load->view('formEditTransaksiPenjualan', $dataTransaksi);
    }

    public function cetakLaporan($tanda) {
        $dataTransaksi['transaksi'] = $this->db_TransaksiPenjualan->getTransaksiPenjualanLaporan()->result();
        $dataTransaksi['barang'] = $this->db_persediaanBarang->getPersediaanBarang()->result();
        $dataTransaksi['tanda'] = $tanda;
        $dataTransaksi['asal'] = 'transaksi';
        $this->load->view('printPreview', $dataTransaksi);
    }

    public function tampilkanLaporanTransaksiPenjualan() {
        $dataTransaksi['transaksi'] = $this->db_TransaksiPenjualan->getTransaksiPenjualanLaporan()->result();
        $dataTransaksi['barang'] = $this->db_persediaanBarang->getPersediaanBarang()->result();
        $this->load->view('laporanTransaksiPenjualan', $dataTransaksi);
    }

}
