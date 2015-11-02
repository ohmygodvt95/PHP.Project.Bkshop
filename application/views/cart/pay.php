<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Webshop">
        <META NAME="keywords" CONTENT="Lengkeng">
        <meta name="Author" content="LengKeng, E-mail: ohmygodvt95@gmail.com">
        <meta name="copyright" content="Copyright   &copy <?php echo date('Y');?> by LengKeng">
        <link rel="shortcut icon" type="image/png" href="<?php echo base_url();?>asset/images/favicon.png" />
        <title>Thanh toán - BKShop</title>
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
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700,500|Raleway:400,500' rel='stylesheet' type='text/css'>
            <!-- Style -->
            <style>
                tr i{
                    transition: 0.5s;
                    cursor: pointer;
                    color: green;
                }
                tr i:hover{
                    color: red;
                }
                .roboto{
                    font-family: 'Roboto';
                }
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
                            <a href="<?php echo site_url();?>">BKShop - Home</a>
                        </li>
                        <li class="active">
                            My Cart
                        </li>
                    </ol>
                </div>
            </div>
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="panel-title">
                                        <h5 role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        I was a member BKShop
                                        </h5>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body">
                                        <?php if($this->session->flashdata('signup') != NULL){
                                                echo '<div class="alert alert-info">
                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                <strong>Chúc mừng!</strong> Tài khoản '.$this->session->userdata('signup').' đã có thể sử dụng
                                            </div>';
                                            }?>
                                            <div class="col-sm-8 col-sm-offset-2 login">
                                                <h4>Email:</h4>
                                                <div class="input-group">
                                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-fw fa-user"></i></span>
                                                    <input type="email" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
                                                </div>
                                                <h4>Password:</h4>
                                                <div class="input-group">
                                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-fw fa-key"></i></span>
                                                    <input type="password" class="form-control" placeholder="Password" aria-describedby="basic-addon1">
                                                </div>
                                                <hr>
                                                <button class="btn btn-primary btn-lg btn-block">Login</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                        <h4 class="panel-title">
                                        <h5 class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        I'm a new member
                                        </h5>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="panel-body">
                                            <div class="col-sm-8 col-sm-offset-2 signup">
                                                <form action="<?php echo site_url();?>user/register/" method = "POST">
                                                     <h4>Email:</h4>
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="basic-addon1"><i class="fa fa-fw fa-user"></i></span>
                                                        <input type="email" class="form-control" placeholder="Username" aria-describedby="basic-addon1" name = "email">
                                                    </div>
                                                    <h4>Password:</h4>
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="basic-addon1"><i class="fa fa-fw fa-key"></i></span>
                                                        <input type="password" class="form-control" placeholder="Password" aria-describedby="basic-addon1" name = "password">
                                                    </div>
                                                    <h4>Re-password:</h4>
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="basic-addon1"><i class="fa fa-fw fa-key"></i></span>
                                                        <input type="password" class="form-control" placeholder="Password" aria-describedby="basic-addon1">
                                                    </div>
                                                    <div class="checkbox hidden" style="font-size: 12px">
                                                        <label><input type="checkbox" value="" class="check">I agree to the BKShop <a href="">Terms of Service</a>  and <a href="">Privacy Policy</a></label>
                                                    </div>
                                                    <hr>
                                                    <button class="btn btn-primary btn-lg btn-block">Sign Up</button>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
            <script type="text/javascript">
            $(document).ready(function() {
                // $('.check').click(function(event) {
                //     $('.signup button').toggleClass('active');
                // });
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