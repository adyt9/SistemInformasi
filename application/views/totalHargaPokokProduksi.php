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
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>asset/styles/nestable.css">

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
                    <div class="topbar-main"><a id="menu-toggle" href="#" class="hidden-sm"><i class="fa fa-bars"></i></a>
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
                            <li class="active"><a href="<?php echo base_url(); ?>index.php/C_produksi/tampilkanMenentukanHargaPokokProduksi"><i class="fa fa-gift fa-fw">
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
                                Harga Pokok Produksi</div>
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
                                    <div id="tab-edit" class="tab-pane fade in active">
                                        <form action="<?php echo base_url() ?>index.php/C_produksi/menghitungHargaPokokProduksi" class="form-horizontal" method="post">                                    <hr>
                                            <!--<div class="page-content">-->
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="panel">
                                                        <div class="panel-body">
                                                            <table class="table table-hover table-condensed">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Nama Bahan Baku</th>
                                                                        <th>Jumlah Bahan Baku</th>
                                                                        <th>Harga Bahan Baku</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
                                                                    for ($index = 1; $index <= $BBB; $index++) {
                                                                        if ($this->input->post("jumlahBBB" . $index) != NULL || $this->input->post("jumlahBBB" . $index) != 0) {
                                                                            ?>
                                                                            <tr>

                                                                                <td><?php echo $nama_bahan_bakuBBB[$index]; ?></td>
                                                                                <td><?php echo $jumlahBBB[$index]; ?></td>
                                                                                <td>Rp. <?php echo number_format($hargaBBB[$index], 2, ',', '.'); ?></td>

                                                                            </tr>
                                                                            <?php
                                                                        }
                                                                    }
                                                                    ?>
                                                                    <tr style="background-color: #dcedc8">
                                                                        <td colspan="2">Total Biaya Bahan Baku</td>
                                                                        <td>Rp. <?php echo number_format($totalBBB, 2, ',', '.'); ?></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table> 

                                                            <table class="table table-hover table-condensed">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Nama Tenaga Kerja</th>
                                                                        <th>Jumlah Tenaga Kerja</th>
                                                                        <th>Harga Tenaga Kerja</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
                                                                    for ($index = 1; $index <= $BTKL; $index++) {
                                                                        if ($this->input->post("jumlahBTKL" . $index) != NULL || $this->input->post("jumlahBTKL" . $index) != 0) {
                                                                            ?>
                                                                            <tr>

                                                                                <td><?php echo $nama_bahan_bakuBTKL[$index]; ?></td>
                                                                                <td><?php echo $jumlahBTKL[$index]; ?></td>
                                                                                <td>Rp. <?php echo number_format($hargaBTKL[$index], 2, ',', '.'); ?></td>

                                                                            </tr>
                                                                            <?php
                                                                        }
                                                                    }
                                                                    ?>
                                                                    <tr style="background-color: #dcedc8">
                                                                        <td colspan="2">Total Biaya Tenaga Kerja Langsung</td>
                                                                        <td>Rp. <?php echo number_format($totalBTKL, 2, ',', '.'); ?></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>  

                                                            <table class="table table-hover table-condensed">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Nama Overhead Variabel</th>
                                                                        <th>Jumlah Overhead Variabel</th>
                                                                        <th>Harga Overhead Variabel</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
                                                                    for ($index = 1; $index <= $BOV; $index++) {
                                                                        if ($this->input->post("jumlahBOV" . $index) != NULL || $this->input->post("jumlahBOV" . $index) != 0) {
                                                                            ?>
                                                                            <tr>

                                                                                <td><?php echo $nama_bahan_bakuBOV[$index]; ?></td>
                                                                                <td><?php echo $jumlahBOV[$index]; ?></td>
                                                                                <td>Rp. <?php echo number_format($hargaBOV[$index], 2, ',', '.'); ?></td>

                                                                            </tr>
                                                                            <?php
                                                                        }
                                                                    }
                                                                    ?>
                                                                    <tr style="background-color: #dcedc8">
                                                                        <td colspan="2">Total Biaya Overhead Variabel</td>
                                                                        <td>Rp. <?php echo number_format($totalBOV, 2, ',', '.'); ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th colspan="2"><h2>Total Harga Pokok Produksi</h2></th>
                                                                <th><h2>Rp. <?php echo number_format($totalProduksi, 2, ',', '.'); ?></h2></th>
                                                                </tr>
                                                                </tbody>
                                                            </table>  

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--</div>-->
                                        </form>

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
        <!--LOADING SCRIPTS FOR CHARTS-->
        <script src="<?php echo base_url(); ?>asset/script/highcharts.js"></script>
        <script src="<?php echo base_url(); ?>asset/script/data.js"></script>
        <script src="<?php echo base_url(); ?>asset/script/drilldown.js"></script>
        <script src="<?php echo base_url(); ?>asset/script/exporting.js"></script>
        <script src="<?php echo base_url(); ?>asset/script/highcharts-more.js"></script>
        <script src="<?php echo base_url(); ?>asset/script/charts-highchart-pie.js"></script>
        <script src="<?php echo base_url(); ?>asset/script/charts-highchart-more.js"></script>
        <!--CORE JAVASCRIPT-->
        <script src="<?php echo base_url(); ?>asset/script/jquery.nestable.js"></script>
        <script src="<?php echo base_url(); ?>asset/script/ui-nestable-list.js"></script>
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


