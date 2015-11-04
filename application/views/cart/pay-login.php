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
                            Thanh toán
                        </li>
                    </ol>
                </div>
            </div>
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            <div class="panel panel-info <?php if(count($cart) < 1) echo "hidden";?>">
                                  <div class="panel-heading">
                                        <h3 class="panel-title text-center" style="height: 35px;">Order</h3>
                                  </div>
                                  <div class="panel-body">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Qty</th>
                                                <th>$</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                         <?php
                                            foreach ($cart as $item) {
                                                echo '
                                                    <tr>
                                                        <td><a href="'.site_url('chi-tiet/'.$item['options']).'">'.$item['name'].'</a></td>
                                                        <td>'.$item['qty'].'</td>
                                                        <td >$ '.($item['qty'] * $item['price']).'</td>
                                                    </tr>
                                                ';
                                            }
                                        ?>
                                        <tr  style="border-top: 3px solid black;">
                                            <th>Total</th>
                                            <th><?php echo $total_product;?></th>
                                            <th style="color: red">$ <?php echo $total_amount;?></th>
                                        </tr>
                                        </tbody>
                                    </table>
                                  </div>
                                <div class="panel-footer roboto">
                                    <p class="text-center">Số tiền thanh toán chưa tính phụ phí vẫn chuyển, xem phụ phí vận chuyển <a href="">tại đây</a></p>
                                    <div class="input-group col-sm-4 col-sm-offset-4">
                                    <span class="input-group-btn">
                                        <button class="btn btn-danger code" id="basic-addon1" ><?php echo substr(md5(rand(1, 10)), 5, 5);?></button>
                                    </span>
                                        <input type="text" class="form-control re_code" placeholder="input code" aria-describedby="basic-addon1">
                                    </div>
                                    <hr>
                                    <button class="btn btn-primary btn-ok btn-block btn-lg" type="button">Xác nhận</button>
                                </div>
                            </div>
                            <div class="col-sm-12 <?php if(count($cart) > 0) echo "hidden";?>">
                                <div class="well">
                                    <h1 class="text-center roboto">Không có thông tin nào</h1>
                                    <a href="<?php echo site_url(); ?>"><i class="fa fa-fw fa-arrow-left"></i>Tiếp tục mua sắm</a>
                                    <a href="<?php echo site_url("user/history"); ?>" class="pull-right">Xem lịch sử mua sắm<i class="fa fa-fw fa-arrow-right"></i></a>
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
            <script src="<?php if(count($cart) > 0) echo base_url()."asset/js/frontend/cart.js";?>"></script>
            <!-- Customize -->
            <script>
            $(document).ready(function() {
                $('.btn-ok').click(function(event) {
                    var code = $('.code').text();
                    var re_code = $('.re_code').val();
                    if(re_code != code){
                        swal("Error", "Sai mã bảo mật", 'error');
                    }
                    else{
                        $.post('<?php echo site_url();?>cart/order/', {param1: 'value1'}, function(data, textStatus, xhr) {
                            if(textStatus == 'success' && data == 'TRUE'){
                                swal({
                                    title: 'Success',
                                    text: 'Thành công! hãy kiểm tra trong lịch sử giao dịch. Chúng tôi sẽ liên lạc với bạn sớm nhất. Hotline: 0977 903 921',
                                    type: 'success',
                                    confirmButtonColor: '#3085d6',
                                    confirmButtonText: 'OK',
                                    closeOnConfirm: false
                                }, function(argument) {
                                    window.location = "<?php echo site_url();?>";
                                });

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