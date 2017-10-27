<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_produksi extends CI_Controller {


    public function tampilkanKelolaHargaPokokProduksi() {
        $data = $this->session->userdata('logged_user') ? TRUE : FALSE;
        if ($data) {
            $dataProduksi['produksi'] = $this->db_produksi->getPokokProduksi()->result();
            $this->load->view('kelolaHargaPokokProduksi', $dataProduksi);
        } else {
            $session = 'Waktu Session Habis';
            $data['notif'] = $session;
            $this->load->view('Login', $data);
        }
    }

    public function simpanDataHargaPokokProduksi() {
        $dataProduksi = array(
            'nama_bahan_baku' => $this->input->post('nama_bahan_baku'),
            'jenis_bahan_baku' => $this->input->post('jenis_bahan_baku'),
            'harga_bahan_baku' => $this->input->post('harga_bahan_baku')
        );
        $result = $this->db_produksi->simpanDataHargaPokokProduksi($dataProduksi);
        $data = $this->session->userdata('logged_user') ? TRUE : FALSE;
        if ($result) {
            if ($data) {
                $dataProduksi['notif'] = 'Data Berhasil Disimpan';
                $dataProduksi['produksi'] = $this->db_produksi->getPokokProduksi()->result();
                $this->load->view('kelolaHargaPokokProduksi', $dataProduksi);
            } else {
                $session = 'Waktu Session Habis';
                $data['notif'] = $session;
                $this->load->view('Login', $data);
            }
        } else {
            if ($data) {
                $dataProduksi['notif'] = 'Data Gagal Disimpan';
                $dataProduksi['produksi'] = $this->db_produksi->getPokokProduksi()->result();
                $this->load->view('kelolaHargaPokokProduksi', $dataProduksi);
            } else {
                $session = 'Waktu Session Habis';
                $data['notif'] = $session;
                $this->load->view('Login', $data);
            }
        }
    }

    public function editDataHargaPokokProduksi() {
        $id_bahan_baku = $this->input->post('id_bahan_baku');
        $dataProduksi = array(
            'nama_bahan_baku' => $this->input->post('nama_bahan_baku'),
            'jenis_bahan_baku' => $this->input->post('jenis_bahan_baku'),
            'harga_bahan_baku' => $this->input->post('harga_bahan_baku')
        );
        $result = $this->db_produksi->editDataHargaPokokProduksi($id_bahan_baku, $dataProduksi);
        $data = $this->session->userdata('logged_user') ? TRUE : FALSE;
        if ($result) {
            if ($data) {
                $dataProduksi['notif'] = 'Data Berhasil Diubah';
                $dataProduksi['produksi'] = $this->db_produksi->getPokokProduksi()->result();
                $this->load->view('kelolaHargaPokokProduksi', $dataProduksi);
            } else {
                $session = 'Waktu Session Habis';
                $data['notif'] = $session;
                $this->load->view('Login', $data);
            }
        } else {
            if ($data) {
                $dataProduksi['notif'] = 'Data Gagal Diubah';
                $dataProduksi['produksi'] = $this->db_produksi->getPokokProduksi()->result();
                $this->load->view('kelolaHargaPokokProduksi', $dataProduksi);
            } else {
                $session = 'Waktu Session Habis';
                $data['notif'] = $session;
                $this->load->view('Login', $data);
            }
        }
    }

    public function hapusDataHargaPokokProduksi($id_bahan_baku) {
        $result = $this->db_produksi->hapusDataHargaPokokProduksi($id_bahan_baku);
        $data = $this->session->userdata('logged_user') ? TRUE : FALSE;
        if ($result) {
            if ($data) {
                $dataProduksi['notif'] = 'Data Berhasil Dihapus';
                $dataProduksi['produksi'] = $this->db_produksi->getPokokProduksi()->result();
                $this->load->view('kelolaHargaPokokProduksi', $dataProduksi);
            } else {
                $session = 'Waktu Session Habis';
                $data['notif'] = $session;
                $this->load->view('Login', $data);
            }
        } else {
            if ($data) {
                $dataProduksi['notif'] = 'Data Gagal Dihapus';
                $dataProduksi['produksi'] = $this->db_produksi->getPokokProduksi()->result();
                $this->load->view('kelolaHargaPokokProduksi', $dataProduksi);
            } else {
                $session = 'Waktu Session Habis';
                $data['notif'] = $session;
                $this->load->view('Login', $data);
            }
        }
    }

    public function tampilkanFormInputHargaPokokProduksi() {
        $this->load->view('formInputHargaPokokProduksi');
    }

    public function tampilkanFormEditHargaPokokProduksi($id_produksi) {
        $dataProduksi['produksi'] = $this->db_produksi->getPokokProduksiTertentu($id_produksi)->result();
        $this->load->view('formEditHargaPokokProduksi', $dataProduksi);
    }

    public function tampilkanMenentukanHargaPokokProduksi() {
        $dataProduksi['produksi'] = $this->db_produksi->getPokokProduksi()->result();
        $this->load->view('menentukanHargaPokokProduksi', $dataProduksi);
    }

    public function menghitungHargaPokokProduksi() {
        //Biaya Bahan Baku
        $BBB = $this->input->post('BBB');
        
        $totalBBB = 0;
        for ($index = 1; $index <= $BBB; $index++) {
            if ($this->input->post("jumlahBBB" . $index) != NULL || $this->input->post("jumlahBBB" . $index) != 0) {
                $nama = $this->input->post("nama_bahan_bakuBBB" . $index);
                $jumlah = $this->input->post("jumlahBBB" . $index);
                $harga = $this->input->post("hargaBBB" . $index);

                $dataProduksi['nama_bahan_bakuBBB'][$index] = $nama;
                $dataProduksi['jumlahBBB'][$index] = $jumlah;
                $dataProduksi['hargaBBB'][$index] = $harga;

                $totalBBB += ($jumlah * $harga);
            }  else {
                $BBB--;
            }
        }
        $dataProduksi['BBB'] = $BBB;
        $dataProduksi['totalBBB'] = $totalBBB;
        

        //Biaya Tenaga Kerja Langsung
        $BTKL = $this->input->post('BTKL');
        
        $totalBTKL = 0;
        for ($index = 1; $index <= $BTKL; $index++) {
            if ($this->input->post("jumlahBTKL" . $index) != NULL || $this->input->post("jumlahBTKL" . $index) != 0) {
                $nama = $this->input->post("nama_bahan_bakuBTKL" . $index);
                $jumlah = $this->input->post("jumlahBTKL" . $index);
                $harga = $this->input->post("hargaBTKL" . $index);
                
                $dataProduksi['nama_bahan_bakuBTKL'][$index] = $nama;
                $dataProduksi['jumlahBTKL'][$index] = $jumlah;
                $dataProduksi['hargaBTKL'][$index] = $harga;

                $totalBTKL += ($jumlah * $harga);
            }else{
                $BTKL--;
            }
        }
        $dataProduksi['BTKL'] = $BTKL;
        $dataProduksi['totalBTKL'] = $totalBTKL;
        

        //Biaya Overhead Variabel
        $BOV = $this->input->post('BOV');
        
        $totalBOV = 0;
        for ($index = 1; $index <= $BOV; $index++) {
            if ($this->input->post("jumlahBOV" . $index) != NULL || $this->input->post("jumlahBOV" . $index) != 0) {
                $nama = $this->input->post("nama_bahan_bakuBOV" . $index);
                $jumlah = $this->input->post("jumlahBOV" . $index);
                $harga = $this->input->post("hargaBOV" . $index);

                $dataProduksi['nama_bahan_bakuBOV'][$index] = $nama;
                $dataProduksi['jumlahBOV'][$index] = $jumlah;
                $dataProduksi['hargaBOV'][$index] = $harga;

                $totalBOV += ($jumlah * $harga);
            }else{
                $BOV--;
            }
        }
        $dataProduksi['BOV'] = $BOV;
        $dataProduksi['totalBOV'] = $totalBOV;

        $dataProduksi['totalProduksi'] = $totalBBB + $totalBTKL + $totalBOV;

        $this->load->view('totalHargaPokokProduksi', $dataProduksi);
    }

}
