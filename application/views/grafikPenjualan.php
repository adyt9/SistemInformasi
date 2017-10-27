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
        <link rel="apple-touch-icon" href="images/icons/favicon.png">
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
    </head>
    <body>
        <?php echo $this->session->userdata('username'); ?>
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
                <nav id="sidebar" role="navigation" data-position="right" class="navbar-default navbar-static-side">
                    <div class="sidebar-collapse menu-scroll">
                        <ul id="side-menu" class="nav">
                            <div class="clearfix"></div>
                            <li class="active"><a href="<?php echo base_url(); ?>index.php/C_login/tampilkanGrafikPenjualan"><i class="fa fa-bar-chart-o fa-fw">
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
                            <li><a href="<?php echo base_url(); ?>index.php/C_TransaksiPenjualan/tampilkanLaporanTransaksiPenjualan"><i class="fa fa-file-o fa-fw">
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
                                Grafik Penjualan</div>
                        </div>                        
                        <div class="clearfix">
                        </div>
                    </div>
                    <!--END TITLE & BREADCRUMB PAGE-->

                    <!--BEGIN CONTENT-->
                    <div class="page-content">
                        <div id="tab-general">
                            <div id="sum_box" class="row mbl">

                                <div class="col-sm-6 col-md-4">
                                    <div class="panel profit db mbm">
                                        <?php
                                        $totalKeuntunganBulanIni = 0;
                                        foreach ($transaksi as $t) {
                                            if ($t->bulan == date("m")) {
                                                $totalKeuntungan = $t->harga - $t->harga_barang;
                                                $totalKeuntunganBulanIni += $totalKeuntungan;
                                            }
                                        }
                                        ?>
                                        <div class="panel-body">
                                            <p class="icon">
                                                <i class="icon fa fa-money"></i>
                                            </p>
                                            <h4 class="value">
                                                <span data-counter="" data-start="10" data-end="50" data-step="1" data-duration="0">
                                                </span><span>Rp. <?php echo number_format(($totalKeuntunganBulanIni), 2, ',', '.'); ?></span></h4>
                                            <p class="description">
                                                Keuntungan Bulan Ini</p>
                                            <div class="progress progress-sm mbn">
                                                <div role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                                                     style="width: 100%;" class="progress-bar progress-bar-success"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <?php
                                    $totalKeuntunganTahunIni = 0;
                                    foreach ($transaksi as $t) {
                                        if ($t->tahun == date("Y")) {
                                            $totalKeuntungan = $t->harga - $t->harga_barang;
                                            $totalKeuntunganTahunIni += $totalKeuntungan;
                                        }
                                    }
                                    ?>
                                    <div class="panel task db mbm">
                                        <div class="panel-body">
                                            <p class="icon">
                                                <i class="icon fa fa-money"></i>
                                            </p>
                                            <h4 class="value">
                                                <span>Rp.  <?php echo number_format(($totalKeuntunganTahunIni), 2, ',', '.'); ?></span></h4>
                                            <p class="description">
                                                Keuntungan Tahun Ini</p>
                                            <div class="progress progress-sm mbn">
                                                <div role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"
                                                     style="width: 100%;" class="progress-bar progress-bar-danger"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <?php
                                    $totalPengeluaranTahunIni = 0;
                                    foreach ($transaksi as $t) {
                                        if ($t->tahun == date("Y")) {
                                            $totalPengeluaranTahunIni += $t->harga_barang;
                                        }
                                    }
                                    ?>
                                    <div class="panel visit db mbm">
                                        <div class="panel-body">
                                            <p class="icon">
                                                <i class="icon fa fa-shopping-cart"></i>
                                            </p>
                                            <h4 class="value">
                                                <span>Rp. <?php echo number_format(($totalPengeluaranTahunIni), 2, ',', '.'); ?></span></h4>
                                            <p class="description">
                                                Total Pengeluaran Tahun Ini</p>
                                            <div class="progress progress-sm mbn">
                                                <div role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"
                                                     style="width: 100%;" class="progress-bar progress-bar-warning"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mbl">
                                <div class="col-lg-12">
                                    <div class="panel">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div id="penjualan" style="width: 100%; height: 350px">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel">                                        
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <h4 class="mbs">
                                                        Penjualan Pada Bulan <?php echo date("m-Y"); ?></h4>
                                                    <p class="help-block">
                                                        Data penjualan selama satu bulan penuh</p>
                                                    <div id="penjualan-bulan-ini" style="width: 100%; height: 350px">
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div id="penjualan-bulan-ini-pie" style="width: 100%; height: 350px">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <h4 class="mbs">
                                                        Penjualan Pada Tahun <?php echo date("Y"); ?></h4>
                                                    <p class="help-block">
                                                        Data penjualan selama satu tahun penuh</p>
                                                    <div id="penjualan-tahun-ini" style="width: 100%; height: 350px">
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div id="penjualan-tahun-ini-pie" style="width: 100%; height: 350px">
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <h4 class="mbs">
                                                        Penjualan Keseluruhan</h4>
                                                    <p class="help-block">
                                                        Data penjualan</p>
                                                    <div id="penjualan-keseluruhan" style="width: 100%; height: 350px">
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div id="penjualan-keseluruhan-pie" style="width: 100%; height: 350px">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                
                            </div>

                        </div>
                    </div>
                    <!--END CONTENT-->
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
        <!--LOADING SCRIPTS FOR CHARTS-->
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/highcharts-3d.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <!--CORE JAVASCRIPT-->
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
        <?php
        $januariSweater = 0;
        $februariSweater = 0;
        $maretSweater = 0;
        $aprilSweater = 0;
        $meiSweater = 0;
        $juniSweater = 0;
        $juliSweater = 0;
        $agustusSweater = 0;
        $septemberSweater = 0;
        $oktoberSweater = 0;
        $novemberSweater = 0;
        $desemberSweater = 0;
        foreach ($transaksi as $t) {
            if ($t->tahun == date("Y")) {
                if ($t->jenis_barang_pembelian == "Sweater") {
                    if ($t->bulan == 1) {
                        $januariSweater += $t->jumlah_pembelian;
                    } elseif ($t->bulan == 2) {
                        $februariSweater += $t->jumlah_pembelian;
                    } elseif ($t->bulan == 3) {
                        $maretSweater += $t->jumlah_pembelian;
                    } elseif ($t->bulan == 4) {
                        $aprilSweater += $t->jumlah_pembelian;
                    } elseif ($t->bulan == 5) {
                        $meiSweater += $t->jumlah_pembelian;
                    } elseif ($t->bulan == 6) {
                        $juniSweater += $t->jumlah_pembelian;
                    } elseif ($t->bulan == 7) {
                        $juliSweater += $t->jumlah_pembelian;
                    } elseif ($t->bulan == 8) {
                        $agustusSweater += $t->jumlah_pembelian;
                    } elseif ($t->bulan == 9) {
                        $septemberSweater += $t->jumlah_pembelian;
                    } elseif ($t->bulan == 10) {
                        $oktoberSweater += $t->jumlah_pembelian;
                    } elseif ($t->bulan == 11) {
                        $novemberSweater += $t->jumlah_pembelian;
                    } elseif ($t->bulan == 12) {
                        $desemberSweater += $t->jumlah_pembelian;
                    }
                }
            }
        }
        $januariPolo = 0;
        $februariPolo = 0;
        $maretPolo = 0;
        $aprilPolo = 0;
        $meiPolo = 0;
        $juniPolo = 0;
        $juliPolo = 0;
        $agustusPolo = 0;
        $septemberPolo = 0;
        $oktoberPolo = 0;
        $novemberPolo = 0;
        $desemberPolo = 0;
        foreach ($transaksi as $t) {
            if ($t->tahun == date("Y")) {
                if ($t->jenis_barang_pembelian == "Polo") {
                    if ($t->bulan == 1) {
                        $januariPolo += $t->jumlah_pembelian;
                    } elseif ($t->bulan == 2) {
                        $februariPolo += $t->jumlah_pembelian;
                    } elseif ($t->bulan == 3) {
                        $maretPolo += $t->jumlah_pembelian;
                    } elseif ($t->bulan == 4) {
                        $aprilPolo += $t->jumlah_pembelian;
                    } elseif ($t->bulan == 5) {
                        $meiPolo += $t->jumlah_pembelian;
                    } elseif ($t->bulan == 6) {
                        $juniPolo += $t->jumlah_pembelian;
                    } elseif ($t->bulan == 7) {
                        $juliPolo += $t->jumlah_pembelian;
                    } elseif ($t->bulan == 8) {
                        $agustusPolo += $t->jumlah_pembelian;
                    } elseif ($t->bulan == 9) {
                        $septemberPolo += $t->jumlah_pembelian;
                    } elseif ($t->bulan == 10) {
                        $oktoberPolo += $t->jumlah_pembelian;
                    } elseif ($t->bulan == 11) {
                        $novemberPolo += $t->jumlah_pembelian;
                    } elseif ($t->bulan == 12) {
                        $desemberPolo += $t->jumlah_pembelian;
                    }
                }
            }
        }
        $januariKaos = 0;
        $februariKaos = 0;
        $maretKaos = 0;
        $aprilKaos = 0;
        $meiKaos = 0;
        $juniKaos = 0;
        $juliKaos = 0;
        $agustusKaos = 0;
        $septemberKaos = 0;
        $oktoberKaos = 0;
        $novemberKaos = 0;
        $desemberKaos = 0;
        foreach ($transaksi as $t) {
            if ($t->tahun == date("Y")) {
                if ($t->jenis_barang_pembelian == "Kaos") {
                    if ($t->bulan == 1) {
                        $januariKaos += $t->jumlah_pembelian;
                    } elseif ($t->bulan == 2) {
                        $februariKaos += $t->jumlah_pembelian;
                    } elseif ($t->bulan == 3) {
                        $maretKaos += $t->jumlah_pembelian;
                    } elseif ($t->bulan == 4) {
                        $aprilKaos += $t->jumlah_pembelian;
                    } elseif ($t->bulan == 5) {
                        $meiKaos += $t->jumlah_pembelian;
                    } elseif ($t->bulan == 6) {
                        $juniKaos += $t->jumlah_pembelian;
                    } elseif ($t->bulan == 7) {
                        $juliKaos += $t->jumlah_pembelian;
                    } elseif ($t->bulan == 8) {
                        $agustusKaos += $t->jumlah_pembelian;
                    } elseif ($t->bulan == 9) {
                        $septemberKaos += $t->jumlah_pembelian;
                    } elseif ($t->bulan == 10) {
                        $oktoberKaos += $t->jumlah_pembelian;
                    } elseif ($t->bulan == 11) {
                        $novemberKaos += $t->jumlah_pembelian;
                    } elseif ($t->bulan == 12) {
                        $desemberKaos += $t->jumlah_pembelian;
                    }
                }
            }
        }
        $januariKemeja = 0;
        $februariKemeja = 0;
        $maretKemeja = 0;
        $aprilKemeja = 0;
        $meiKemeja = 0;
        $juniKemeja = 0;
        $juliKemeja = 0;
        $agustusKemeja = 0;
        $septemberKemeja = 0;
        $oktoberKemeja = 0;
        $novemberKemeja = 0;
        $desemberKemeja = 0;
        foreach ($transaksi as $t) {
            if ($t->tahun == date("Y")) {
                if ($t->jenis_barang_pembelian == "Kemeja") {
                    if ($t->bulan == 1) {
                        $januariKemeja += $t->jumlah_pembelian;
                    } elseif ($t->bulan == 2) {
                        $februariKemeja += $t->jumlah_pembelian;
                    } elseif ($t->bulan == 3) {
                        $maretKemeja += $t->jumlah_pembelian;
                    } elseif ($t->bulan == 4) {
                        $aprilKemeja += $t->jumlah_pembelian;
                    } elseif ($t->bulan == 5) {
                        $meiKemeja += $t->jumlah_pembelian;
                    } elseif ($t->bulan == 6) {
                        $juniKemeja += $t->jumlah_pembelian;
                    } elseif ($t->bulan == 7) {
                        $juliKemeja += $t->jumlah_pembelian;
                    } elseif ($t->bulan == 8) {
                        $agustusKemeja += $t->jumlah_pembelian;
                    } elseif ($t->bulan == 9) {
                        $septemberKemeja += $t->jumlah_pembelian;
                    } elseif ($t->bulan == 10) {
                        $oktoberKemeja += $t->jumlah_pembelian;
                    } elseif ($t->bulan == 11) {
                        $novemberKemeja += $t->jumlah_pembelian;
                    } elseif ($t->bulan == 12) {
                        $desemberKemeja += $t->jumlah_pembelian;
                    }
                }
            }
        }
        $januariJaket = 0;
        $februariJaket = 0;
        $maretJaket = 0;
        $aprilJaket = 0;
        $meiJaket = 0;
        $juniJaket = 0;
        $juliJaket = 0;
        $agustusJaket = 0;
        $septemberJaket = 0;
        $oktoberJaket = 0;
        $novemberJaket = 0;
        $desemberJaket = 0;
        foreach ($transaksi as $t) {
            if ($t->tahun == date("Y")) {
                if ($t->jenis_barang_pembelian == "Jaket") {
                    if ($t->bulan == 1) {
                        $januariJaket += $t->jumlah_pembelian;
                    } elseif ($t->bulan == 2) {
                        $februariJaket += $t->jumlah_pembelian;
                    } elseif ($t->bulan == 3) {
                        $maretJaket += $t->jumlah_pembelian;
                    } elseif ($t->bulan == 4) {
                        $aprilJaket += $t->jumlah_pembelian;
                    } elseif ($t->bulan == 5) {
                        $meiJaket += $t->jumlah_pembelian;
                    } elseif ($t->bulan == 6) {
                        $juniJaket += $t->jumlah_pembelian;
                    } elseif ($t->bulan == 7) {
                        $juliJaket += $t->jumlah_pembelian;
                    } elseif ($t->bulan == 8) {
                        $agustusJaket += $t->jumlah_pembelian;
                    } elseif ($t->bulan == 9) {
                        $septemberJaket += $t->jumlah_pembelian;
                    } elseif ($t->bulan == 10) {
                        $oktoberJaket += $t->jumlah_pembelian;
                    } elseif ($t->bulan == 11) {
                        $novemberJaket += $t->jumlah_pembelian;
                    } elseif ($t->bulan == 12) {
                        $desemberJaket += $t->jumlah_pembelian;
                    }
                }
            }
        }
        ?>
        <script type="text/javascript">
            Highcharts.chart('penjualan', {
                chart: {
                    type: 'areaspline'
                },
                title: {
                    text: 'Penjualan Tahun <?= date("Y"); ?>'
                },
                legend: {
                    layout: 'vertical',
                    align: 'left',
                    verticalAlign: 'top',
                    x: 150,
                    y: 100,
                    floating: true,
                    borderWidth: 1,
                    backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'
                },
                xAxis: {
                    categories: [
                        'Januari',
                        'Februari',
                        'Maret',
                        'April',
                        'Mei',
                        'Juni',
                        'Juli',
                        'Agustus',
                        'September',
                        'Oktober',
                        'November',
                        'Desember'
                    ],
                    plotBands: [{// visualize the weekend
                            from: 4.5,
                            to: 6.5,
                            color: 'rgba(68, 170, 213, .2)'
                        }]
                },
                yAxis: {
                    title: {
                        text: 'Jumlah Pembelian'
                    }
                },
                tooltip: {
                    shared: true,
                    valueSuffix: ' buah'
                },
                credits: {
                    enabled: false
                },
                plotOptions: {
                    areaspline: {
                        fillOpacity: 0.5
                    }
                },
                series: [{
                        name: 'Sweater',
                        data: [<?= $januariSweater; ?>,<?= $februariSweater; ?>, <?= $maretSweater; ?>, <?= $aprilSweater; ?>, <?= $meiSweater; ?>, <?= $juniSweater; ?>, <?= $juliSweater; ?>, <?= $agustusSweater; ?>, <?= $septemberSweater; ?>, <?= $oktoberSweater; ?>, <?= $novemberSweater; ?>, <?= $desemberSweater; ?>]
                    }, {
                        name: 'Polo',
                        data: [<?= $januariPolo; ?>,<?= $februariPolo; ?>, <?= $maretPolo; ?>, <?= $aprilPolo; ?>, <?= $meiPolo; ?>, <?= $juniPolo; ?>, <?= $juliPolo; ?>, <?= $agustusPolo; ?>, <?= $septemberPolo; ?>, <?= $oktoberPolo; ?>, <?= $novemberPolo; ?>, <?= $desemberPolo; ?>]
                    }, {
                        name: 'Kaos',
                        data: [<?= $januariKaos; ?>,<?= $februariKaos; ?>, <?= $maretKaos; ?>, <?= $aprilKaos; ?>, <?= $meiKaos; ?>, <?= $juniKaos; ?>, <?= $juliKaos; ?>, <?= $agustusKaos; ?>, <?= $septemberKaos; ?>, <?= $oktoberKaos; ?>, <?= $novemberKaos; ?>, <?= $desemberKaos; ?>]
                    }, {
                        name: 'Kemeja',
                        data: [<?= $januariKemeja; ?>,<?= $februariKemeja; ?>, <?= $maretKemeja; ?>, <?= $aprilKemeja; ?>, <?= $meiKemeja; ?>, <?= $juniKemeja; ?>, <?= $juliKemeja; ?>, <?= $agustusKemeja; ?>, <?= $septemberKemeja; ?>, <?= $oktoberKemeja; ?>, <?= $novemberKemeja; ?>, <?= $desemberKemeja; ?>]
                    }, {
                        name: 'Jaket',
                        data: [<?= $januariJaket; ?>,<?= $februariJaket; ?>, <?= $maretJaket; ?>, <?= $aprilJaket; ?>, <?= $meiJaket; ?>, <?= $juniJaket; ?>, <?= $juliJaket; ?>, <?= $agustusJaket; ?>, <?= $septemberJaket; ?>, <?= $oktoberJaket; ?>, <?= $novemberJaket; ?>, <?= $desemberJaket; ?>]
                    }]
            });
        </script>


        <?php
        $sweaterBulan = 0;
        $kaosBulan = 0;
        $kemejaBulan = 0;
        $jaketBulan = 0;
        $poloBulan = 0;

        $sweaterTahun = 0;
        $kaosTahun = 0;
        $kemejaTahun = 0;
        $jaketTahun = 0;
        $poloTahun = 0;

        $sweaterSeluruh = 0;
        $kaosSeluruh = 0;
        $kemejaSeluruh = 0;
        $jaketSeluruh = 0;
        $poloSeluruh = 0;
        foreach ($transaksi as $t) {
            if ($t->bulan == date("m")) {
                if ($t->jenis_barang_pembelian == 'Sweater') {
                    $sweaterBulan += intval($t->jumlah_pembelian);
                } elseif ($t->jenis_barang_pembelian == 'Kaos') {
                    $kaosBulan += intval($t->jumlah_pembelian);
                } elseif ($t->jenis_barang_pembelian == 'Kemeja') {
                    $kemejaBulan += intval($t->jumlah_pembelian);
                } elseif ($t->jenis_barang_pembelian == 'Jaket') {
                    $jaketBulan += intval($t->jumlah_pembelian);
                } elseif ($t->jenis_barang_pembelian == 'Polo') {
                    $poloBulan += intval($t->jumlah_pembelian);
                }
            }
            if ($t->tahun == date("Y")) {
                if ($t->jenis_barang_pembelian == 'Sweater') {
                    $sweaterTahun += intval($t->jumlah_pembelian);
                } elseif ($t->jenis_barang_pembelian == 'Kaos') {
                    $kaosTahun += intval($t->jumlah_pembelian);
                } elseif ($t->jenis_barang_pembelian == 'Kemeja') {
                    $kemejaTahun += intval($t->jumlah_pembelian);
                } elseif ($t->jenis_barang_pembelian == 'Jaket') {
                    $jaketTahun += intval($t->jumlah_pembelian);
                } elseif ($t->jenis_barang_pembelian == 'Polo') {
                    $poloTahun += intval($t->jumlah_pembelian);
                }
            }

            if ($t->jenis_barang_pembelian == 'Sweater') {
                $sweaterSeluruh += intval($t->jumlah_pembelian);
            } elseif ($t->jenis_barang_pembelian == 'Kaos') {
                $kaosSeluruh += intval($t->jumlah_pembelian);
            } elseif ($t->jenis_barang_pembelian == 'Kemeja') {
                $kemejaSeluruh += intval($t->jumlah_pembelian);
            } elseif ($t->jenis_barang_pembelian == 'Jaket') {
                $jaketSeluruh += intval($t->jumlah_pembelian);
            } elseif ($t->jenis_barang_pembelian == 'Polo') {
                $poloSeluruh += intval($t->jumlah_pembelian);
            }
        }
        ?>
        <script type="text/javascript">
            var chart = Highcharts.chart('penjualan-bulan-ini', {
                title: {
                    text: ''
                },
                subtitle: {
                    text: ''
                },
                xAxis: {
                    categories: ['Sweater', 'Polo', 'Kaos', 'Kemeja', 'Jaket']
                },
                series: [{
                        type: 'column',
                        colorByPoint: true,
                        data: [<?= $sweaterBulan; ?>, <?= $poloBulan; ?>, <?= $kaosBulan; ?>, <?= $kemejaBulan; ?>, <?= $jaketBulan; ?>],
                        showInLegend: false
                    }]
                        
            });
        </script>
        <script type="text/javascript">
            Highcharts.chart('penjualan-bulan-ini-pie', {
                chart: {
                    type: 'pie',
                    options3d: {
                        enabled: true,
                        alpha: 45
                    }
                },
                title: {
                    text: ''
                },
                subtitle: {
                    text: ''
                },
                plotOptions: {
                    pie: {
                        innerSize: 100,
                        depth: 45
                    }
                },
                series: [{
                        name: 'Jumlah',
                        data: [
                            ['Sweater', <?= $sweaterBulan; ?>],
                            ['Polo', <?= $poloBulan; ?>],
                            ['Kaos', <?= $kaosBulan; ?>],
                            ['Kemeja', <?= $kemejaBulan; ?>],
                            ['Jaket', <?= $jaketBulan; ?>]
                        ]
                    }]
            });
        </script>





        <script type="text/javascript">
            var chart = Highcharts.chart('penjualan-tahun-ini', {
                title: {
                    text: ''
                },
                subtitle: {
                    text: ''
                },
                xAxis: {
                    categories: ['Sweater', 'Polo', 'Kaos', 'Kemeja', 'Jaket']
                },
                series: [{
                        type: 'column',
                        colorByPoint: true,
                        data: [<?= $sweaterTahun; ?>, <?= $poloTahun; ?>, <?= $kaosTahun; ?>, <?= $kemejaTahun; ?>, <?= $jaketTahun; ?>],
                        showInLegend: false
                    }]
                        
            });
        </script>
        <script type="text/javascript">
            Highcharts.chart('penjualan-tahun-ini-pie', {
                chart: {
                    type: 'pie',
                    options3d: {
                        enabled: true,
                        alpha: 45
                    }
                },
                title: {
                    text: ''
                },
                subtitle: {
                    text: ''
                },
                plotOptions: {
                    pie: {
                        innerSize: 100,
                        depth: 45
                    }
                },
                series: [{
                        name: 'Jumlah',
                        data: [
                            ['Sweater', <?= $sweaterTahun; ?>],
                            ['Polo', <?= $poloTahun; ?>],
                            ['Kaos', <?= $kaosTahun; ?>],
                            ['Kemeja', <?= $kemejaTahun; ?>],
                            ['Jaket', <?= $jaketTahun; ?>]
                        ]
                    }]
            });
        </script>








        <script type="text/javascript">
            var chart = Highcharts.chart('penjualan-keseluruhan', {
                title: {
                    text: ''
                },
                subtitle: {
                    text: ''
                },
                xAxis: {
                    categories: ['Sweater', 'Polo', 'Kaos', 'Kemeja', 'Jaket']
                },
                series: [{
                        type: 'column',
                        colorByPoint: true,
                        data: [<?= $sweaterSeluruh; ?>, <?= $poloSeluruh; ?>, <?= $kaosSeluruh; ?>, <?= $kemejaSeluruh; ?>, <?= $jaketSeluruh; ?>],
                        showInLegend: false
                    }]
                        
            });
        </script>
        <script type="text/javascript">
            Highcharts.chart('penjualan-keseluruhan-pie', {
                chart: {
                    type: 'pie',
                    options3d: {
                        enabled: true,
                        alpha: 45
                    }
                },
                title: {
                    text: ''
                },
                subtitle: {
                    text: ''
                },
                plotOptions: {
                    pie: {
                        innerSize: 100,
                        depth: 45
                    }
                },
                series: [{
                        name: 'Jumlah',
                        data: [
                            ['Sweater', <?= $sweaterSeluruh; ?>],
                            ['Polo', <?= $poloSeluruh; ?>],
                            ['Kaos', <?= $kaosSeluruh; ?>],
                            ['Kemeja', <?= $kemejaSeluruh; ?>],
                            ['Jaket', <?= $jaketSeluruh; ?>]
                        ]
                    }]
            });
        </script>




    </body>
</html>
