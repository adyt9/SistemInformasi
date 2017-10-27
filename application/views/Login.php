<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,800italic,400,700,800">
        <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700,300">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>asset/styles/font-awesome.min.css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>asset/styles/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>asset/styles/animate.css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>asset/styles/all.css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>asset/styles/main.css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>asset/styles/style-responsive.css">
    </head>
    <body style="background: url('<?php echo base_url(); ?>asset/images/bg/bg.png') center center fixed;">
        <div class="page-form">
            <div class="panel panel-blue">
                <div class="panel-body pan">
                    <form action="<?php echo base_url(); ?>index.php/C_login/cekUserPass" method="post" class="form-horizontal">
                        <div class="form-body pal">
                            <div class="col-md-12 text-center">
                                <h1 style="margin-top: -90px; font-size: 48px;">
                                    Son Screen Printing</h1>
                                <br />
                            </div>
                            <div class="form-group">
                                <div class="col-md-3">
                                    <img src="<?php echo base_url(); ?>asset/images/avatar/profile-pic.png" class="img-responsive" style="margin-top: -35px;" />
                                </div>
                                <div class="col-md-9 text-center">
                                    <h1>
                                        Selamat Bekerja</h1>
                                    <br />
                                    <p style="color:red;">
                                        <?php
                                        if (isset($notif)) {
                                            echo $notif;  
                                        }?>
                                    </p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputName" class="col-md-3 control-label">
                                    Username:</label>
                                <div class="col-md-9">
                                    <div class="input-icon right">
                                        <i class="fa fa-user"></i>
                                        <input id="inputName" type="text" name="username" class="form-control" required=""/></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword" class="col-md-3 control-label">Password:</label>
                                <div class="col-md-9">
                                    <div class="input-icon right">
                                        <i class="fa fa-lock"></i>
                                        <input id="inputPassword" type="password" name="password" class="form-control" required="" /></div>
                                </div>
                            </div>
                            <div class="form-group mbn">
                                <div class="col-lg-12" align="right">
                                    <button type="submit" class="btn btn-default">Login</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
