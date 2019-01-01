<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Login Shelongs</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>app-assets/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>app-assets/css/app.min.css">

</head>

<body class="vertical-layout vertical-menu-modern 1-column   menu-expanded blank-page blank-page" data-open="click"
    data-menu="vertical-menu-modern" data-col="1-column" ng-app="myAdmin" ng-controller="myCtrl">
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section class="flexbox-container">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="col-md-4 col-10 box-shadow-2 p-0">
                            <div class="card border-grey border-lighten-3 m-0">
                                <div class="card-header border-0">
                                    <div class="card-title text-center">
                                        <div class="p-1">
                                            Shelongs Backend For Manage
                                        </div>
                                    </div>
                                    <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                                        <span>Login with Admin Shelongs</span>
                                    </h6>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                      <?php $attr = array('class'=>'form-horizontal form-simple'); ?>
                                        <!-- <form class="form-horizontal form-simple"> -->
                                        <?php echo form_open('checklogin/check_login_admin', $attr); ?>
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-lg input-lg" name="username"
                                                    placeholder="Username" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control form-control-lg input-lg" name="password"
                                                    placeholder="Password" required>
                                            </div>
                                            <div>
                                              <?php echo $this->session->flashdata('msg_error'); ?>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-info btn-lg btn-block">Login</button>
                                            </div>
                                        <!-- </form> -->
                                        <?php echo form_close(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</body>

</html>
