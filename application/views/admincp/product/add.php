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
        <title>Admin Control Panel</title>
        <!-- Load CSS-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/reset.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/style.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/bootstrap-theme.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/font-awesome.min.css">
        <!-- Load Customize Css-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/admincp/dashboard.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/admincp/dashboard-media.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/admincp/sidebar-admin.css">
        <!-- Load customize fonts -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700,500|Pacifico|Raleway:400,500|Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
        <!-- Style -->
        <style>
        .a{
            cursor: pointer;
        }
        </style>
    </head>
    <body>
        <!-- Preloader -->
        <div id="loader-wrapper">
            <div id="loader"></div>
        </div>
        <!-- Preloader End -->
        <div class="wrapper active" id="wrapper">
            <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <ul id="sidebar_menu" class="sidebar-nav">
                    <li class="sidebar-brand"><a id="menu-toggle" href="#" title="Hide/Show menu">Control Panel<span id="main_icon" class="glyphicon glyphicon-align-justify" style="color: red"></span></a></li>
                </ul>
                <ul class="sidebar-nav" id="sidebar">
                    <li><a href="#" title="Dashboard">Dashboard<span class="sub_icon fa fa-th-large"></span></a></li>
                    <li><a href="#" title="Sales">Sales<span class="sub_icon fa fa-cart-plus"></span></a></li>
                    <li><a href="#" title="Deals">Categories<span class="sub_icon fa fa-users"></span></a></li>
                    <li><a href="<?php echo site_url('admincp/product');?>" title="Deals">Products<span class="sub_icon fa fa-tasks"></span></a></li>
                    <li><a href="#" title="Deals">Deals<span class="sub_icon fa fa-cart-plus"></span></a></li>
                    <li><a href="#" title="Deals">Ussers<span class="sub_icon fa fa-users"></span></a></li>
                </ul>
            </div>
            <!-- /#sidebar-wrapper -->
            <!-- Page Content -->
            <div id="page-content-wrapper" class="dashboard row">
                <div class="nav-top navbar-fixed-top">
                    <ul>
                        <li><div class="dropdown">
                            <div class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                <i class="fa fa-fw fa-cog fa-2x"></i>
                            </div>
                            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                <li><a href="#" title="Thay đổi thông tin">Change profile</a></li>
                                <li><a href="#" title="Đăng xuất">Logout</a></li>
                            </ul>
                        </div></li>
                        <li><a href=""><i class="fa fa-fw fa-envelope fa-2x"></i></a></li>
                        <li class="brand"><a href="" title="Go homepage">Webshop</a></li>
                    </ul>
                </div>
                <!-- Static  -->
                <div class="col-sm-12 static">
                    <textarea id="summary">
                        <ol>
                            <li>dsdasdasdasd</li>
                            <li>sdasdasdasdas</li>
                            <li>asdasdasdasd</li>
                            <li>&aacute;dasdasdasdas</li>
                        </ol>
                    </textarea>
                </div>
                <!-- /#page-content-wrapper -->
            </div>
            <!-- JQUERY -->
            <script src="<?php echo base_url();?>asset/js/jquery.min.js"></script>
            <!-- BOOSTRAP -->
            <script src="<?php echo base_url();?>asset/js/bootstrap.min.js"></script>
            <!-- BOOSTRAP -->
            <script src="<?php echo base_url();?>asset/ckeditor/ckeditor.js?t=<?php echo time();?>"></script>
            <script type="text/javascript">
            jQuery(document).ready(function($) {
                CKEDITOR.replace('summary',{language: 'vi'});
            });
            </script>
            <!-- Customize -->
            <script>
            $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("active");
            });
            $('.orrder a').click(function (e) {
            e.preventDefault()
            $(this).tab('show')
            });
            $('.log a').click(function (e) {
            e.preventDefault()
            $(this).tab('show')
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