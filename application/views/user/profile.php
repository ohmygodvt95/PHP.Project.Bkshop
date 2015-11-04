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
        <title>User profile - BKShop</title>
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
                .error{
                    color: red;
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
                            User profile
                        </li>
                    </ol>
                </div>
            </div>
            <div class="content">
                <div class="container">
                    <div class="row">
                    	<?php  $this->load->view('user/menu');?>
	                    <div class="col-sm-6">
	                    	<div class="panel panel-info">
	                    		  <div class="panel-heading">
	                    				<h3 class="panel-title text-center">Thông tin tài khoản</h3>
	                    		  </div>
	                    		  <div class="panel-body">
	                    				<table class="table table-hover">
	                    					<tbody>
	                    						<tr>
	                    							<td>Name: </td>
	                    							<td><?php echo $this->session->userdata('name');?></td>
	                    						</tr>
	                    						<tr>
	                    							<td>Sex: </td>
	                    							<td><?php if($this->session->userdata('role') == 1) echo "Nam"; else echo "Nữ"?></td>
	                    						</tr>
	                    						<tr>
	                    							<td>Email: </td>
	                    							<td><?php echo $this->session->userdata('email');?></td>
	                    						</tr>
	                    						<tr>
	                    							<td>Role: </td>
	                    							<td><?php if($this->session->userdata('role') == 1) echo "Normal";?></td>
	                    						</tr>
	                    						<tr>
	                    							<td>Code: </td>
	                    							<td><?php echo md5($this->session->userdata('id'));?></td>
	                    						</tr>
	                    						<tr>
	                    							<td>Join time: </td>
	                    							<td><?php echo date("l, F jS, Y h:i:s", $this->session->userdata('join'));?></td>
	                    						</tr>
	                    						<tr>
	                    							<td>Last time: </td>
	                    							<td><?php echo date("l, F jS, Y h:i:s", $this->session->userdata('time'));?></td>
	                    						</tr>
	                    					</tbody>
	                    				</table>
	                    		  </div>
	                    	</div>
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
                        // Preloader Website
                        $(window).load(function() {
                            $('#loader-wrapper').delay(450).fadeOut();
                            $('#loader').delay(750).fadeOut('slow');
                        });
            </script>
        </body>
    </html>