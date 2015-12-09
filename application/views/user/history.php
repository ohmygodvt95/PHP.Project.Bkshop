<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="<?php echo COMPANY;?>">
        <META NAME="keywords" CONTENT="<?php echo COMPANY;?>">
        <meta name="Author" content="LengKeng, E-mail: ohmygodvt95@gmail.com">
        <meta name="copyright" content="Copyright   &copy <?php echo date('Y');?> by LengKeng">
        <link rel="shortcut icon" type="image/png" href="<?php echo base_url();?>asset/images/favicon.png" />
        <title>Lịch sử đơn hàng - <?php echo COMPANY;?> - <?php echo SOLOGAN;?></title>
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
                            <a href="<?php echo site_url();?>"><?php echo COMPANY;?> - Home</a>
                        </li>
                        <li class="active">
                            History
                        </li>
                    </ol>
                </div>
            </div>
            <div class="content">
                <div class="container">
                    <div class="row">
                        <?php  $this->load->view('user/menu');?>
	                    <div class="col-sm-9">
	                    	<div class="panel panel-success">
	                    		  <div class="panel-heading">
	                    				<h3 class="panel-title text-center">Lịch sử đơn hàng</h3>
	                    		  </div>
	                    		  <div class="panel-body">
	                    				<table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#ID</th>
                                                    <th>Mã đơn hàng</th>
                                                    <th>Thời gian</th>
                                                    <th>Tình trạng</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                               <?php
                                               $user_id = $this->session->userdata('id');
                                                $sql = "SELECT * FROM \"order\" WHERE user_id = $user_id ORDER BY order_id DESC";
                                                $result = $this->db->query($sql)->result();
                                                $id = 0;
                                                foreach ($result as $item) {
                                                    $id++;
                                                    echo '<tr>
                                                            <td>'.$id.'</td>
                                                            <td><a href="'.site_url("user/trackyourorder/".$item->order_id).'" title="Xem chi tiết đơn hàng '.$item->order_id.'">'.substr(md5($item->order_id), 0, 6).'</a></td>
                                                            <td>'.date("l, jS F, Y - h:i:s A",$item->order_time).'</td>
                                                            <td>';
                                                            if ($item->order_status == 0) echo '<span class="pending">Chờ xử lý</span>';
        else if ($item->order_status == 1) echo '<span class="text-danger">Đang xử lý</span>';
        else if ($item->order_status == 2) echo '<span class="text-success">Đã xử lý</span>';
        else if ($item->order_status == 3) echo '<span class="text-warning">Đã bị hủy</span>';
                                                            echo '</td>
                                                        </tr>';
                                                }
                                               ?>
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