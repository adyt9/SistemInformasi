<?php

require('fpdf/fpdf.php');


//cell(width,height,text,border,end line,align)
if ($asal == 'barang') {
    $pdf = new FPDF('P', 'mm', 'A4');
    $pdf->AddPage();
    $pdf->SetFont('Arial', 'B', 14);
    if ($tanda == 'bulan') {
        $pdf->Cell(190, 10, 'Laporan Persediaan Barang Bulan ke - ' . date('m') . " Tahun " . date('Y'), 0, 1, "C");
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(190, 10, 'Persediaan Barang Tersedia', 0, 1, "L");

        $pdf->Cell(10, 7, 'No', 1, 0, "C");
        $pdf->Cell(30, 7, 'Jenis Barang', 1, 0, "C");
        $pdf->Cell(50, 7, 'Nama Barang', 1, 0, "C");
        $pdf->Cell(60, 7, 'Tanggal Barang Diterima', 1, 0, "C");
        $pdf->Cell(40, 7, 'Jumlah Barang', 1, 1, "C");
        $pdf->SetFont('Arial', '', 12);
        $i = 1;
        foreach ($barang as $b) {
            if ($b->tanggal_barang_keluar == NULL || $b->tanggal_barang_keluar == "0000-00-00") {
                
                    $pdf->Cell(10, 7, "$i", 1, 0, "C");
                    $pdf->Cell(30, 7, "$b->jenis_barang", 1);
                    $pdf->Cell(50, 7, "$b->nama_barang", 1);
                    $pdf->Cell(60, 7, "$b->tanggal_barang_masuk", 1, 0, "C");
                    $pdf->Cell(40, 7, "$b->jumlah_barang", 1, 1, "C");
                    $i++;
                
            }
        }

        $pdf->Ln();
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(190, 10, 'Persediaan Barang Bulan ke - ' . date('m') . " Tahun " . date('Y'), 0, 1, "L");

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(10, 7, 'No', 1, 0, "C");
        $pdf->Cell(44, 7, 'Jenis', 1, 0, "C");
        $pdf->Cell(46, 7, 'Nama Barang', 1, 0, "C");
        $pdf->Cell(38, 7, 'Tanggal Diterima', 1, 0, "C");
        $pdf->Cell(18, 7, 'Jumlah', 1, 0, "C");
        $pdf->Cell(34, 7, 'Harga', 1, 1, "C");
        $pdf->SetFont('Arial', '', 12);


        $j = 1;
        $totalHargaBulan = 0;
        foreach ($barang as $b) {
            if ($b->jenis_barang == "Kain" && $b->bulan == date('m')) {
                $pdf->Cell(10, 7, "$j", 1, 0, "C");
                $pdf->Cell(44, 7, "$b->jenis_barang", 1);
                $pdf->Cell(46, 7, "$b->nama_barang", 1);
                $pdf->Cell(38, 7, "$b->tanggal_barang_masuk", 1, 0, "C");
                $pdf->Cell(18, 7, "$b->jumlah_barang", 1, 0, "C");
                $pdf->Cell(34, 7, number_format($b->harga_barang, 2, ',', '.'), 1, 1, "R");
                $j++;
                $totalHargaBulan += $b->harga_barang;
            }
        }
        foreach ($barang as $b) {
            if ($b->jenis_barang == "Benang" && $b->bulan == date('m')) {
                $pdf->Cell(10, 7, "$j", 1, 0, "C");
                $pdf->Cell(44, 7, "$b->jenis_barang", 1);
                $pdf->Cell(46, 7, "$b->nama_barang", 1);
                $pdf->Cell(38, 7, "$b->tanggal_barang_masuk", 1, 0, "C");
                $pdf->Cell(18, 7, "$b->jumlah_barang", 1, 0, "C");
                $pdf->Cell(34, 7, number_format($b->harga_barang, 2, ',', '.'), 1, 1, "R");
                $j++;
                $totalHargaBulan += $b->harga_barang;
            }
        }
        foreach ($barang as $b) {
            if ($b->jenis_barang == "Pewarna" && $b->bulan == date('m')) {
                $pdf->Cell(10, 7, "$j", 1, 0, "C");
                $pdf->Cell(44, 7, "$b->jenis_barang", 1);
                $pdf->Cell(46, 7, "$b->nama_barang", 1);
                $pdf->Cell(38, 7, "$b->tanggal_barang_masuk", 1, 0, "C");
                $pdf->Cell(18, 7, "$b->jumlah_barang", 1, 0, "C");
                $pdf->Cell(34, 7, number_format($b->harga_barang, 2, ',', '.'), 1, 1, "R");
                $j++;
                $totalHargaBulan += $b->harga_barang;
            }
        }
        foreach ($barang as $b) {
            if ($b->jenis_barang == "Kancing" && $b->bulan == date('m')) {
                $pdf->Cell(10, 7, "$j", 1, 0, "C");
                $pdf->Cell(44, 7, "$b->jenis_barang", 1);
                $pdf->Cell(46, 7, "$b->nama_barang", 1);
                $pdf->Cell(38, 7, "$b->tanggal_barang_masuk", 1, 0, "C");
                $pdf->Cell(18, 7, "$b->jumlah_barang", 1, 0, "C");
                $pdf->Cell(34, 7, number_format($b->harga_barang, 2, ',', '.'), 1, 1, "R");
                $j++;
                $totalHargaBulan += $b->harga_barang;
            }
        }
        foreach ($barang as $b) {
            if ($b->jenis_barang == "Peralatan Jahit" && $b->bulan == date('m')) {
                $pdf->Cell(10, 7, "$j", 1, 0, "C");
                $pdf->Cell(44, 7, "$b->jenis_barang", 1);
                $pdf->Cell(46, 7, "$b->nama_barang", 1);
                $pdf->Cell(38, 7, "$b->tanggal_barang_masuk", 1, 0, "C");
                $pdf->Cell(18, 7, "$b->jumlah_barang", 1, 0, "C");
                $pdf->Cell(34, 7, number_format($b->harga_barang, 2, ',', '.'), 1, 1, "R");
                $j++;
                $totalHargaBulan += $b->harga_barang;
            }
        }
        foreach ($barang as $b) {
            if ($b->jenis_barang == "Peralatan Sablon" && $b->bulan == date('m')) {
                $pdf->Cell(10, 7, "$j", 1, 0, "C");
                $pdf->Cell(44, 7, "$b->jenis_barang", 1);
                $pdf->Cell(46, 7, "$b->nama_barang", 1);
                $pdf->Cell(38, 7, "$b->tanggal_barang_masuk", 1, 0, "C");
                $pdf->Cell(18, 7, "$b->jumlah_barang", 1, 0, "C");
                $pdf->Cell(34, 7, number_format($b->harga_barang, 2, ',', '.'), 1, 1, "R");
                $j++;
                $totalHargaBulan += $b->harga_barang;
            }
        }
        foreach ($barang as $b) {
            if ($b->jenis_barang == "Produksi" && $b->bulan == date('m')) {
                $pdf->Cell(10, 7, "$j", 1, 0, "C");
                $pdf->Cell(44, 7, "$b->jenis_barang", 1);
                $pdf->Cell(46, 7, "$b->nama_barang", 1);
                $pdf->Cell(38, 7, "$b->tanggal_barang_masuk", 1, 0, "C");
                $pdf->Cell(18, 7, "$b->jumlah_barang", 1, 0, "C");
                $pdf->Cell(34, 7, number_format($b->harga_barang, 2, ',', '.'), 1, 1, "R");
                $j++;
                $totalHargaBulan += $b->harga_barang;
            }
        }
        foreach ($barang as $b) {
            if ($b->jenis_barang == "Bahan Setengah Jadi" && $b->bulan == date('m')) {
                $pdf->Cell(10, 7, "$j", 1, 0, "C");
                $pdf->Cell(44, 7, "$b->jenis_barang", 1);
                $pdf->Cell(46, 7, "$b->nama_barang", 1);
                $pdf->Cell(38, 7, "$b->tanggal_barang_masuk", 1, 0, "C");
                $pdf->Cell(18, 7, "$b->jumlah_barang", 1, 0, "C");
                $pdf->Cell(34, 7, number_format($b->harga_barang, 2, ',', '.'), 1, 1, "R");
                $j++;
                $totalHargaBulan += $b->harga_barang;
            }
        }
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(152, 8, 'Total Pengeluaran Bulan Ini', 0, 0, "R");
        $pdf->Cell(4, 8, '', 0, 0, "R");
        $pdf->Cell(34, 8, number_format($totalHargaBulan, 2, ',', '.'), 1, 1, "R");
        $pdf->Output();
    } else if ($tanda == 'tahun') {
        $pdf->Cell(190, 10, 'Laporan Persediaan Barang Tahun ' . date('Y'), 0, 1, "C");
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(190, 10, 'Persediaan Barang Tersedia', 0, 1, "L");

        $pdf->Cell(10, 7, 'No', 1, 0, "C");
        $pdf->Cell(30, 7, 'Jenis Barang', 1, 0, "C");
        $pdf->Cell(50, 7, 'Nama Barang', 1, 0, "C");
        $pdf->Cell(60, 7, 'Tanggal Barang Diterima', 1, 0, "C");
        $pdf->Cell(40, 7, 'Jumlah Barang', 1, 1, "C");
        $pdf->SetFont('Arial', '', 12);
        $i = 1;
        foreach ($barang as $b) {
            if ($b->tanggal_barang_keluar == NULL || $b->tanggal_barang_keluar == "0000-00-00") {
                
                    $pdf->Cell(10, 7, "$i", 1, 0, "C");
                    $pdf->Cell(30, 7, "$b->jenis_barang", 1);
                    $pdf->Cell(50, 7, "$b->nama_barang", 1);
                    $pdf->Cell(60, 7, "$b->tanggal_barang_masuk", 1, 0, "C");
                    $pdf->Cell(40, 7, "$b->jumlah_barang", 1, 1, "C");
                    $i++;
                
            }
        }

        $pdf->Ln();
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(190, 10, 'Persediaan Barang Tahun ' . date('Y'), 0, 1, "L");

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(10, 7, 'No', 1, 0, "C");
        $pdf->Cell(44, 7, 'Jenis', 1, 0, "C");
        $pdf->Cell(46, 7, 'Nama Barang', 1, 0, "C");
        $pdf->Cell(38, 7, 'Tanggal Diterima', 1, 0, "C");
        $pdf->Cell(18, 7, 'Jumlah', 1, 0, "C");
        $pdf->Cell(34, 7, 'Harga', 1, 1, "C");
        $pdf->SetFont('Arial', '', 12);


        $j = 1;
        $totalHargaTahun = 0;
        foreach ($barang as $b) {
            if ($b->jenis_barang == "Kain" && $b->tahun == date('Y')) {
                $pdf->Cell(10, 7, "$j", 1, 0, "C");
                $pdf->Cell(44, 7, "$b->jenis_barang", 1);
                $pdf->Cell(46, 7, "$b->nama_barang", 1);
                $pdf->Cell(38, 7, "$b->tanggal_barang_masuk", 1, 0, "C");
                $pdf->Cell(18, 7, "$b->jumlah_barang", 1, 0, "C");
                $pdf->Cell(34, 7, number_format($b->harga_barang, 2, ',', '.'), 1, 1, "R");
                $j++;
                $totalHargaTahun += $b->harga_barang;
            }
        }
        foreach ($barang as $b) {
            if ($b->jenis_barang == "Benang" && $b->tahun == date('Y')) {
                $pdf->Cell(10, 7, "$j", 1, 0, "C");
                $pdf->Cell(44, 7, "$b->jenis_barang", 1);
                $pdf->Cell(46, 7, "$b->nama_barang", 1);
                $pdf->Cell(38, 7, "$b->tanggal_barang_masuk", 1, 0, "C");
                $pdf->Cell(18, 7, "$b->jumlah_barang", 1, 0, "C");
                $pdf->Cell(34, 7, number_format($b->harga_barang, 2, ',', '.'), 1, 1, "R");
                $j++;
                $totalHargaTahun += $b->harga_barang;
            }
        }
        foreach ($barang as $b) {
            if ($b->jenis_barang == "Pewarna" && $b->tahun == date('Y')) {
                $pdf->Cell(10, 7, "$j", 1, 0, "C");
                $pdf->Cell(44, 7, "$b->jenis_barang", 1);
                $pdf->Cell(46, 7, "$b->nama_barang", 1);
                $pdf->Cell(38, 7, "$b->tanggal_barang_masuk", 1, 0, "C");
                $pdf->Cell(18, 7, "$b->jumlah_barang", 1, 0, "C");
                $pdf->Cell(34, 7, number_format($b->harga_barang, 2, ',', '.'), 1, 1, "R");
                $j++;
                $totalHargaTahun += $b->harga_barang;
            }
        }
        foreach ($barang as $b) {
            if ($b->jenis_barang == "Kancing" && $b->tahun == date('Y')) {
                $pdf->Cell(10, 7, "$j", 1, 0, "C");
                $pdf->Cell(44, 7, "$b->jenis_barang", 1);
                $pdf->Cell(46, 7, "$b->nama_barang", 1);
                $pdf->Cell(38, 7, "$b->tanggal_barang_masuk", 1, 0, "C");
                $pdf->Cell(18, 7, "$b->jumlah_barang", 1, 0, "C");
                $pdf->Cell(34, 7, number_format($b->harga_barang, 2, ',', '.'), 1, 1, "R");
                $j++;
                $totalHargaTahun += $b->harga_barang;
            }
        }
        foreach ($barang as $b) {
            if ($b->jenis_barang == "Peralatan Jahit" && $b->tahun == date('Y')) {
                $pdf->Cell(10, 7, "$j", 1, 0, "C");
                $pdf->Cell(44, 7, "$b->jenis_barang", 1);
                $pdf->Cell(46, 7, "$b->nama_barang", 1);
                $pdf->Cell(38, 7, "$b->tanggal_barang_masuk", 1, 0, "C");
                $pdf->Cell(18, 7, "$b->jumlah_barang", 1, 0, "C");
                $pdf->Cell(34, 7, number_format($b->harga_barang, 2, ',', '.'), 1, 1, "R");
                $j++;
                $totalHargaTahun += $b->harga_barang;
            }
        }
        foreach ($barang as $b) {
            if ($b->jenis_barang == "Peralatan Sablon" && $b->tahun == date('Y')) {
                $pdf->Cell(10, 7, "$j", 1, 0, "C");
                $pdf->Cell(44, 7, "$b->jenis_barang", 1);
                $pdf->Cell(46, 7, "$b->nama_barang", 1);
                $pdf->Cell(38, 7, "$b->tanggal_barang_masuk", 1, 0, "C");
                $pdf->Cell(18, 7, "$b->jumlah_barang", 1, 0, "C");
                $pdf->Cell(34, 7, number_format($b->harga_barang, 2, ',', '.'), 1, 1, "R");
                $j++;
                $totalHargaTahun += $b->harga_barang;
            }
        }
        foreach ($barang as $b) {
            if ($b->jenis_barang == "Produksi" && $b->tahun == date('Y')) {
                $pdf->Cell(10, 7, "$j", 1, 0, "C");
                $pdf->Cell(44, 7, "$b->jenis_barang", 1);
                $pdf->Cell(46, 7, "$b->nama_barang", 1);
                $pdf->Cell(38, 7, "$b->tanggal_barang_masuk", 1, 0, "C");
                $pdf->Cell(18, 7, "$b->jumlah_barang", 1, 0, "C");
                $pdf->Cell(34, 7, number_format($b->harga_barang, 2, ',', '.'), 1, 1, "R");
                $j++;
                $totalHargaTahun += $b->harga_barang;
            }
        }
        foreach ($barang as $b) {
            if ($b->jenis_barang == "Bahan Setengah Jadi" && $b->tahun == date('Y')) {
                $pdf->Cell(10, 7, "$j", 1, 0, "C");
                $pdf->Cell(44, 7, "$b->jenis_barang", 1);
                $pdf->Cell(46, 7, "$b->nama_barang", 1);
                $pdf->Cell(38, 7, "$b->tanggal_barang_masuk", 1, 0, "C");
                $pdf->Cell(18, 7, "$b->jumlah_barang", 1, 0, "C");
                $pdf->Cell(34, 7, number_format($b->harga_barang, 2, ',', '.'), 1, 1, "R");
                $j++;
                $totalHargaTahun += $b->harga_barang;
            }
        }
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(152, 8, 'Total Pengeluaran Tahun Ini', 0, 0, "R");
        $pdf->Cell(4, 8, '', 0, 0, "R");
        $pdf->Cell(34, 8, number_format($totalHargaTahun, 2, ',', '.'), 1, 1, "R");
        $pdf->Output();
    } else if ($tanda == 'seluruh') {
        $pdf->Cell(190, 10, 'Laporan Persediaan Barang Keseluruhan', 0, 1, "C");
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(190, 10, 'Persediaan Barang Tersedia', 0, 1, "L");

        $pdf->Cell(10, 7, 'No', 1, 0, "C");
        $pdf->Cell(30, 7, 'Jenis Barang', 1, 0, "C");
        $pdf->Cell(50, 7, 'Nama Barang', 1, 0, "C");
        $pdf->Cell(60, 7, 'Tanggal Barang Diterima', 1, 0, "C");
        $pdf->Cell(40, 7, 'Jumlah Barang', 1, 1, "C");
        $pdf->SetFont('Arial', '', 12);
        $i = 1;
        foreach ($barang as $b) {
            if ($b->tanggal_barang_keluar == NULL || $b->tanggal_barang_keluar == "0000-00-00") {
                
                    $pdf->Cell(10, 7, "$i", 1, 0, "C");
                    $pdf->Cell(30, 7, "$b->jenis_barang", 1);
                    $pdf->Cell(50, 7, "$b->nama_barang", 1);
                    $pdf->Cell(60, 7, "$b->tanggal_barang_masuk", 1, 0, "C");
                    $pdf->Cell(40, 7, "$b->jumlah_barang", 1, 1, "C");
                    $i++;
                
            }
        }

        $pdf->Ln();
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(190, 10, 'Persediaan Barang Tahun ' . date('Y'), 0, 1, "L");

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(10, 7, 'No', 1, 0, "C");
        $pdf->Cell(44, 7, 'Jenis', 1, 0, "C");
        $pdf->Cell(46, 7, 'Nama Barang', 1, 0, "C");
        $pdf->Cell(38, 7, 'Tanggal Diterima', 1, 0, "C");
        $pdf->Cell(18, 7, 'Jumlah', 1, 0, "C");
        $pdf->Cell(34, 7, 'Harga', 1, 1, "C");
        $pdf->SetFont('Arial', '', 12);


        $j = 1;
        $totalHarga = 0;
        foreach ($barang as $b) {
            if ($b->jenis_barang == "Kain") {
                $pdf->Cell(10, 7, "$j", 1, 0, "C");
                $pdf->Cell(44, 7, "$b->jenis_barang", 1);
                $pdf->Cell(46, 7, "$b->nama_barang", 1);
                $pdf->Cell(38, 7, "$b->tanggal_barang_masuk", 1, 0, "C");
                $pdf->Cell(18, 7, "$b->jumlah_barang", 1, 0, "C");
                $pdf->Cell(34, 7, number_format($b->harga_barang, 2, ',', '.'), 1, 1, "R");
                $j++;
                $totalHarga += $b->harga_barang;
            }
        }
        foreach ($barang as $b) {
            if ($b->jenis_barang == "Benang") {
                $pdf->Cell(10, 7, "$j", 1, 0, "C");
                $pdf->Cell(44, 7, "$b->jenis_barang", 1);
                $pdf->Cell(46, 7, "$b->nama_barang", 1);
                $pdf->Cell(38, 7, "$b->tanggal_barang_masuk", 1, 0, "C");
                $pdf->Cell(18, 7, "$b->jumlah_barang", 1, 0, "C");
                $pdf->Cell(34, 7, number_format($b->harga_barang, 2, ',', '.'), 1, 1, "R");
                $j++;
                $totalHarga += $b->harga_barang;
            }
        }
        foreach ($barang as $b) {
            if ($b->jenis_barang == "Pewarna") {
                $pdf->Cell(10, 7, "$j", 1, 0, "C");
                $pdf->Cell(44, 7, "$b->jenis_barang", 1);
                $pdf->Cell(46, 7, "$b->nama_barang", 1);
                $pdf->Cell(38, 7, "$b->tanggal_barang_masuk", 1, 0, "C");
                $pdf->Cell(18, 7, "$b->jumlah_barang", 1, 0, "C");
                $pdf->Cell(34, 7, number_format($b->harga_barang, 2, ',', '.'), 1, 1, "R");
                $j++;
                $totalHarga += $b->harga_barang;
            }
        }
        foreach ($barang as $b) {
            if ($b->jenis_barang == "Kancing") {
                $pdf->Cell(10, 7, "$j", 1, 0, "C");
                $pdf->Cell(44, 7, "$b->jenis_barang", 1);
                $pdf->Cell(46, 7, "$b->nama_barang", 1);
                $pdf->Cell(38, 7, "$b->tanggal_barang_masuk", 1, 0, "C");
                $pdf->Cell(18, 7, "$b->jumlah_barang", 1, 0, "C");
                $pdf->Cell(34, 7, number_format($b->harga_barang, 2, ',', '.'), 1, 1, "R");
                $j++;
                $totalHarga += $b->harga_barang;
            }
        }
        foreach ($barang as $b) {
            if ($b->jenis_barang == "Peralatan Jahit") {
                $pdf->Cell(10, 7, "$j", 1, 0, "C");
                $pdf->Cell(44, 7, "$b->jenis_barang", 1);
                $pdf->Cell(46, 7, "$b->nama_barang", 1);
                $pdf->Cell(38, 7, "$b->tanggal_barang_masuk", 1, 0, "C");
                $pdf->Cell(18, 7, "$b->jumlah_barang", 1, 0, "C");
                $pdf->Cell(34, 7, number_format($b->harga_barang, 2, ',', '.'), 1, 1, "R");
                $j++;
                $totalHarga += $b->harga_barang;
            }
        }
        foreach ($barang as $b) {
            if ($b->jenis_barang == "Peralatan Sablon") {
                $pdf->Cell(10, 7, "$j", 1, 0, "C");
                $pdf->Cell(44, 7, "$b->jenis_barang", 1);
                $pdf->Cell(46, 7, "$b->nama_barang", 1);
                $pdf->Cell(38, 7, "$b->tanggal_barang_masuk", 1, 0, "C");
                $pdf->Cell(18, 7, "$b->jumlah_barang", 1, 0, "C");
                $pdf->Cell(34, 7, number_format($b->harga_barang, 2, ',', '.'), 1, 1, "R");
                $j++;
                $totalHarga += $b->harga_barang;
            }
        }
        foreach ($barang as $b) {
            if ($b->jenis_barang == "Produksi") {
                $pdf->Cell(10, 7, "$j", 1, 0, "C");
                $pdf->Cell(44, 7, "$b->jenis_barang", 1);
                $pdf->Cell(46, 7, "$b->nama_barang", 1);
                $pdf->Cell(38, 7, "$b->tanggal_barang_masuk", 1, 0, "C");
                $pdf->Cell(18, 7, "$b->jumlah_barang", 1, 0, "C");
                $pdf->Cell(34, 7, number_format($b->harga_barang, 2, ',', '.'), 1, 1, "R");
                $j++;
                $totalHarga += $b->harga_barang;
            }
        }
        foreach ($barang as $b) {
            if ($b->jenis_barang == "Bahan Setengah Jadi") {
                $pdf->Cell(10, 7, "$j", 1, 0, "C");
                $pdf->Cell(44, 7, "$b->jenis_barang", 1);
                $pdf->Cell(46, 7, "$b->nama_barang", 1);
                $pdf->Cell(38, 7, "$b->tanggal_barang_masuk", 1, 0, "C");
                $pdf->Cell(18, 7, "$b->jumlah_barang", 1, 0, "C");
                $pdf->Cell(34, 7, number_format($b->harga_barang, 2, ',', '.'), 1, 1, "R");
                $j++;
                $totalHarga += $b->harga_barang;
            }
        }
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(152, 8, 'Total Pengeluaran Keseluruhan', 0, 0, "R");
        $pdf->Cell(4, 8, '', 0, 0, "R");
        $pdf->Cell(34, 8, number_format($totalHarga, 2, ',', '.'), 1, 1, "R");
        $pdf->Output();
    }
} else if ($asal == 'transaksi') {
    $pdf = new FPDF('L', 'mm', 'A4');
    $pdf->AddPage();
    $pdf->SetFont('Arial', 'B', 14);
    if ($tanda == 'bulan') {
        $pdf->Cell(277, 10, 'Laporan Transaksi Penjualan Bulan ke - ' . date('m') . " Tahun " . date('Y'), 0, 1, "C");
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(190, 10, 'Total Pemasukan', 0, 1, "L");

        $pdf->Cell(10, 7, 'No', 1, 0, "C");
        $pdf->Cell(45, 7, 'Nama Pembeli', 1, 0, "C");
        $pdf->Cell(40, 7, 'Pembelian', 1, 0, "C");
        $pdf->Cell(45, 7, 'Jenis Order', 1, 0, "C");
        $pdf->Cell(42, 7, 'Jumlah Pembelian', 1, 0, "C");
        $pdf->Cell(50, 7, 'Tanggal Pembelian', 1, 0, "C");
        $pdf->Cell(45, 7, 'Total Harga', 1, 1, "C");

        $pdf->SetFont('Arial', '', 12);
        $i = 1;
        $totalHarga = 0;
        foreach ($transaksi as $t) {
            if ($t->bulan == date("m")) {
                $pdf->Cell(10, 7, "$i", 1, 0, "C");
                $pdf->Cell(45, 7, "$t->nama_pembeli", 1);
                $pdf->Cell(40, 7, "$t->nama_barang", 1);
                $pdf->Cell(45, 7, "$t->jenis_barang_pembelian", 1);
                $pdf->Cell(42, 7, "$t->jumlah_pembelian", 1, 0, "C");
                $pdf->Cell(50, 7, "$t->tanggal_pembelian", 1, 0, "C");
                $pdf->Cell(45, 7, number_format($t->harga, 2, ',', '.'), 1, 1, "R");
                $i++;
                $totalHarga += $t->harga;
            }
        }
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(228, 8, 'Total Pemasukan', 0, 0, "R");
        $pdf->Cell(4, 8, '', 0, 0, "R");
        $pdf->Cell(45, 8, number_format($totalHarga, 2, ',', '.'), 1, 1, "R");

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(190, 10, 'Total Keuntungan', 0, 1, "L");

        $pdf->Cell(10, 7, 'No', 1, 0, "C");
        $pdf->Cell(45, 7, 'Nama Pembeli', 1, 0, "C");
        $pdf->Cell(40, 7, 'Pembelian', 1, 0, "C");
        $pdf->Cell(40, 7, 'Jumlah Pembelian', 1, 0, "C");
        $pdf->Cell(50, 7, 'Total Harga Pembelian', 1, 0, "C");
        $pdf->Cell(47, 7, 'Total Biaya Produksi', 1, 0, "C");
        $pdf->Cell(45, 7, 'Keuntungan', 1, 1, "C");

        $pdf->SetFont('Arial', '', 12);
        $i = 1;
        $totalKeuntunganBulan = 0;
        foreach ($transaksi as $t) {
            if ($t->bulan == date("m")) {
                $totalKeuntungan = $t->harga - $t->harga_barang;
                $pdf->Cell(10, 7, "$i", 1, 0, "C");
                $pdf->Cell(45, 7, "$t->nama_pembeli", 1);
                $pdf->Cell(40, 7, "$t->nama_barang", 1);
                $pdf->Cell(40, 7, "$t->jumlah_pembelian", 1, 0, "C");
                $pdf->Cell(50, 7, number_format($t->harga, 2, ',', '.'), 1, 0, "R");
                $pdf->Cell(47, 7, number_format($t->harga_barang, 2, ',', '.'), 1, 0, "R");
                $pdf->Cell(45, 7, number_format($totalKeuntungan, 2, ',', '.'), 1, 1, "R");
                $i++;
                $totalKeuntunganBulan += $totalKeuntungan;
            }
        }
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(228, 8, 'Total Keuntungan', 0, 0, "R");
        $pdf->Cell(4, 8, '', 0, 0, "R");
        $pdf->Cell(45, 8, number_format($totalKeuntunganBulan, 2, ',', '.'), 1, 1, "R");


        $pdf->Output();
    } else if ($tanda == 'tahun') {
        $pdf->Cell(277, 10, 'Laporan Transaksi Penjualan Tahun ' . date('Y'), 0, 1, "C");
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(190, 10, 'Total Pemasukan', 0, 1, "L");

        $pdf->Cell(10, 7, 'No', 1, 0, "C");
        $pdf->Cell(45, 7, 'Nama Pembeli', 1, 0, "C");
        $pdf->Cell(40, 7, 'Pembelian', 1, 0, "C");
        $pdf->Cell(45, 7, 'Jenis Order', 1, 0, "C");
        $pdf->Cell(42, 7, 'Jumlah Pembelian', 1, 0, "C");
        $pdf->Cell(50, 7, 'Tanggal Pembelian', 1, 0, "C");
        $pdf->Cell(45, 7, 'Total Harga', 1, 1, "C");

        $pdf->SetFont('Arial', '', 12);
        $i = 1;
        $totalHarga = 0;
        foreach ($transaksi as $t) {
            if ($t->tahun == date("Y")) {
                $pdf->Cell(10, 7, "$i", 1, 0, "C");
                $pdf->Cell(45, 7, "$t->nama_pembeli", 1);
                $pdf->Cell(40, 7, "$t->nama_barang", 1);
                $pdf->Cell(45, 7, "$t->jenis_barang_pembelian", 1);
                $pdf->Cell(42, 7, "$t->jumlah_pembelian", 1, 0, "C");
                $pdf->Cell(50, 7, "$t->tanggal_pembelian", 1, 0, "C");
                $pdf->Cell(45, 7, number_format($t->harga, 2, ',', '.'), 1, 1, "R");
                $i++;
                $totalHarga += $t->harga;
            }
        }
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(228, 8, 'Total Pemasukan', 0, 0, "R");
        $pdf->Cell(4, 8, '', 0, 0, "R");
        $pdf->Cell(45, 8, number_format($totalHarga, 2, ',', '.'), 1, 1, "R");

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(190, 10, 'Total Keuntungan', 0, 1, "L");

        $pdf->Cell(10, 7, 'No', 1, 0, "C");
        $pdf->Cell(45, 7, 'Nama Pembeli', 1, 0, "C");
        $pdf->Cell(40, 7, 'Pembelian', 1, 0, "C");
        $pdf->Cell(40, 7, 'Jumlah Pembelian', 1, 0, "C");
        $pdf->Cell(50, 7, 'Total Harga Pembelian', 1, 0, "C");
        $pdf->Cell(47, 7, 'Total Biaya Produksi', 1, 0, "C");
        $pdf->Cell(45, 7, 'Keuntungan', 1, 1, "C");

        $pdf->SetFont('Arial', '', 12);
        $i = 1;
        $totalKeuntunganTahun = 0;
        foreach ($transaksi as $t) {
            if ($t->tahun == date("Y")) {
                $totalKeuntungan = $t->harga - $t->harga_barang;
                $pdf->Cell(10, 7, "$i", 1, 0, "C");
                $pdf->Cell(45, 7, "$t->nama_pembeli", 1);
                $pdf->Cell(40, 7, "$t->nama_barang", 1);
                $pdf->Cell(40, 7, "$t->jumlah_pembelian", 1, 0, "C");
                $pdf->Cell(50, 7, number_format($t->harga, 2, ',', '.'), 1, 0, "R");
                $pdf->Cell(47, 7, number_format($t->harga_barang, 2, ',', '.'), 1, 0, "R");
                $pdf->Cell(45, 7, number_format($totalKeuntungan, 2, ',', '.'), 1, 1, "R");
                $i++;
                $totalKeuntunganTahun += $totalKeuntungan;
            }
        }
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(228, 8, 'Total Keuntungan', 0, 0, "R");
        $pdf->Cell(4, 8, '', 0, 0, "R");
        $pdf->Cell(45, 8, number_format($totalKeuntunganTahun, 2, ',', '.'), 1, 1, "R");


        $pdf->Output();
    } else if ($tanda == 'seluruh') {
        $pdf->Cell(277, 10, 'Laporan Transaksi Penjualan Keseluruhan', 0, 1, "C");
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(190, 10, 'Total Pemasukan', 0, 1, "L");

        $pdf->Cell(10, 7, 'No', 1, 0, "C");
        $pdf->Cell(45, 7, 'Nama Pembeli', 1, 0, "C");
        $pdf->Cell(40, 7, 'Pembelian', 1, 0, "C");
        $pdf->Cell(45, 7, 'Jenis Order', 1, 0, "C");
        $pdf->Cell(42, 7, 'Jumlah Pembelian', 1, 0, "C");
        $pdf->Cell(50, 7, 'Tanggal Pembelian', 1, 0, "C");
        $pdf->Cell(45, 7, 'Total Harga', 1, 1, "C");

        $pdf->SetFont('Arial', '', 12);
        $i = 1;
        $totalHarga = 0;
        foreach ($transaksi as $t) {
            $pdf->Cell(10, 7, "$i", 1, 0, "C");
            $pdf->Cell(45, 7, "$t->nama_pembeli", 1);
            $pdf->Cell(40, 7, "$t->nama_barang", 1);
            $pdf->Cell(45, 7, "$t->jenis_barang_pembelian", 1);
            $pdf->Cell(42, 7, "$t->jumlah_pembelian", 1, 0, "C");
            $pdf->Cell(50, 7, "$t->tanggal_pembelian", 1, 0, "C");
            $pdf->Cell(45, 7, number_format($t->harga, 2, ',', '.'), 1, 1, "R");
            $i++;
            $totalHarga += $t->harga;
        }
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(228, 8, 'Total Pemasukan', 0, 0, "R");
        $pdf->Cell(4, 8, '', 0, 0, "R");
        $pdf->Cell(45, 8, number_format($totalHarga, 2, ',', '.'), 1, 1, "R");

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(190, 10, 'Total Keuntungan', 0, 1, "L");

        $pdf->Cell(10, 7, 'No', 1, 0, "C");
        $pdf->Cell(45, 7, 'Nama Pembeli', 1, 0, "C");
        $pdf->Cell(40, 7, 'Pembelian', 1, 0, "C");
        $pdf->Cell(40, 7, 'Jumlah Pembelian', 1, 0, "C");
        $pdf->Cell(50, 7, 'Total Harga Pembelian', 1, 0, "C");
        $pdf->Cell(47, 7, 'Total Biaya Produksi', 1, 0, "C");
        $pdf->Cell(45, 7, 'Keuntungan', 1, 1, "C");

        $pdf->SetFont('Arial', '', 12);
        $i = 1;
        $totalKeuntunganKeseluruhan = 0;
        foreach ($transaksi as $t) {
            $totalKeuntungan = $t->harga - $t->harga_barang;
            $pdf->Cell(10, 7, "$i", 1, 0, "C");
            $pdf->Cell(45, 7, "$t->nama_pembeli", 1);
            $pdf->Cell(40, 7, "$t->nama_barang", 1);
            $pdf->Cell(40, 7, "$t->jumlah_pembelian", 1, 0, "C");
            $pdf->Cell(50, 7, number_format($t->harga, 2, ',', '.'), 1, 0, "R");
            $pdf->Cell(47, 7, number_format($t->harga_barang, 2, ',', '.'), 1, 0, "R");
            $pdf->Cell(45, 7, number_format($totalKeuntungan, 2, ',', '.'), 1, 1, "R");
            $i++;
            $totalKeuntunganKeseluruhan += $totalKeuntungan;
        }
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(228, 8, 'Total Keuntungan', 0, 0, "R");
        $pdf->Cell(4, 8, '', 0, 0, "R");
        $pdf->Cell(45, 8, number_format($totalKeuntunganKeseluruhan, 2, ',', '.'), 1, 1, "R");


        $pdf->Output();
    }
} else if ($asal == 'spt') {
    $pdf = new FPDF('P', 'mm', 'A4');
    $pdf->AddPage();
    $pdf->SetFont('Arial', 'B', 14);
    $pdf->Cell(190, 10, 'Laporan SPT Tahunan', 0, 1, "C");
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(190, 10, 'IDENTITAS : ', 0, 1, "L");
    $pdf->SetFont('Arial', '', 12);
    
    $pdf->Cell(50, 7, 'NPWP', 0, 0, "L");
    $pdf->Cell(5, 7, ':', 0, 0, "L");
    $pdf->Cell(135, 7, '21-467-555-1-955-233', 0, 1, "L");

    $pdf->Cell(50, 7, 'NAMA WAJIB PAJAK', 0, 0, "L");
    $pdf->Cell(5, 7, ':', 0, 0, "L");
    $pdf->Cell(135, 7, 'Muhammad Muklas', 0, 1, "L");
    
    $pdf->Cell(50, 7, 'JENIS USAHA', 0, 0, "L");
    $pdf->Cell(5, 7, ':', 0, 0, "L");
    $pdf->Cell(135, 7, 'INDUSTRI', 0, 1, "L");
    
    $pdf->Cell(50, 7, 'NO. TELEPON', 0, 0, "L");
    $pdf->Cell(5, 7, ':', 0, 0, "L");
    $pdf->Cell(135, 7, '(031)-3458472', 0, 1, "L");
    $pdf->Ln();
    
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(190, 5, 'PENGHASILAN DARI USAHA DAN/ATAU PEKERJAAN BEBAS BERDASARKAN LAPORAN', 0, 1, "L");
    $pdf->Cell(190, 5, 'KEUANGAN KOMERSIAL : ', 0, 1, "L");
    $pdf->Ln();
    
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(10, 10, '1', 1, 0, "C");
    $pdf->Cell(120, 10, 'PEREDARAN USAHA', 1, 0, "L");
    $pdf->Cell(60, 10, number_format($omset, 2, ',', '.'), 1, 1, "R");
    
    $pdf->Cell(10, 10, '2', 1, 0, "C");
    $pdf->Cell(120, 10, 'HARGA POKOK PENJUALAN', 1, 0, "L");
    $pdf->Cell(60, 10, number_format($produksi, 2, ',', '.'), 1, 1, "R");
    
    $pdf->Cell(10, 10, '2', 1, 0, "C");
    $pdf->Cell(120, 10, 'LABA/RUGI BRUTO USAHA (1 - 2)', 1, 0, "L");
    $pdf->Cell(60, 10, number_format($labaRugi, 2, ',', '.'), 1, 1, "R");
    
    $pdf->Cell(10, 10, '2', 1, 0, "C");
    $pdf->Cell(120, 10, 'BIAYA USAHA', 1, 0, "L");
    $pdf->Cell(60, 10, '-', 1, 1, "R");
    
    $pdf->Cell(10, 10, '2', 1, 0, "C");
    $pdf->Cell(120, 10, 'PENGHASILAN NETO (3 - 4)', 1, 0, "L");
    $pdf->Cell(60, 10, number_format($neto, 2, ',', '.'), 1, 1, "R");


    $pdf->Output();
}
