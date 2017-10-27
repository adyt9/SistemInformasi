<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Db_persediaanBarang extends CI_Model {
    
    public function getPersediaanBarang() {
        $data = $this->db->get('persediaan_barang');
        return $data;
    }
    
    public function getPersediaanBarangKelola() {
        $data = $this->db->query("select * from persediaan_barang where tanggal_barang_keluar = 'NULL' || tanggal_barang_keluar IS NULL");
        return $data;
    }
    
    public function getPersediaanBarangTertentu($id_barang) {
        $data = $this->db->get_where('persediaan_barang', array('id_barang' => $id_barang));
        return $data;
    }
    public function getPersediaanBarangLaporan() {
        $data = $this->db->query('SELECT id_barang, nama_barang, jenis_barang, jumlah_barang, harga_barang, '
                . 'tanggal_barang_masuk, tanggal_barang_keluar, MONTH(tanggal_barang_masuk) as "bulan", '
                . 'YEAR(tanggal_barang_masuk) as "tahun" FROM persediaan_barang');
        return $data;
    }

    
    public function simpanDataPersediaanBarang($dataBarang) {
        $hasil = $this->db->insert('persediaan_barang', $dataBarang);
        return $hasil;
    }
    
    public function editDataPersediaanBarang($id_barang, $dataBarang) {
        $hasil = $this->db->update('persediaan_barang', $dataBarang, array('id_barang' => $id_barang));        
        return $hasil;
    }
    
    public function hapusDataPersediaanBarang($id_barang) {
        $hasil = $this->db->delete('persediaan_barang', array('id_barang' => $id_barang));
        return $hasil;
    }
}
