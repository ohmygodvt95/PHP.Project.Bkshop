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
        <title>BKShop - Trang chủ - Vui là mua</title>
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
        <!-- Load Customize Css-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/home/home-index.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/home/home-media.css">
        <!-- Load customize fonts -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans&subset=latin,vietnamese' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700,500|Raleway:400,500' rel='stylesheet' type='text/css'>
        <!-- Style -->
        <style>
        </style>
    </head>
    <body>
        <!-- Preloader -->
        <div id="xloader-wrapper">
            <div id="xloader"></div>
        </div>
        <?php $this->load->view('module/frontend/header');?>
        <!-- Preloader End -->
        <div class="slider">
            <div id="owl-demo" class="owl-carousel owl-theme">
                <div class="item"><img src="https://cdn3.tgdd.vn/qcao/31_08_2015_18_30_19_TGDd-T9-ThangSamsung-800-300.jpg" alt="The Last of us"></div>
                <div class="item"><img src="https://cdn.tgdd.vn/qcao/05_09_2015_08_02_13_TGDD-IPHONE-800-300.jpg" alt="GTA V"></div>
                <div class="item"><img src="https://cdn4.tgdd.vn/qcao/06_09_2015_15_53_45_TGDd-Lai-Yollo-800-300.jpg" alt="Mirror Edge"></div>
            </div>
        </div>
        <div class="content">
            <div class="container">
                <div class="products col-sm-9">
                    <h1 class="heading">Our Products</h1>
                    <h3 class="intro">Save your money and time with our store. Here's the best part of our impressive assortment.</h3>
                    <hr>
                    <?php
                    $total = 0;
                        foreach ($category as $item) {
                            // chon sp HOT
                            echo '<div class="row">';
                            echo '  <h2><a href="'.site_url('san-pham/'.$item->category_url).'" title="Xem tất cả sản phẩm '.$item->category_title.'">'.$item->category_title.'</a></h2>';
                            echo '  <div class="col-sm-12">
                                        <h4 class="sub-heading">Best seller</h4>
                                        <div class="slider">
                                            <div id="owl-product" class="owl-product owl-carousel owl-theme">';

                            $sql = "SELECT product_id, product_url, product_title, product_thumb, product_price, product_desc, product_buy 
                                    FROM product 
                                    WHERE product_status = 0 AND category_id IN(SELECT category_id FROM category WHERE category_prev = $item->category_id) ORDER BY product_buy DESC LIMIT ".MAX;
                            $result = $this->db->query($sql)->result();
                            foreach ($result as $key) {
                                $total++;
                                       echo '<div class="col-sm-12">
                                                <div class="box">
                                                    <img class="img-responsive center-block" src="'.$key->product_thumb.'" alt="'.$key->product_title.'"/>
                                                    <div class="info">
                                                        <h3>Thông tin</h3>
                                                        '.$key->product_desc.'<br>
                                                        <a href="'.site_url('chi-tiet/'.$key->product_url).'" title="Xem chi tiết sản phẩm">Xem thêm <i class="fa fa-fw fa-hand-o-right"></i></a>
                                                    </div>
                                                    <h3 class="text-center"><a href="'.site_url('chi-tiet/'.$key->product_url).'" title="Xem chi tiết sản phẩm">'.$key->product_title.'</a></h3>
                                                    <h4 class="text-center" >'.$key->product_price.' USD</h4>
                                                    <div>
                                                        <div class="row">
                                                            <div class="col-sm-8 col-sm-offset-2">
                                                                <button class="btn btn-success center-block btn-add" productid = "'.$key->product_id.'" title="Add to cart">Add to cart</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            ';
                            }
                            echo '          </div>
                                        </div>
                                    </div>';
                            // sp moi
                                    $sql = "SELECT product_id, product_url, product_title, product_thumb, product_price, product_desc, product_time
                                            FROM product 
                                            WHERE product_status = 0 AND category_id IN(SELECT category_id FROM category WHERE category_prev = $item->category_id) AND product_id 
                                            NOT IN(
                                                SELECT product_id
                                                FROM product 
                                                WHERE product_status = 0 AND category_id IN(SELECT category_id FROM category WHERE category_prev = $item->category_id) ORDER BY product_buy DESC LIMIT ".MAX."
                                                )
                                            ORDER BY product_time DESC LIMIT ".MAX;
                                    $result = $this->db->query($sql)->result();
                                    echo '
                                            <div class="col-sm-12">
                                            <h4 class="sub-heading">New products</h4>';
                                            foreach ($result as $key) {
                                                $total++;
                                               echo '<div class="col-sm-4">
                                                        <div class="box">
                                                            <img class="img-responsive center-block" src="'.$key->product_thumb.'" alt=""/>
                                                            <div class="info">
                                                                <h3>Thông tin</h3>
                                                                '.$key->product_desc.'
                                                                <br>
                                                                <a href="'.site_url('chi-tiet/'.$key->product_url).'">Xem thêm <i class="fa fa-fw fa-hand-o-right"></i></a>
                                                            </div>
                                                            <h3 class="text-center"><a href="'.site_url('chi-tiet/'.$key->product_url).'">'.$key->product_title.'</a></h3>
                                                            <h4 class="text-center">'.$key->product_price.' USD</h4>
                                                            <div>
                                                                <div class="row">
                                                                    <div class="col-sm-8 col-sm-offset-2">
                                                                        <button class="btn btn-success center-block btn-add" productid = "'.$key->product_id.'">Add to cart</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    ';
                                            }
                            echo '</div>';
                            $sql = "SELECT product_id
                                    FROM product 
                                    WHERE product_status = 0 AND category_id IN(SELECT category_id FROM category WHERE category_prev = $item->category_id)";
                                    $total = $this->db->query($sql)->num_rows() - $total;
                            if($total > 0)echo ' <div class="col-sm-12">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <a title="'.$item->category_title.'" href="'.site_url("san-pham/".$item->category_url).'" class="btn btn-warning btn-block btn-lg btn-more">Xem thêm '.$total.' '.strtolower($item->category_title).'</a>
                                        </div>
                                    </div>';
                                    else {
                                        echo '<div class="col-sm-12">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <a title="'.$item->category_title.'" href="'.site_url("san-pham/".$item->category_url).'" class="btn btn-warning btn-block btn-lg btn-more">Xem tất cả '.strtolower($item->category_title).'</a>
                                        </div>
                                    </div>';
                                    }
                            echo '</div><hr>
                            ';
                        }
                    ?>
                </div>
                <div class="right-bar col-sm-3">
                    <div class="panel panel-default newslatter" style="z-index: 10000">
                        <div class="panel-body">
                            <h3 class="text-center">BE THE FIRST TO KNOW</h3>
                            <p class="text-center">Get all the latest information on Events, Sales and Offers. Sign up for the BKAshop newsletter today.</p>
                            <input type="text" class="form-control" placeholder="Enter your email address">
                            <hr>
                            <button class="btn btn-success btn-block">Submit</button>
                        </div>
                    </div>
                    <div class="testimonials">
                        <h3>TESTIMONIALS <span class="pull-right"><i class='owl-nav owl-prev fa  fa-chevron-left'></i><i class='owl-nav owl-next fa  fa-chevron-right'></i></span></h3>
                        <div id="owl-testimonials" class="owl-carousel owl-theme">
                            <div class="item">
                                <h4>Cool Style! 1</h4>
                                <p><i class="fa fa-fw fa-quote-left"></i>
                                    Lorem ipsum Culpa deserunt Ut elit in est reprehenderit mollit ullamco reprehenderit adipisicing incididunt Excepteur consequat nulla est magna minim aliquip.
                                    <i class="fa fa-fw fa-quote-right"></i>
                                </p>
                                <h5 class="text-right"><i>John Doe</i></h5>
                            </div>
                            <div class="item">
                                <h4>Cool Style! 2</h4>
                                <p><i class="fa fa-fw fa-quote-left"></i>
                                    Lorem ipsum Culpa deserunt Ut elit in est reprehenderit mollit ullamco reprehenderit adipisicing incididunt Excepteur consequat nulla est magna minim aliquip.
                                    <i class="fa fa-fw fa-quote-right"></i>
                                </p>
                                <h5 class="text-right"><i>John Doe</i></h5>
                            </div>
                            <div class="item">
                                <h4>Cool Style! 3</h4>
                                <p><i class="fa fa-fw fa-quote-left"></i>
                                    Lorem ipsum Culpa deserunt Ut elit in est reprehenderit mollit ullamco reprehenderit adipisicing incididunt Excepteur consequat nulla est magna minim aliquip.
                                    <i class="fa fa-fw fa-quote-right"></i>
                                </p>
                                <h5 class="text-right"><i>John Doe</i></h5>
                            </div>
                            <div class="item">
                                <h4>Cool Style! 4</h4>
                                <p><i class="fa fa-fw fa-quote-left"></i>
                                    Lorem ipsum Culpa deserunt Ut elit in est reprehenderit mollit ullamco reprehenderit adipisicing incididunt Excepteur consequat nulla est magna minim aliquip.
                                    <i class="fa fa-fw fa-quote-right"></i>
                                </p>
                                <h5 class="text-right"><i>John Doe</i></h5>
                            </div>
                        </div>
                    </div>
                    <div class="newfeeds">
                        <h3>LATEST NEWS<span class="pull-right"><i class='owl-nav owl-prev-new fa  fa-chevron-left'></i><i class='owl-nav owl-next-new fa  fa-chevron-right'></i></span></h3>
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
                                <p>Lorem ipsum Reprehenderit ut dolor proident esse cillum consectetur et ut sed aliquip ullamco exercitation ad sed id dolor exercitation id est ut quis non sint pariatur sint do ea in eu officia laborum nisi.
                                    Lorem ipsum Culpa deserunt Ut elit in est reprehenderit mollit ullamco reprehenderit adipisicing incididunt Excepteur consequat nulla est magna minim aliquip.
                                </p>
                                <h5 class="text-right"><a class="pull-left readmore" href="#">Read more..</a><i>23/04/1995</i></h5>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <h4>Cool Style! 3</h4>
                                    <img src="http://newsmartwave.net/html/venedor/green/images/blog/post1-small.jpg" alt="img" class="img-responsive">
                                </a>
                                <p>Lorem ipsum Dolore id esse magna nulla incididunt nisi ea eu Ut do anim nulla aliquip    pariatur officia.
                                    Lorem ipsum Culpa deserunt Ut elit in est reprehenderit mollit ullamco reprehenderit adipisicing incididunt Excepteur consequat nulla est magna minim aliquip.
                                </p>
                                <h5 class="text-right"><a class="pull-left readmore" href="#">Read more..</a><i>23/04/1995</i></h5>
                            </div>
                        </div>
                    </div>
                    <div class="ads">
                        <h3>Advertising<span class="pull-right"><i class='owl-nav owl-prev-new fa  fa-chevron-left'></i><i class='owl-nav owl-next-new fa  fa-chevron-right'></i></span></h3>
                        <div class="ads-box" style="background-image: url('<?php echo base_url("asset/images/logo/ads.png");?>'); background-repeat: no-repeat; background-position: center center;"></div>
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
        jQuery(function($) {
            $(document).ready(function() {
                //enabling stickUp on the '.navbar-wrapper' class
                $("#owl-demo").owlCarousel({
                    navigation: true, // Show next and prev buttons
                    slideSpeed: 300,
                    paginationSpeed: 400,
                    singleItem: true,
                    navigationText: [
                        "<i class='fa fa-2x fa-chevron-left'></i>",
                        "<i class='fa fa-2x fa-chevron-right'></i>"
                    ],
                    autoPlay: 4000
                });
                $(".owl-product").owlCarousel({
                    items: 3,
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
                $("#owl-testimonials").owlCarousel({
                    items: 1,
                    itemsDesktopSmall: [980, 1],
                    itemsDesktop: [1199, 1],
                    slideSpeed: 300,
                    paginationSpeed: 400,
                    autoPlay: 4000,
                    autoHeight: true
                });
                var owl = $("#owl-testimonials").data('owlCarousel');
                $('.owl-next').click(function(event) {
                    owl.next();
                });
                $('.owl-prev').click(function(event) {
                    owl.prev();
                });
                $("#owl-newfeeds").owlCarousel({
                    items: 1,
                    itemsDesktopSmall: [980, 1],
                    itemsDesktop: [1199, 1],
                    slideSpeed: 300,
                    paginationSpeed: 400,
                    autoPlay: 3000,
                    autoHeight: true
                });
                var owl_news = $("#owl-newfeeds").data('owlCarousel');
                $('.owl-next-new').click(function(event) {
                    owl_news.next();
                });
                $('.owl-prev-new').click(function(event) {
                    owl_news.prev();
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