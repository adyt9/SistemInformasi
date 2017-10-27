<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_SPTTahunan extends CI_Controller {

    public function tampilkanLaporanSptTahunan() {
        $data = $this->session->userdata('logged_user') ? TRUE : FALSE;
        if ($data) {
            $dataTransaksi['transaksi'] = $this->db_TransaksiPenjualan->getTransaksiPenjualanLaporan()->result();
            $dataTransaksi['barang'] = $this->db_persediaanBarang->getPersediaanBarang()->result();
            $dataTransaksi['omset'] = 0;
            $dataTransaksi['produksi'] = 0;
            foreach ($dataTransaksi['transaksi'] as $t) {
                if ($t->tahun == date('Y')) {
                    $dataTransaksi['omset'] += $t->harga;
                    $dataTransaksi['produksi'] += $t->harga_barang;
                } else{
                    continue;
                }
            }
            $dataTransaksi['labaRugi'] = $dataTransaksi['omset'] - $dataTransaksi['produksi'];
            $dataTransaksi['neto'] = $dataTransaksi['labaRugi'];
            $this->load->view('laporanSptTahunan', $dataTransaksi);
        } else {
            $session = 'Waktu Session Habis';
            $data['notif'] = $session;
            $this->load->view('Login', $data);
        }
    }

    public function cetakLaporan($asal) {
        $dataTransaksi['transaksi'] = $this->db_TransaksiPenjualan->getTransaksiPenjualanLaporan()->result();
        $dataTransaksi['barang'] = $this->db_persediaanBarang->getPersediaanBarang()->result();
        $dataTransaksi['asal'] = $asal;

        $dataTransaksi['omset'] = 0;
        $dataTransaksi['produksi'] = 0;
        foreach ($dataTransaksi['transaksi'] as $t) {
            if ($t->tahun == date('Y')) {
                $dataTransaksi['omset'] += $t->harga;
                $dataTransaksi['produksi'] += $t->harga_barang;
            }
        }
        $dataTransaksi['labaRugi'] = $dataTransaksi['omset'] - $dataTransaksi['produksi'];
        $dataTransaksi['neto'] = $dataTransaksi['labaRugi'];

        $this->load->view('printPreview', $dataTransaksi);
    }

}
