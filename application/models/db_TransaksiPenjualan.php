<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Db_TransaksiPenjualan extends CI_Model {

    public function getTransaksiPenjualan() {
        $data = $this->db->get('transaksi_penjualan');
        return $data;
    }
    public function getTransaksiPenjualanKelola() {
        $data = $this->db->query('SELECT * FROM transaksi_penjualan INNER JOIN persediaan_barang ON transaksi_penjualan.persediaan_barang_id_barang = persediaan_barang.id_barang');
        return $data;
    }
    public function getTransaksiPenjualanTertentu($id_transaksi) {
        $data = $this->db->query('SELECT * FROM transaksi_penjualan INNER JOIN persediaan_barang ON transaksi_penjualan.persediaan_barang_id_barang = persediaan_barang.id_barang WHERE id_transaksi = '. $id_transaksi);
        return $data;
    }
    public function getTransaksiPenjualanLaporan() {
        $data = $this->db->query('SELECT id_transaksi, nama_pembeli, jenis_barang_pembelian, jumlah_pembelian, tanggal_pembelian, harga, DAY(tanggal_pembelian) as "tanggal", MONTH(tanggal_pembelian) as "bulan", YEAR(tanggal_pembelian) as "tahun", '
                . 'persediaan_barang_id_barang, nama_barang, harga_barang, jumlah_barang'
                . ' FROM transaksi_penjualan '
                . 'INNER JOIN persediaan_barang '
                . 'ON transaksi_penjualan.persediaan_barang_id_barang = persediaan_barang.id_barang');
        return $data;
    }
    public function simpanDataTransaksiPenjualan($dataPenjualan) {
        $hasil = $this->db->insert('transaksi_penjualan', $dataPenjualan);
        return $hasil;
    }

    public function editDataTransaksiPenjualan($id_transaksi, $dataPenjualan) {
        $hasil = $this->db->update('transaksi_penjualan', $dataPenjualan, array('id_transaksi' => $id_transaksi));        
        return $hasil;
    }

    public function hapusDataTransaksiPenjualan($id_transaksi) {
        $hasil = $this->db->delete('transaksi_penjualan', array('id_transaksi' => $id_transaksi));
        return $hasil;
    }


}
