<?php 
$var = $this->session->get_userdata();
$status = $var['logged_user'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Dashboard | Dashboard</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="<?php echo base_url(); ?>asset/images/icons/favicon.ico">
        <link rel="apple-touch-icon" href="<?php echo base_url(); ?>asset/images/icons/favicon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url(); ?>asset/images/icons/favicon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url(); ?>asset/images/icons/favicon-114x114.png">
        <!--Loading bootstrap css-->
        <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700">
        <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700,300">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>asset/styles/jquery-ui-1.10.4.custom.min.css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>asset/styles/font-awesome.min.css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>asset/styles/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>asset/styles/animate.css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>asset/styles/all.css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>asset/styles/main.css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>asset/styles/style-responsive.css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>asset/styles/zabuto_calendar.min.css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>asset/styles/pace.css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>asset/styles/jquery.news-ticker.css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>asset/styles/jplist-custom.css">
    </head>
    <body>
        <div>
            <!--BEGIN BACK TO TOP-->
            <a id="totop" href="#"><i class="fa fa-angle-up"></i></a>
            <!--END BACK TO TOP-->

            <!--BEGIN TOPBAR-->
            <div id="header-topbar-option-demo" class="page-header-topbar">
                <nav id="topbar" role="navigation" style="margin-bottom: 0;" data-step="3" class="navbar navbar-default navbar-static-top">
                    <div class="navbar-header">
                        <button type="button" data-toggle="collapse" data-target=".sidebar-collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                        <a id="logo" href="#" class="navbar-brand"><span class="fa fa-rocket"></span><span class="logo-text">Welcome</span><span style="display: none" class="logo-text-icon">µ</span></a></div>
                    <div class="topbar-main"><a id="menu-toggle" href="#" class="hidden-xs"><i class="fa fa-bars"></i></a>
                        <ul class="nav navbar navbar-top-links navbar-right mbn">
                            <li><a href="<?php echo base_url(); ?>index.php/C_login/logout">Log Out</a></li>
                        </ul>
                    </div>
                </nav>           
            </div>
            <!--END TOPBAR-->
            <div id="wrapper">
                <!--BEGIN SIDEBAR MENU-->
                <nav id="sidebar" role="navigation" data-position="right" class="navbar-default navbar-static-side" style="min-height: 100%;">
                    <div class="sidebar-collapse menu-scroll">
                        <ul id="side-menu" class="nav">
                            <div class="clearfix"></div>
                            <li><a href="<?php echo base_url(); ?>index.php/C_login/tampilkanGrafikPenjualan"><i class="fa fa-bar-chart-o fa-fw">
                                    </i><span class="menu-title">Grafik Penjualan</span></a></li>
                            <li><a href="<?php echo base_url(); ?>index.php/C_produksi/tampilkanMenentukanHargaPokokProduksi"><i class="fa fa-gift fa-fw">
                                    </i><span class="menu-title">Harga Pokok Produksi</span></a>
                            </li>
                            <?php if($status == "produksi"){?>
                            <li><a href="<?php echo base_url(); ?>index.php/C_produksi/tampilkanKelolaHargaPokokProduksi"><i class="fa fa-th-list fa-fw">
                                    </i><span class="menu-title">Kelola Harga Pokok Produksi</span></a>
                            <?php } ?>
                            </li>
                            <?php if($status == "owner" || $status == "produksi"){?>
                            <li><a href="<?php echo base_url(); ?>index.php/C_persediaanBarang/tampilkanLaporanPersediaanBarang"><i class="fa fa-file-o fa-fw">
                                    </i><span class="menu-title">Laporan Persediaan Barang</span></a>
                            </li>
                            <?php } ?>
                             <?php if($status == "produksi"){?>
                            <li><a href="<?php echo base_url(); ?>index.php/C_persediaanBarang/tampilkanKelolaPersediaanBarang"><i class="fa fa-th-list fa-fw">
                                    </i><span class="menu-title">Kelola Persediaan Barang</span></a>
                            </li>
                            <?php } ?>
                            <?php if($status == "owner" || $status == "marketing"){?>
                            <li class="active"><a href="<?php echo base_url(); ?>index.php/C_TransaksiPenjualan/tampilkanLaporanTransaksiPenjualan"><i class="fa fa-file-o fa-fw">
                                    </i><span class="menu-title">Laporan Transaksi Penjualan</span></a>
                            </li>
                            <?php } ?>
                             <?php if($status == "marketing"){?>
                            <li><a href="<?php echo base_url(); ?>index.php/C_TransaksiPenjualan/tampilkanKelolaTransaksiPenjualan"><i class="fa fa-th-list fa-fw">
                                    </i><span class="menu-title">Kelola Transaksi Penjualan</span></a>
                            </li>
                            <?php } ?>
                            <li><a href="<?php echo base_url(); ?>index.php/C_SPTTahunan/tampilkanLaporanSptTahunan"><i class="fa fa-file-o fa-fw">
                                    </i><span class="menu-title">Laporan SPT Tahunan</span></a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!--END SIDEBAR MENU-->

                <!--BEGIN PAGE WRAPPER-->
                <div id="page-wrapper">
                    <!--BEGIN TITLE & BREADCRUMB PAGE-->
                    <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                        <div class="page-header pull-left">
                            <div class="page-title">
                                Laporan Transaksi Penjualan</div>
                        </div>                        
                        <div class="clearfix">
                        </div>
                    </div>
                    <!--END TITLE & BREADCRUMB PAGE-->
                    <div class="page-content">
                        <div id="tab-general">
                            <div class="row mbl">
                                <div class="col-lg-12">
                                    <div class="col-md-12">
                                        <div id="area-chart-spline" style="width: 100%; height: 300px; display: none;">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="col-lg-12">
                                        <ul id="generalTab" class="nav nav-tabs responsive">
                                            <li><a href="#transaksi-bulan-ini" data-toggle="tab">Laporan Bulan Ini</a></li>
                                            <li><a href="#transaksi-tahun-ini" data-toggle="tab">Laporan Tahun Ini</a></li>
                                            <li><a href="#transaksi-keseluruhan" data-toggle="tab">Laporan Keseluruhan</a></li>
                                        </ul>

                                        <!--LAPORAN BULAN INI-->
                                        <div id="generalTabContent" class="tab-content responsive">
                                            <div id="transaksi-bulan-ini" class="tab-pane fade in active">
                                                <div class="panel">
                                                    <div class="panel-heading">                                
                                                        <button><a href="<?php echo base_url(); ?>index.php/C_TransaksiPenjualan/cetakLaporan/bulan">Cetak Laporan Bulan Ini</a></button>                                                         
                                                    </div>
                                                    <div class="panel-body">
                                                        <table class="table table-hover table-striped">
                                                            <thead>
                                                                <tr>
                                                                    <th>No</th>
                                                                    <th>Nama Pembeli</th>
                                                                    <th>Pembelian</th>
                                                                    <th>Jenis Order</th>
                                                                    <th>Jumlah Pembelian</th>
                                                                    <th>Tanggal Pembelian</th>
                                                                    <th>Total Harga</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                $totalBulanIni = 0;
                                                                $i = 1;
                                                                foreach ($transaksi as $t) {
                                                                    if ($t->bulan == date("m")) {
                                                                        ?>                                                                    
                                                                        <tr>
                                                                            <td><?php echo $i; ?></td>
                                                                            <td><?php echo $t->nama_pembeli; ?></td>
                                                                            <td><?php echo $t->nama_barang; ?></td>
                                                                            <td><?php echo $t->jenis_barang_pembelian; ?></td>
                                                                            <td><?php echo $t->jumlah_pembelian; ?></td>
                                                                            <td><?php echo $t->tanggal_pembelian; ?></td>
                                                                            <td>Rp. <?php echo number_format($t->harga, 2, ',', '.'); ?></td>                                                                        
                                                                        </tr>
                                                                        <?php
                                                                        $totalBulanIni += $t->harga;
                                                                        $i++;
                                                                    }
                                                                }
                                                                ?>
                                                                <tr>
                                                                    <td colspan="6"><b>Total Pemasukan Bulan Ini</b></td>
                                                                    <td><b>Rp. <?php echo number_format($totalBulanIni, 2, ',', '.'); ?></b></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>

                                                        <table class="table table-hover table-striped">
                                                            <thead>
                                                                <tr>
                                                                    <th>No</th>
                                                                    <th>Nama Pembeli</th>
                                                                    <th>Pembelian</th>
                                                                    <th>Jumlah Pembelian</th>
                                                                    <th>Total Harga Pembelian</th>
                                                                    <th>Total Biaya Produksi</th>
                                                                    <th>Keuntungan</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                $totalKeuntunganBulanIni = 0;
                                                                $j = 1;
                                                                foreach ($transaksi as $t) {
                                                                    if ($t->bulan == date("m")) {
                                                                        $totalKeuntungan = $t->harga - $t->harga_barang;
                                                                        ?>                                                                    
                                                                        <tr>
                                                                            <td><?php echo $j; ?></td>
                                                                            <td><?php echo $t->nama_pembeli; ?></td>
                                                                            <td><?php echo $t->nama_barang; ?></td>
                                                                            <td><?php echo $t->jumlah_pembelian; ?></td>
                                                                            <td>Rp. <?php echo number_format($t->harga, 2, ',', '.'); ?></td> 
                                                                            <td>Rp. <?php echo number_format($t->harga_barang, 2, ',', '.'); ?></td> 
                                                                            <td>Rp. <?php echo number_format(($totalKeuntungan), 2, ',', '.'); ?></td> 
                                                                        </tr>
                                                                        <?php
                                                                        $totalKeuntunganBulanIni += $totalKeuntungan;
                                                                        $j++;
                                                                    }
                                                                }
                                                                ?>
                                                                <tr>
                                                                    <td colspan="6"><b>Total Keuntungan Bulan Ini</b></td>
                                                                    <td><b>Rp. <?php echo number_format($totalKeuntunganBulanIni, 2, ',', '.'); ?></b></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>


                                            <!--LAPORAN TAHUN INI-->
                                            <div id="transaksi-tahun-ini" class="tab-pane fade in active">
                                                <div class="panel">
                                                    <div class="panel-heading">                                
                                                        <button><a href="<?php echo base_url(); ?>index.php/C_TransaksiPenjualan/cetakLaporan/tahun">Cetak Laporan Tahun Ini</a></button>                                                         
                                                    </div>
                                                    <div class="panel-body">
                                                        <table class="table table-hover table-striped">
                                                            <thead>
                                                                <tr>
                                                                    <th>No</th>
                                                                    <th>Nama Pembeli</th>
                                                                    <th>Pembelian</th>
                                                                    <th>Jenis Order</th>
                                                                    <th>Jumlah Pembelian</th>
                                                                    <th>Tanggal Pembelian</th>
                                                                    <th>Total Harga</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                $totalTahunIni = 0;
                                                                $k = 1;
                                                                foreach ($transaksi as $t) {
                                                                    if ($t->tahun == date("Y")) {
                                                                        ?>                                                                    
                                                                        <tr>
                                                                            <td><?php echo $k; ?></td>
                                                                            <td><?php echo $t->nama_pembeli; ?></td>
                                                                            <td><?php echo $t->nama_barang; ?></td>
                                                                            <td><?php echo $t->jenis_barang_pembelian; ?></td>
                                                                            <td><?php echo $t->jumlah_pembelian; ?></td>
                                                                            <td><?php echo $t->tanggal_pembelian; ?></td>
                                                                            <td>Rp. <?php echo number_format($t->harga, 2, ',', '.'); ?></td>                                                                        
                                                                        </tr>
                                                                        <?php
                                                                        $totalTahunIni += $t->harga;
                                                                        $k++;
                                                                    }
                                                                }
                                                                ?>
                                                                <tr>
                                                                    <td colspan="6"><b>Total Pemasukan Tahun Ini</b></td>
                                                                    <td><b>Rp. <?php echo number_format($totalTahunIni, 2, ',', '.'); ?></b></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>


                                                        <table class="table table-hover table-striped">
                                                            <thead>
                                                                <tr>
                                                                    <th>No</th>
                                                                    <th>Nama Pembeli</th>
                                                                    <th>Pembelian</th>
                                                                    <th>Jumlah Pembelian</th>
                                                                    <th>Total Harga Pembelian</th>
                                                                    <th>Total Biaya Produksi</th>
                                                                    <th>Keuntungan</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                $totalKeuntunganTahunIni = 0;
                                                                $l = 1;
                                                                foreach ($transaksi as $t) {
                                                                    if ($t->tahun == date("Y")) {
                                                                        $totalKeuntungan = $t->harga - $t->harga_barang;
                                                                        ?>                                                                    
                                                                        <tr>
                                                                            <td><?php echo $l; ?></td>
                                                                            <td><?php echo $t->nama_pembeli; ?></td>
                                                                            <td><?php echo $t->nama_barang; ?></td>
                                                                            <td><?php echo $t->jumlah_pembelian; ?></td>
                                                                            <td>Rp. <?php echo number_format($t->harga, 2, ',', '.'); ?></td> 
                                                                            <td>Rp. <?php echo number_format($t->harga_barang, 2, ',', '.'); ?></td> 
                                                                            <td>Rp. <?php echo number_format(($totalKeuntungan), 2, ',', '.'); ?></td> 
                                                                        </tr>
                                                                        <?php
                                                                        $totalKeuntunganTahunIni += $totalKeuntungan;
                                                                        $l++;
                                                                    }
                                                                }
                                                                ?>
                                                                <tr>
                                                                    <td colspan="6"><b>Total Keuntungan Tahun Ini</b></td>
                                                                    <td><b>Rp. <?php echo number_format($totalKeuntunganTahunIni, 2, ',', '.'); ?></b></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>

                                            <!--LAPORAN KESELURUHAN-->
                                            <div id="transaksi-keseluruhan" class="tab-pane fade in active">
                                                <div class="panel">
                                                    <div class="panel-heading">                                
                                                        <button><a href="<?php echo base_url(); ?>index.php/C_TransaksiPenjualan/cetakLaporan/seluruh">Cetak Laporan Keseluruhan</a></button>                                                         
                                                    </div>
                                                    <div class="panel-body">
                                                        <table class="table table-hover table-striped">
                                                            <thead>
                                                                <tr>
                                                                    <th>No</th>
                                                                    <th>Nama Pembeli</th>
                                                                    <th>Pembelian</th>
                                                                    <th>Jenis Order</th>
                                                                    <th>Jumlah Pembelian</th>
                                                                    <th>Tanggal Pembelian</th>
                                                                    <th>Total Harga</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                $total = 0;
                                                                $m = 1;
                                                                foreach ($transaksi as $t) {
                                                                    ?>                                                                    
                                                                    <tr>
                                                                        <td><?php echo $m; ?></td>
                                                                        <td><?php echo $t->nama_pembeli; ?></td>
                                                                        <td><?php echo $t->nama_barang; ?></td>
                                                                        <td><?php echo $t->jenis_barang_pembelian; ?></td>
                                                                        <td><?php echo $t->jumlah_pembelian; ?></td>
                                                                        <td><?php echo $t->tanggal_pembelian; ?></td>
                                                                        <td>Rp. <?php echo number_format($t->harga, 2, ',', '.'); ?></td>                                                                        
                                                                    </tr>
                                                                    <?php
                                                                    $total += $t->harga;
                                                                    $m++;
                                                                }
                                                                ?>
                                                                <tr>
                                                                    <td colspan="6"><b>Total Pemasukan Keseluruhan</b></td>
                                                                    <td><b>Rp. <?php echo number_format($total, 2, ',', '.'); ?></b></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>


                                                        <table class="table table-hover table-striped">
                                                            <thead>
                                                                <tr>
                                                                    <th>No</th>
                                                                    <th>Nama Pembeli</th>
                                                                    <th>Pembelian</th>
                                                                    <th>Jumlah Pembelian</th>
                                                                    <th>Total Harga Pembelian</th>
                                                                    <th>Total Biaya Produksi</th>
                                                                    <th>Keuntungan</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                $totalKeuntunganKeseluruhan = 0;
                                                                $n = 1;
                                                                foreach ($transaksi as $t) {
                                                                    $totalKeuntungan = $t->harga - $t->harga_barang;
                                                                    ?>                                                                    
                                                                    <tr>
                                                                        <td><?php echo $n; ?></td>
                                                                        <td><?php echo $t->nama_pembeli; ?></td>
                                                                        <td><?php echo $t->nama_barang; ?></td>
                                                                        <td><?php echo $t->jumlah_pembelian; ?></td>
                                                                        <td>Rp. <?php echo number_format($t->harga, 2, ',', '.'); ?></td> 
                                                                        <td>Rp. <?php echo number_format($t->harga_barang, 2, ',', '.'); ?></td> 
                                                                        <td>Rp. <?php echo number_format(($totalKeuntungan), 2, ',', '.'); ?></td> 
                                                                    </tr>
                                                                    <?php
                                                                    $totalKeuntunganKeseluruhan += $totalKeuntungan;
                                                                    $n++;
                                                                }
                                                                ?>
                                                                <tr>
                                                                    <td colspan="6"><b>Total Keuntungan Keseluruhan</b></td>
                                                                    <td><b>Rp. <?php echo number_format($totalKeuntunganKeseluruhan, 2, ',', '.'); ?></b></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--BEGIN FOOTER-->
                        <div id="footer">
                            <div class="copyright">
                                2017 © Adytria Fadli Pamungkas support template KAdmin</div>
                        </div>
                        <!--END FOOTER-->
                    </div>
                    <!--END PAGE WRAPPER-->
                </div>
            </div>

            <script src="<?php echo base_url(); ?>asset/script/jquery-1.10.2.min.js"></script>
            <script src="<?php echo base_url(); ?>asset/script/jquery-migrate-1.2.1.min.js"></script>
            <script src="<?php echo base_url(); ?>asset/script/jquery-ui.js"></script>
            <script src="<?php echo base_url(); ?>asset/script/bootstrap.min.js"></script>
            <script src="<?php echo base_url(); ?>asset/script/bootstrap-hover-dropdown.js"></script>
            <script src="<?php echo base_url(); ?>asset/script/html5shiv.js"></script>
            <script src="<?php echo base_url(); ?>asset/script/respond.min.js"></script>
            <script src="<?php echo base_url(); ?>asset/script/jquery.metisMenu.js"></script>
            <script src="<?php echo base_url(); ?>asset/script/jquery.slimscroll.js"></script>
            <script src="<?php echo base_url(); ?>asset/script/jquery.cookie.js"></script>
            <script src="<?php echo base_url(); ?>asset/script/icheck.min.js"></script>
            <script src="<?php echo base_url(); ?>asset/script/custom.min.js"></script>
            <script src="<?php echo base_url(); ?>asset/script/jquery.news-ticker.js"></script>
            <script src="<?php echo base_url(); ?>asset/script/jquery.menu.js"></script>
            <script src="<?php echo base_url(); ?>asset/script/pace.min.js"></script>
            <script src="<?php echo base_url(); ?>asset/script/holder.js"></script>
            <script src="<?php echo base_url(); ?>asset/script/responsive-tabs.js"></script>
            <script src="<?php echo base_url(); ?>asset/script/jquery.flot.js"></script>
            <script src="<?php echo base_url(); ?>asset/script/jquery.flot.categories.js"></script>
            <script src="<?php echo base_url(); ?>asset/script/jquery.flot.pie.js"></script>
            <script src="<?php echo base_url(); ?>asset/script/jquery.flot.tooltip.js"></script>
            <script src="<?php echo base_url(); ?>asset/script/jquery.flot.resize.js"></script>
            <script src="<?php echo base_url(); ?>asset/script/jquery.flot.fillbetween.js"></script>
            <script src="<?php echo base_url(); ?>asset/script/jquery.flot.stack.js"></script>
            <script src="<?php echo base_url(); ?>asset/script/jquery.flot.spline.js"></script>
            <script src="<?php echo base_url(); ?>asset/script/zabuto_calendar.min.js"></script>
            <script src="<?php echo base_url(); ?>asset/script/index.js"></script>
            <script src="<?php echo base_url(); ?>asset/script/highcharts.js"></script>
            <script src="<?php echo base_url(); ?>asset/script/data.js"></script>
            <script src="<?php echo base_url(); ?>asset/script/drilldown.js"></script>
            <script src="<?php echo base_url(); ?>asset/script/exporting.js"></script>
            <script src="<?php echo base_url(); ?>asset/script/highcharts-more.js"></script>
            <script src="<?php echo base_url(); ?>asset/script/charts-highchart-pie.js"></script>
            <script src="<?php echo base_url(); ?>asset/script/charts-highchart-more.js"></script>
            <script src="<?php echo base_url(); ?>asset/script/modernizr.min.js"></script>
            <script src="<?php echo base_url(); ?>asset/script/jplist.min.js"></script>
            <script src="<?php echo base_url(); ?>asset/script/jplist.js"></script>
            <!--CORE JAVASCRIPT-->
            <script>
                function konfirmasi(delUrl) {

                    if (confirm("Apakah anda yakin menghapus data ini ?")) {
                        document.location = delUrl;
                    }
                }
            </script>
            <script src="<?php echo base_url(); ?>asset/script/main.js"></script>
            <script>        (function (i, s, o, g, r, a, m) {
                    i['GoogleAnalyticsObject'] = r;
                    i[r] = i[r] || function () {
                        (i[r].q = i[r].q || []).push(arguments)
                    }, i[r].l = 1 * new Date();
                    a = s.createElement(o),
                            m = s.getElementsByTagName(o)[0];
                    a.async = 1;
                    a.src = g;
                    m.parentNode.insertBefore(a, m)
                })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
                ga('create', 'UA-145464-12', 'auto');
                ga('send', 'pageview');


            </script>
    </body>
</html>
