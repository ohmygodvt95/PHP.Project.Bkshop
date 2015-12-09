<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo COMPANY;?> - Tìm kiếm">
    <META NAME="keywords" CONTENT="Tìm kiếm - <?php echo COMPANY;?>">
    <meta name="Author" content="LengKeng, E-mail: ohmygodvt95@gmail.com">
    <meta name="copyright" content="Copyright   &copy <?php echo date('Y');?> by LengKeng">
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url();?>asset/images/favicon.png" />
    <meta itemprop="name" content="<?php echo COMPANY;?> - <?php echo SOLOGAN;?>">
    <meta itemprop="description" content="<?php echo COMPANY;?> - <?php echo SOLOGAN;?> - Tìm kiếm">
    <meta itemprop="image" content="<?php echo base_url();?>asset/images/logo2.png">
    <meta property="og:title" content="<?php echo COMPANY;?> - <?php echo SOLOGAN;?> - Tìm kiếm" />
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo $_SERVER['REQUEST_URI'];?>" />
    <meta property="og:image" content="<?php echo base_url();?>asset/images/logo2.png" />
    <meta property="og:description" content="<?php echo COMPANY;?> - <?php echo SOLOGAN;?> - Tìm kiếm" />
    <meta property="og:site_name" content="<?php echo COMPANY;?>" />
    <meta property="fb:admins" content="ohmygodvt95" />
    <link rel="canonical" href="<?php echo $_SERVER['REQUEST_URI'];?>"/>
    <link rel="next" href="<?php echo $_SERVER['REQUEST_URI'];?>"/>
    <link rel="prev" href="<?php echo $_SERVER['REQUEST_URI'];?>" />
    <title>Tìm kiếm - <?php echo COMPANY;?></title>
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
                    <li>
                        <a href="<?php echo site_url();?>"><?php echo COMPANY;?> - Home</a>
                    </li>
                    <li class="active">
                        Tìm kiếm
                    </li>
                </ol>
            </div>
        </div>
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <hr>
                        <form class=""  method="get" action="<?php echo site_url();?>search">
                            <div class="input-group input-group-lg">
                                <input type="text" class="form-control search" placeholder="Search: e.g Iphone 6" name="key">
                                <span class="input-group-btn">
                                    <button class="btn btn-success" type="submit" title="Search!"><i class="fa fa-fw fa-search" ></i></button>
                                </span>
                            </div>
                        </form>
                        <hr>
                    </div>
                </div>
                <div class="col-sm-12 products">
                    <h1 class="<?php if(isset($_GET['key'])) echo"sub-heading";?>">
                    <?php if(isset($_GET['key'])){
                    echo "Kết quả : ".count($product);
                    if(count($product) <1 ) echo " <p style=';' class='text-warning text-center'> ! Xin lỗi không có sản phẩm nào được tìm thấy!<p>";
                    }
                    else echo '<p class="text-center" style="font-family: arial;">Hãy bắt đầu <a>tìm kiếm</a> sản phẩm ngay bây giờ! </p>';?></h1>
                    <?php
                        if(isset($_GET['key'])){
                            foreach ($product as $key) {
                                echo '<div class="col-sm-3">
                                                <div class="box">
                                                    <img class="img-responsive center-block" src="'.$key->product_thumb.'" alt="'.$key->product_title.'"/>
                                                    <div class="info">
                                                        <h3>Thông tin</h3>
                                                        '.$key->product_desc.'<br>
                                                        <a href="'.site_url('chi-tiet/'.$key->product_url).'">Xem thêm <i class="fa fa-fw fa-hand-o-right"></i></a>
                                                        <br>
                                                                <i class="fa fa-fw fa-eye"></i>'.$key->product_view.' | <i class="fa fa-fw fa-shopping-cart"></i>'.$key->product_buy.'
                                                    </div>
                                                    <h3 class="text-center"><a href="'.site_url('chi-tiet/'.$key->product_url).'">'.$key->product_title.'</a></h3>
                                                    <h4 class="text-center">'.$key->product_price.' USD</h4>
                                                    <div>
                                                        <div class="row">
                                                            <div class="col-sm-8 col-sm-offset-2">
                                                                <button class="btn btn-success center-block btn-add" productid = "'.$key->product_id.'">Thêm vào giỏ</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            ';
                            }
                        }
                    ?>
                </div>
                <div class="col-sm-12">
                    <hr>
                    <h2 class="sub-heading">Sản phẩm đề xuất</h2>
                    <div class="slider">
                        <div id="owl-product" class="owl-carousel owl-theme owl-product products">
                        <?php
                                $this->product_model->recommentProductByUser();
                            ?>
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
            <script src="<?php echo base_url();?>asset/js/frontend/cart.js"></script>
            <script>
            $(document).ready(function() {
                $("#owl-newfeeds").owlCarousel({
                    items: 1,
                    itemsDesktopSmall: [980, 1],
                    itemsDesktop: [1199, 1],
                    slideSpeed: 300,
                    paginationSpeed: 400,
                    autoPlay: 3000
                });
                var owl_news = $("#owl-newfeeds").data('owlCarousel');
                $('.owl-next-new').click(function(event) {
                    owl_news.next();
                });
                $('.owl-prev-new').click(function(event) {
                    owl_news.prev();
                });
                $(".owl-product").owlCarousel({
                    items: 4,
                    itemsDesktopSmall: [980, 3],
                    itemsDesktop: [1199, 4],
                    navigation: true, // Show next and prev buttons
                    slideSpeed: 300,
                    paginationSpeed: 400,
                    navigationText: [
                        "<i class='fa fa-2x fa-chevron-left'></i>",
                        "<i class='fa fa-2x fa-chevron-right'></i>"
                    ],
                    autoPlay: 2000,
                    stopOnHover: true
                });
                $("#owl-demo").owlCarousel({
                    navigation: true, // Show next and prev buttons
                    slideSpeed: 300,
                    paginationSpeed: 400,
                    singleItem: true,
                    navigationText: [
                        "<i class='fa fa-2x fa-chevron-left'></i>",
                        "<i class='fa fa-2x fa-chevron-right'></i>"
                    ],
                    autoPlay: 3000
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
