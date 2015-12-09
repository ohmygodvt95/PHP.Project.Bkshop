<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo COMPANY;?> - <?php echo $product->product_title;?> - <?php echo $sub_category->category_title;?> - <?php echo $category->category_title;?>">
    <META NAME="keywords" CONTENT="<?php echo COMPANY;?> - <?php echo $product->product_title;?> - <?php echo $sub_category->category_title;?> - <?php echo $category->category_title;?>">
    <meta name="Author" content="LengKeng, E-mail: ohmygodvt95@gmail.com">
    <meta name="copyright" content="Copyright   &copy <?php echo date('Y');?> by LengKeng">
    <meta itemprop="name" content="<?php echo COMPANY;?> - <?php echo $product->product_title;?>">
    <meta itemprop="description" content="<?php echo COMPANY;?> - <?php echo $product->product_title;?> - <?php echo $sub_category->category_title;?> - <?php echo $category->category_title;?>">
    <meta itemprop="image" content="<?php echo $product->product_thumb;?>">
    <meta property="og:title" content="<?php echo COMPANY;?> - <?php echo $product->product_title;?>" />
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo site_url("chi-tiet/".$product->product_url);?>" />
    <meta property="og:image" content="<?php echo $product->product_thumb;?>" />
    <meta property="og:description" content="<?php echo COMPANY;?> - <?php echo $product->product_title;?> - <?php echo $sub_category->category_title;?> - <?php echo $category->category_title;?>" />
    <meta property="og:site_name" content="<?php echo COMPANY;?>" />
    <meta property="fb:admins" content="ohmygodvt95" />
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url();?>asset/images/favicon.png" />
    <link rel="canonical" href="<?php echo site_url("chi-tiet/".$product->product_url);?>"/>
    <link rel="next" href="<?php echo site_url("san-pham/".$category->category_url); ?>"/>
    <link rel="prev" href="<?php echo site_url("san-pham/".$category->category_url."/".$sub_category->category_url); ?>" />

    <title><?php echo $product->product_title ; ?> - <?php echo COMPANY;?> - <?php echo SOLOGAN;?></title>
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
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    <?php $this->load->view('module/frontend/header');?>
        <!-- Preloader End -->
        <div class="bread">
            <div class="container">
                <ol class="breadcrumb">
                    <li>
                        <a href="<?php echo site_url();?>"><?php echo COMPANY;?> - Home</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url("/san-pham/"."".$category->category_url); ?>"><?php echo $category->category_title; ?></a>
                    </li>
                    <li>
                        <a href="<?php echo site_url("/san-pham/".$category->category_url."/$sub_category->category_url"); ?>"><?php echo $sub_category->category_title; ?></a>
                    </li>
                    <li class="active">
                        <?php echo $product->product_title ; ?>
                    </li>
                </ol>
            </div>
        </div>
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="slider">
                            <div id="owl-demo" class="owl-carousel owl-theme">

                                <?php
                                    echo '<div class="item"><img src="'.$product->product_thumb.'" alt="'.$product->product_title.'"></div>';
                                    $image = explode("|", $product->product_image);
                                    foreach ($image as $key) {
                                        if(strlen($key) > 10){
                                            echo '<div class="item"><img src="'.$key.'" alt="'.$product->product_title.'"></div>';
                                        }
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                    <?php
                        $view = $product->product_view + 1;
                        $this->db->query("UPDATE \"product\" SET product_view = $view WHERE product_id = $product->product_id");
                     ?>
                    <div class="col-sm-6 details">
                        <h2 class="product-name"><?php echo $product->product_title ; ?></h2>
                        <p><small> <i class="fa fa-fw fa-eye"></i><i title="lượt xem"><?php echo $product->product_view;?></i> lượt xem</small>
                        <div class="fb-like" data-href="<?php echo site_url('chi-tiet/'.$product->product_url);?>"></div>
                        </p>
                        <h3 class="text-danger" style="font-weight: bolder"><small>$</small> <?php echo $product->product_price ; ?></h3>
                        <hr>
                        <div class="col-sm-12 status">
                            <h4><span>Tình trạng: </span><?php
                            if($product->product_status == 0){
                                echo "Còn hàng";
                            }
                            else if($product->product_status == 2){
                                echo "Hết hàng";
                            }
                            else if($product->product_status == 1){
                                echo "Ngừng cung cấp";
                            }
                             ?></h4>
                            <h4><span>Nhà sản xuất: </span><?php echo $sub_category->category_title; ?></h4>
                        </div>
                        <div class="col-sm-12">
                            <hr>
                            <h4 class="heading">Khuyến mãi</h4>
                            <div class="alert alert-info" role="alert">
                                <p><?php echo $product->product_deals ; ?></p>
                            </div>
                        </div>
                        <div class="col-sm-12 <?php if($product->product_status != 0) echo 'hidden';?>">
                            <hr>
                            <h4 class="heading">Đặt hàng</h4>
                            <div class="col-sm-6">
                                <div class="input-group">
                                    <div class="input-group-addon">Số lượng</div>
                                    <input type="number" name="quantity" min="1" max="10" value="1" class="form-control qty">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <button class="btn btn-warning btn-block btn-add-product" productid="<?php echo $product->product_id;?>">THÊM VÀO GIỎ</button>
                                <button class="btn btn-primary btn-block btn-buy" productid="<?php echo $product->product_id;?>">MUA NGAY</button>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <hr>
                            <h4 class="heading">Chính sách</h4>
                            <p><i class="fa fa-fw fa-check-square-o"></i> Bộ sản phẩm chính hãng. <a href="#">Tìm hiểu</a></p>
                            <p><i class="fa fa-fw fa-check-square-o"></i> Chính sách hậu mãi. <a href="#">Tìm hiểu</a></p>
                            <p><i class="fa fa-fw fa-check-square-o"></i> Chính sách giao hàng. <a href="#">Tìm hiểu</a></p>
                            <hr>
                            <h4 class="heading">Liên hệ ngay:</h4>
                            <ul>
                                <li>Hotline : (+84)977 903 921 | (+84)240 3832 580</li>
                                <li>E-mail  : sales.bkshop@gmail.com</li>
                                <li>Facebook: <a href="">http://fb.com/bkshop.vn</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <hr>
                    <div class="col-sm-8">
                        <h2 class="sub-heading">Thông tin thêm</h2>
                        <!-- tabs left -->
                        <div class="tabbable tabs-left">
                            <ul class="nav nav-tabs">
                                <li  class="active"><a href="#a" data-toggle="tab"><i class="fa fa-fw fa-info"></i><span> Chi tiết</span></a></li>
                                <li><a href="#b" data-toggle="tab"><i class="fa fa-fw fa-rocket"></i><span> Giới thiệu</span></a></li>
                                <li><a href="#c" data-toggle="tab"><i class="fa fa-fw fa-wechat"></i><span> Bình luận</span></a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="a">
                                    <?php echo $product->product_details ; ?>
                                </div>
                                <div class="tab-pane" id="b">
                                    <?php echo $product->product_content ; ?>
                                </div>
                                <div class="tab-pane" id="c"><div class="fb-comments" data-href="<?php echo site_url('chi-tiet/'.$product->product_url);?>" data-numposts="5"></div></div>
                            </div>
                        </div>
                        <!-- /tabs -->
                    </div>
                    <div class="col-sm-4">
                        <div class="newfeeds">
                            <h2 class="sub-heading">LATEST NEWS<span class="pull-right"><i class='owl-nav owl-prev-new fa  fa-chevron-left'></i><i class='owl-nav owl-next-new fa  fa-chevron-right'></i></span></h2>
                            <div id="owl-newfeeds" class="owl-carousel owl-theme">
                                <div class="item">
                                    <a href="#">
                                        <h4>Cool Style! 1</h4>
                                        <img src="http://newsmartwave.net/html/venedor/green/images/blog/post1-small.jpg" alt="img" class="img-responsive">
                                    </a>
                                    <p>
                                        Lorem ipsum Culpa deserunt Ut elit in est reprehenderit mollit ullamco reprehenderit adipisicing incididunt Excepteur consequat nulla est magna minim aliquip.
                                    </p>
                                    <h5 class="text-right"><a class="pull-left readmore" href="#">Read more..</a><i>23/04/1995</i></h5>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <h4>Cool Style! 2</h4>
                                        <img src="http://newsmartwave.net/html/venedor/green/images/blog/post1-small.jpg" alt="img" class="img-responsive">
                                    </a>
                                    <p>
                                        Lorem ipsum Culpa deserunt Ut elit in est reprehenderit mollit ullamco reprehenderit adipisicing incididunt Excepteur consequat nulla est magna minim aliquip.
                                    </p>
                                    <h5 class="text-right"><a class="pull-left readmore" href="#">Read more..</a><i>23/04/1995</i></h5>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <h4>Cool Style! 3</h4>
                                        <img src="http://newsmartwave.net/html/venedor/green/images/blog/post1-small.jpg" alt="img" class="img-responsive">
                                    </a>
                                    <p>
                                        Lorem ipsum Culpa deserunt Ut elit in est reprehenderit mollit ullamco reprehenderit adipisicing incididunt Excepteur consequat nulla est magna minim aliquip.
                                    </p>
                                    <h5 class="text-right"><a class="pull-left readmore" href="#">Read more..</a><i>23/04/1995</i></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <hr>
                    <h2 class="sub-heading">Sản phẩm đề xuất</h2>
                    <div class="slider">
                        <div id="owl-product" class="owl-carousel owl-theme owl-product products">
                            <?php
                                $this->product_model->recommentProductByPrice($product->product_price, 200);
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
