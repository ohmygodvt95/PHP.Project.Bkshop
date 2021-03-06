<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo COMPANY;?> - Giỏ hàng">
    <META NAME="keywords" CONTENT="<?php echo COMPANY;?>">
    <meta name="Author" content="LengKeng, E-mail: ohmygodvt95@gmail.com">
    <meta name="copyright" content="Copyright   &copy <?php echo date('Y');?> by LengKeng">
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url();?>asset/images/favicon.png" />
    <meta itemprop="name" content="<?php echo COMPANY;?> - <?php echo SOLOGAN;?> - Kiểm tra giỏ hàng">
    <meta itemprop="description" content="<?php echo COMPANY;?> - <?php echo SOLOGAN;?> - Kiểm tra giỏ hàng">
    <meta itemprop="image" content="<?php echo base_url();?>asset/images/logo2.png">
    <meta property="og:title" content="<?php echo COMPANY;?> - <?php echo SOLOGAN;?> - Kiểm tra giỏ hàng" />
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo $_SERVER['REQUEST_URI'];?>" />
    <meta property="og:image" content="<?php echo base_url();?>asset/images/logo2.png" />
    <meta property="og:description" content="<?php echo COMPANY;?> - <?php echo SOLOGAN;?> - Kiểm tra giỏ hàng" />
    <meta property="og:site_name" content="<?php echo COMPANY;?>" />
    <meta property="fb:admins" content="ohmygodvt95" />
    <link rel="canonical" href="<?php echo $_SERVER['REQUEST_URI'];?>"/>
    <link rel="next" href="<?php echo $_SERVER['REQUEST_URI'];?>"/>
    <link rel="prev" href="<?php echo $_SERVER['REQUEST_URI'];?>" />
    <title>Giỏ hàng của tôi - <?php echo COMPANY;?> - <?php echo SOLOGAN;?></title>
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
                        My Cart
                    </li>
                </ol>
            </div>
        </div>
        <div class="content">
            <div class="container">
                <h1>Giỏ hàng của tôi <span class="badge"><?php echo count($cart);?></span></h1>
                <hr>
                <div class="row">
                    <div class="col-sm-9">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#ID</th>
                                    <th>Sản phẩm</th>
                                    <th>SLượng</th>
                                    <th>Đơn giá</th>
                                    <th>Thành tiền</th>
                                    <th>Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <?php
                                    $id = 1;
                                    $total = 0;
                                    $total_amount = 0;
                                        foreach ($cart as $item) {
                                            $total += $item['qty'];
                                            $total_amount += $item['qty'] * $item['price'];
                                            echo '
                                            <tr id="p_'.$item['id'].'">
                                                <th>'.$id++.'</th>
                                                <th style="color:#7BAE23"><a href="'.site_url("chi-tiet/".$item['options']).'">'.$item['name'].'</a></th>
                                                <th>'.$item['qty'].'</th>
                                                <th>$ '.$item['price'].'</th>
                                                <th style="color:#CB3430">$ '.($item['qty'] * $item['price']).'</th>
                                                <th><i class="fa fa-fw fa-trash delete" id="'.$item['id'].'" title="Xóa"></i></th>
                                            </tr>';
                                        }
                                    ?>
                            </tbody>
                        </table>
                        <hr>
                        <a href="<?php echo site_url();?>" class="roboto"><i class="fa fa-fw fa-arrow-left"></i>Tiếp tục mua sắm</a>
                        <hr>
                        <div class="alert alert-info roboto" >
                            <strong>Chú ý!</strong><br>
                            <ul>
                                <li>Hãy đọc kỹ chính sách mua hàng của chúng tôi.</li>
                                <li>Mọi thông tin đơn hàng đều có thể thay đổi nếu bạn cần.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="panel panel-danger">
                              <div class="panel-heading">
                                    <h3 class="panel-title">Thống kê nhanh</h3>
                              </div>
                              <div class="panel-body">
                                    <h5>Số mặt hàng: <?php echo count($cart); ?></h5>
                                    <h5>Số đơn vị: <?php echo $total; ?></h5>
                              </div>
                              <div class="panel-footer">
                                  <h4>Tổng số tiền: <?php echo $total_amount; ?> $</h4>
                              </div>
                        </div>
                        <hr>
                        <a href="<?php if($total > 0) echo site_url("cart/pay");?>" class="btn btn-danger btn-lg btn-block <?php if($total == 0) echo "active";?>" style="<?php if($total == 0) echo "opacity:0.3!important";?>">Thanh toán ngay <i class="fa fa-fw fa-arrow-circle-right"></i></a>
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
            <script src="<?php echo base_url();?>asset/js/frontend/cart.js"></script>
            <script type="text/javascript">
            $(document).ready(function() {

                $('.delete').click(function(event) {
                    var id = $(this).attr("id");
                    swal({
                        title: 'Are you sure?',
                        text: 'Sản phẩm sẽ xóa khỏi giỏ hàng',
                        type: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!',
                        closeOnConfirm: false
                    }, function() {
                        $.post('<?php echo site_url();?>cart/delete/', {
                            id: id
                        }, function(data, textStatus, xhr) {
                            if (textStatus == "success") {
                                if (data == "TRUE") {
                                    window.location = "<?php echo site_url();?>cart/checkout/" ;
                                } else {
                                    swal('Error!', 'Something is wrong!', 'error');
                                }
                            } else {
                                swal('Error!', 'Something is wrong!', 'error');
                            }
                        });
                    });
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
