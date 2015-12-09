<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="<?php echo COMPANY;?> - <?php echo SOLOGAN;?> - Đăng nhập tài khoản">
        <META NAME="keywords" CONTENT="<?php echo COMPANY;?> - <?php echo SOLOGAN;?> - Đăng nhập tài khoản">
        <meta name="Author" content="LengKeng, E-mail: ohmygodvt95@gmail.com">
        <meta name="copyright" content="Copyright   &copy <?php echo date('Y');?> by LengKeng">
        <link rel="shortcut icon" type="image/png" href="<?php echo base_url();?>asset/images/favicon.png" />
        <meta itemprop="name" content="<?php echo COMPANY;?> - <?php echo SOLOGAN;?> - Đăng nhập tài khoản">
        <meta itemprop="description" content="<?php echo COMPANY;?> - <?php echo SOLOGAN;?> - Đăng nhập tài khoản">
        <meta itemprop="image" content="<?php echo base_url();?>asset/images/logo2.png">
        <meta property="og:title" content="<?php echo COMPANY;?> - <?php echo SOLOGAN;?> - Đăng nhập tài khoản" />
        <meta property="og:locale" content="vi_VN" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="<?php echo $_SERVER['REQUEST_URI'];?>" />
        <meta property="og:image" content="<?php echo base_url();?>asset/images/logo2.png" />
        <meta property="og:description" content="<?php echo COMPANY;?> - <?php echo SOLOGAN;?> - Đăng nhập tài khoản" />
        <meta property="og:site_name" content="<?php echo COMPANY;?>" />
        <meta property="fb:admins" content="ohmygodvt95" />
        <link rel="canonical" href="<?php echo $_SERVER['REQUEST_URI'];?>"/>
        <link rel="next" href="<?php echo $_SERVER['REQUEST_URI'];?>"/>
        <link rel="prev" href="<?php echo $_SERVER['REQUEST_URI'];?>" />
        <title>Tài khoản- Đăng nhập - <?php echo COMPANY;?> - <?php echo SOLOGAN;?></title>
        <!-- Load CSS-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/reset.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/style.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/owl.carousel.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/owl.theme.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/sweetalert.min.css">
        <!-- Load module -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/frontend/header.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/frontend/footer.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/frontend/media.css">
        <!-- Load Customize Css-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/product/details.css">
        <!-- Load customize fonts -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700,500' rel='stylesheet' type='text/css'>
            <!-- Style -->
            <style>

            </style>
        </head>
        <body>
            <!-- Preloader -->
            <div id="loader-wrapper">
                <div id="loader"></div>
            </div>
            <?php $this->load->view('module/frontend/header');?>
            <!-- Preloader End -->
            <div class="bread">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="">
                            <a href="<?php echo site_url();?>"><?php echo COMPANY;?> - Home</a>
                        </li>
                        <li class="active">
                            Login
                        </li>
                    </ol>
                </div>
            </div>
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            <h2 class="text-center text-primary">Đăng nhập - <?php echo COMPANY;?></h2>
                            <h4 class="text-center"><?php echo COMPANY;?> - <?php echo SOLOGAN;?></h4>
                            <hr>
                            <h4 class="text-center arial">Bạn chưa là thành viên? <a href="<?php echo site_url("user/account/dang-ky");?>">Đăng ký</a>  tài khoản ngay!</h4>
                            <hr>
                            <?php if($this->session->flashdata('signup') != NULL){
                                                echo '<div class="alert alert-info">
                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                <strong>Chúc mừng!</strong> Tài khoản '.$this->session->userdata('signup').' đã có thể sử dụng
                                            </div>';
                                            }?>
                            <div class="row">
                                <div class="col-sm-8 col-sm-offset-2">

                                    <h4>Email:</h4>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1"><i class="fa fa-fw fa-user"></i></span>
                                        <input type="email" class="form-control email" placeholder="Email" aria-describedby="basic-addon1">
                                    </div>
                                    <h4>Password:</h4>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1"><i class="fa fa-fw fa-key"></i></span>
                                        <input type="password" class="form-control pass" placeholder="Password" aria-describedby="basic-addon1">
                                    </div>
                                    <br>
                                    <a href="">Quên mật khẩu?</a>
                                    <hr>
                                    <button type="button" class="btn btn-primary login btn-lg btn-block">Đăng nhập</button>
                                </div>
                            </div>
                            <hr>
                            <a href="<?php echo site_url(); ?>" title="Go home">Tiếp tục mua hàng <i class="fa fa-fw fa-shopping-cart"></i></a>
                            <a href="<?php echo site_url("contact"); ?>" title="Contact" class="pull-right">Tìm hiểu ngay về chúng tôi<i class="fa fa-fw fa-info"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden baseurl"><?php echo site_url();?></div>
            <?php $this->load->view('module/frontend/footer');?>
            <!-- JQUERY -->
            <script src="<?php echo base_url();?>asset/js/jquery.min.js"></script>
            <!-- BOOSTRAP -->
            <script src="<?php echo base_url();?>asset/js/bootstrap.min.js"></script>
            <!-- Plugin -->
            <script src="<?php echo base_url();?>asset/js/owl.carousel.min.js"></script>
            <script src="<?php echo base_url();?>asset/js/stickup.min.js"></script>
            <script src="<?php echo base_url();?>asset/js/frontend/script.js"></script>
            <script src="<?php echo base_url();?>asset/js/sweetalert.min.js"></script>
            <!-- Customize -->
            <script>
            $(document).ready(function() {
                $('.login').click(function(event) {
                    var email = $('.email').val();
                    var pass  = $('.pass').val();
                    if($.trim(email) != "" && pass.length > 0){
                        var url = "<?php echo site_url();?>user/checklogin/";
                        $.post(url, {email: email, pass: pass}, function(data, textStatus, xhr) {
                            if (textStatus == "success" && data == "TRUE") {
                                window.location = "<?php echo site_url();?>user/profile/";
                            }
                            else{
                                swal('Error!', 'Tên đăng nhập hoặc mật khẩu sai!', 'error');
                            }
                        });
                    }
                });
            });
            </script>
            <script>
                        // Preloader Website
                        $(window).load(function() {
                            $('#loader-wrapper').delay(450).fadeOut();
                            $('#loader').delay(750).fadeOut('slow');
                        });
            </script>
        </body>
    </html>