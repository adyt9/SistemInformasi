<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Db_produksi extends CI_Model {
    
    public function getPokokProduksi() {
        $data = $this->db->get('produksi');
        return $data;
    }
    public function getPokokProduksiTertentu($id_produksi) {
        $data = $this->db->get_where('produksi', array('id_bahan_baku' => $id_produksi));
        return $data;
    }
    
    public function simpanDataHargaPokokProduksi($dataProduksi) {
        $hasil = $this->db->insert('produksi', $dataProduksi);
        return $hasil;
    }
    
    public function editDataHargaPokokProduksi($id_produksi, $dataProduksi) {
        $hasil = $this->db->update('produksi', $dataProduksi, array('id_bahan_baku' => $id_produksi));        
        return $hasil;
    }
    
    public function hapusDataHargaPokokProduksi($id_produksi) {
        $hasil = $this->db->delete('produksi', array('id_bahan_baku' => $id_produksi));
        return $hasil;
    }
    

    
}
