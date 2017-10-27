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
                            <li class="active"><a href="<?php echo base_url(); ?>index.php/C_produksi/tampilkanKelolaHargaPokokProduksi"><i class="fa fa-th-list fa-fw">
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
                                Kelola Harga Pokok Produksi
                            </div>
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
                                    <div class="page-content">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="panel">
                                                    <div class="panel-heading">                                
                                                        <a href="<?php echo base_url(); ?>index.php/C_produksi/tampilkanFormInputHargaPokokProduksi/">Tambah Harga Pokok Produksi</a> 
                                                        <p style="color:red;">
                                                            <?php
                                                            if (isset($notif)) {
                                                                echo $notif;
                                                            }
                                                            ?>
                                                        </p>
                                                    </div>
                                                    <div class="panel-body">
                                                        <div id="grid-layout-table-1" class="box jplist">
                                                            <div class="jplist-ios-button"><i class="fa fa-sort"></i>jPList Actions</div>
                                                            <div class="jplist-panel box panel-top">
                                                                <button type="button" data-control-type="reset" data-control-name="reset" data-control-action="reset" class="jplist-reset-btn btn btn-default">Reset<i class="fa fa-share mls"></i></button>
                                                                <div data-control-type="drop-down" data-control-name="paging" data-control-action="paging" class="jplist-drop-down form-control">
                                                                    <ul class="dropdown-menu">
                                                                        <li><span data-number="3"> 3 per page</span></li>
                                                                        <li><span data-number="5"> 5 per page</span></li>
                                                                        <li><span data-number="10" data-default="true"> 10 per page</span></li>
                                                                        <li><span data-number="all"> view all</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div data-control-type="drop-down" data-control-name="sort" data-control-action="sort" data-datetime-format="{month}/{day}/{year}" class="jplist-drop-down form-control">
                                                                    <ul class="dropdown-menu">
                                                                        <li><span data-path="default">Sort by</span></li> 
                                                                        <li><span data-path=".id" data-order="asc" data-type="number">ID Terkecil</span></li>
                                                                        <li><span data-path=".id" data-order="desc" data-type="number">ID Terbesar</span></li>
                                                                        <li><span data-path=".title" data-order="asc" data-type="text">Nama A-Z</span></li>
                                                                        <li><span data-path=".title" data-order="desc" data-type="text">Nama Z-A</span></li>
                                                                        <li><span data-path=".desc" data-order="asc" data-type="text">Jenis A-Z</span></li>
                                                                        <li><span data-path=".desc" data-order="desc" data-type="text">Jenis Z-A</span></li>
                                                                        <li><span data-path=".harga" data-order="asc" data-type="number">Harga Terkecil</span></li>
                                                                        <li><span data-path=".harga" data-order="desc" data-type="number">Harga Terbesar</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="text-filter-box">
                                                                    <div class="input-group"><span class="input-group-addon"><i class="fa fa-search"></i></span><input data-path=".title" type="text" value="" placeholder="Nama Produksi" data-control-type="textbox" data-control-name="title-filter" data-control-action="filter" class="form-control"/></div>
                                                                </div>
                                                                <div class="text-filter-box">
                                                                    <div class="input-group"><span class="input-group-addon"><i class="fa fa-search"></i></span><input data-path=".desc" type="text" value="" placeholder="Jenis Produksi" data-control-type="textbox" data-control-name="desc-filter" data-control-action="filter" class="form-control"/></div>
                                                                </div>
                                                                <div data-type="Page {current} of {pages}" data-control-type="pagination-info" data-control-name="paging" data-control-action="paging" class="jplist-label btn btn-default"></div>
                                                                <div data-control-type="pagination" data-control-name="paging" data-control-action="paging" class="jplist-pagination"></div>
                                                            </div>
                                                            <div class="box text-shadow">
                                                                <table class="table table-hover table-striped demo-tbl">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>ID Bahan Baku</th>
                                                                            <th>Nama Kebutuhan Produksi</th>
                                                                            <th>Jenis Kebutuhan Produksi</th>
                                                                            <th>Biaya Kebutuhan Produksi</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php foreach ($produksi as $p) { ?>

                                                                            <tr class="tbl-item">
                                                                                <td class="id"><?php echo $p->id_bahan_baku; ?></td>
                                                                                <td class="title"><?php echo $p->nama_bahan_baku; ?></td>
                                                                                <td class="desc"><?php echo $p->jenis_bahan_baku; ?></td>
                                                                                <td class="harga"><?php echo number_format($p->harga_bahan_baku, 2, ',', '.'); ?></td>
                                                                                <td><a href="<?php echo base_url(); ?>index.php/C_produksi/tampilkanFormEditHargaPokokProduksi/<?php echo $p->id_bahan_baku; ?>"><i class="fa fa-edit fa-fw"/></a></td>
                                                                                <td><a onclick="" href="javascript:konfirmasi('<?php echo base_url(); ?>index.php/C_produksi/hapusDataHargaPokokProduksi/<?php echo $p->id_bahan_baku; ?>')"><i class="fa fa-trash-o fa-fw"/></a></td>
                                                                            </tr>
                                                                        <?php } ?>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="box jplist-no-results text-shadow align-center"><p>No results found</p></div>
                                                            <div class="jplist-ios-button"><i class="fa fa-sort"></i>jPList Actions</div>
                                                            <div class="jplist-panel box panel-bottom">
                                                                <div data-control-type="drop-down" data-control-name="paging" data-control-action="paging" data-control-animate-to-top="true" class="jplist-drop-down form-control">
                                                                    <ul class="dropdown-menu">
                                                                        <li><span data-number="3"> 3 per page</span></li>
                                                                        <li><span data-number="5"> 5 per page</span></li>
                                                                        <li><span data-number="10" data-default="true"> 10 per page</span></li>
                                                                        <li><span data-number="all"> view all</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div data-control-type="drop-down" data-control-name="sort" data-control-action="sort" data-control-animate-to-top="true" data-datetime-format="{month}/{day}/{year}" class="jplist-drop-down form-control">
                                                                    <ul class="dropdown-menu">
                                                                        <li><span data-path="default">Sort by</span></li> 
                                                                        <li><span data-path=".id" data-order="asc" data-type="number">ID Terkecil</span></li>
                                                                        <li><span data-path=".id" data-order="desc" data-type="number">ID Terbesar</span></li>
                                                                        <li><span data-path=".title" data-order="asc" data-type="text">Nama A-Z</span></li>
                                                                        <li><span data-path=".title" data-order="desc" data-type="text">Nama Z-A</span></li>
                                                                        <li><span data-path=".desc" data-order="asc" data-type="text">Jenis A-Z</span></li>
                                                                        <li><span data-path=".desc" data-order="desc" data-type="text">Jenis Z-A</span></li>
                                                                        <li><span data-path=".harga" data-order="asc" data-type="number">Harga Terkecil</span></li>
                                                                        <li><span data-path=".harga" data-order="desc" data-type="number">Harga Terbesar</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div data-type="{start} - {end} of {all}" data-control-type="pagination-info" data-control-name="paging" data-control-action="paging" class="jplist-label btn btn-default"></div>
                                                                <div data-control-type="pagination" data-control-name="paging" data-control-action="paging" data-control-animate-to-top="true" class="jplist-pagination"></div>
                                                            </div>
                                                        </div>
                                                    </div>
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
