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
        <title><?php echo $category->category_title. " - " . $this_category->category_title;?> - BKAshop</title>
        <!-- Load CSS-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/reset.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/style.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/owl.carousel.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/owl.theme.css">
        <!-- Load module -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/frontend/header.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/frontend/footer.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/frontend/media.css">
        <!-- Load Customize Css-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/product/product-index.css">
        <!-- Load customize fonts -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700,500|Raleway:400,500' rel='stylesheet' type='text/css'>
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
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="slider">
                            <div id="owl-demo" class="owl-carousel owl-theme">
                                <div class="item"><img src="https://cdn3.tgdd.vn/qcao/31_08_2015_18_30_19_TGDd-T9-ThangSamsung-800-300.jpg" alt="The Last of us"></div>
                                <div class="item"><img src="https://cdn.tgdd.vn/qcao/05_09_2015_08_02_13_TGDD-IPHONE-800-300.jpg" alt="GTA V"></div>
                                <div class="item"><img src="https://cdn4.tgdd.vn/qcao/06_09_2015_15_53_45_TGDd-Lai-Yollo-800-300.jpg" alt="Mirror Edge"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
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
                <div class="row">
                    <div class="col-sm-12">
                        <h1 class="heading"><?php echo $category->category_title;?></h1>
                        <div class="row" style="padding-top:30px">
                            <div class="col-sm-12 text-center">
                                <div class="list-group list-group-horizontal">
                                <?php
                                    if($this_sub_category == 'all') 
                                        echo '<a href="'.site_url("san-pham/".$category->category_url."/all").'" class="list-group-item active">All</a>';
                                    else 
                                        echo '<a href="'.site_url("san-pham/".$category->category_url."/all").'" class="list-group-item ">All</a>';
                                    foreach ($sub_category as $item) {
                                        if($item->category_title == $this_category->category_title){
                                            echo '<a class="list-group-item active">'.$item->category_title.'</a>';
                                        }
                                        else{
                                            echo '<a href="'.site_url("san-pham/".$category->category_url."/".$item->category_url).'" class="list-group-item">'.$item->category_title.'</a>';
                                        }
                                    }
                                ?>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3 sort">
                                <div class="input-group">
                                    <div class="input-group-addon">Sort by</div>
                                    <select name="" id="" class="form-control">
                                        <option value="">Name</option>
                                        <option value="">Price</option>
                                        <option value="">Views</option>
                                        <option value="">Release date</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3 sort">
                                <div class="input-group">
                                    <div class="input-group-addon">Sort type</div>
                                    <select name="" id="" class="form-control">
                                        <option value="ASC">ASC</option>
                                        <option value="DESC">DESC</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <ul class="pagination pull-right">
                                    <li><a href="#">&laquo;</a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">&raquo;</a></li>
                                </ul>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="col-sm-12 products">
                        <div class="col-sm-3">
                            <div class="box">
                                <img class="img-responsive center-block" src="https://www.thegioididong.com/images/42/71542/oppo-neo-5-400x533.png" alt=""/>
                                <div class="info">
                                    <h3>Thông tin</h3>
                                    <p>Màn hình:   fullHD</p>
                                    <p>H Đ H:   Android 4.4.5</p>
                                    <p>Ram:   2GB</p>
                                    <p>CPU:   HD</p>
                                    <a href="<?php echo site_url('product/details');?>">Xem thêm <i class="fa fa-fw fa-hand-o-right"></i></a>
                                </div>
                                <h3 class="text-center"><a href="">LG optimus G E973</a></h3>
                                <h4 class="text-center">9,000,000 USD</h4>
                                <div>
                                    <div class="row">
                                        <div class="col-sm-8 col-sm-offset-2">
                                            <button class="btn btn-success center-block">Add to cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="box">
                                <img class="img-responsive center-block" src="https://www.thegioididong.com/images/42/71542/oppo-neo-5-400x533.png" alt=""/>
                                <div class="info">
                                    <h3>Thông tin</h3>
                                    <p>Màn hình:   fullHD</p>
                                    <p>H Đ H:   Android 4.4.5</p>
                                    <p>Ram:   2GB</p>
                                    <p>CPU:   HD</p>
                                    <a href="<?php echo site_url('product/details');?>">Xem thêm <i class="fa fa-fw fa-hand-o-right"></i></a>
                                </div>
                                <h3 class="text-center"><a href="">LG optimus G E973</a></h3>
                                <h4 class="text-center">9,000,000 USD</h4>
                                <div>
                                    <div class="row">
                                        <div class="col-sm-8 col-sm-offset-2">
                                            <button class="btn btn-success center-block">Add to cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="box">
                                <img class="img-responsive center-block" src="https://www.thegioididong.com/images/42/71542/oppo-neo-5-400x533.png" alt=""/>
                                <div class="info">
                                    <h3>Thông tin</h3>
                                    <p>Màn hình:   fullHD</p>
                                    <p>H Đ H:   Android 4.4.5</p>
                                    <p>Ram:   2GB</p>
                                    <p>CPU:   HD</p>
                                    <a href="<?php echo site_url('product/details');?>">Xem thêm <i class="fa fa-fw fa-hand-o-right"></i></a>
                                </div>
                                <h3 class="text-center"><a href="">LG optimus G E973</a></h3>
                                <h4 class="text-center">9,000,000 USD</h4>
                                <div>
                                    <div class="row">
                                        <div class="col-sm-8 col-sm-offset-2">
                                            <button class="btn btn-success center-block">Add to cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="box">
                                <img class="img-responsive center-block" src="https://www.thegioididong.com/images/42/71542/oppo-neo-5-400x533.png" alt=""/>
                                <div class="info">
                                    <h3>Thông tin</h3>
                                    <p>Màn hình:   fullHD</p>
                                    <p>H Đ H:   Android 4.4.5</p>
                                    <p>Ram:   2GB</p>
                                    <p>CPU:   HD</p>
                                    <a href="<?php echo site_url('product/details');?>">Xem thêm <i class="fa fa-fw fa-hand-o-right"></i></a>
                                </div>
                                <h3 class="text-center"><a href="">LG optimus G E973</a></h3>
                                <h4 class="text-center">9,000,000 USD</h4>
                                <div>
                                    <div class="row">
                                        <div class="col-sm-8 col-sm-offset-2">
                                            <button class="btn btn-success center-block">Add to cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="box">
                                <img class="img-responsive center-block" src="https://www.thegioididong.com/images/42/71542/oppo-neo-5-400x533.png" alt=""/>
                                <div class="info">
                                    <h3>Thông tin</h3>
                                    <p>Màn hình:   fullHD</p>
                                    <p>H Đ H:   Android 4.4.5</p>
                                    <p>Ram:   2GB</p>
                                    <p>CPU:   HD</p>
                                    <a href="<?php echo site_url('product/details');?>">Xem thêm <i class="fa fa-fw fa-hand-o-right"></i></a>
                                </div>
                                <h3 class="text-center"><a href="">LG optimus G E973</a></h3>
                                <h4 class="text-center">9,000,000 USD</h4>
                                <div>
                                    <div class="row">
                                        <div class="col-sm-8 col-sm-offset-2">
                                            <button class="btn btn-success center-block">Add to cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="box">
                                <img class="img-responsive center-block" src="https://www.thegioididong.com/images/42/71542/oppo-neo-5-400x533.png" alt=""/>
                                <div class="info">
                                    <h3>Thông tin</h3>
                                    <p>Màn hình:   fullHD</p>
                                    <p>H Đ H:   Android 4.4.5</p>
                                    <p>Ram:   2GB</p>
                                    <p>CPU:   HD</p>
                                    <a href="<?php echo site_url('product/details');?>">Xem thêm <i class="fa fa-fw fa-hand-o-right"></i></a>
                                </div>
                                <h3 class="text-center"><a href="">LG optimus G E973</a></h3>
                                <h4 class="text-center">9,000,000 USD</h4>
                                <div>
                                    <div class="row">
                                        <div class="col-sm-8 col-sm-offset-2">
                                            <button class="btn btn-success center-block">Add to cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="box">
                                <img class="img-responsive center-block" src="https://www.thegioididong.com/images/42/71542/oppo-neo-5-400x533.png" alt=""/>
                                <div class="info">
                                    <h3>Thông tin</h3>
                                    <p>Màn hình:   fullHD</p>
                                    <p>H Đ H:   Android 4.4.5</p>
                                    <p>Ram:   2GB</p>
                                    <p>CPU:   HD</p>
                                    <a href="<?php echo site_url('product/details');?>">Xem thêm <i class="fa fa-fw fa-hand-o-right"></i></a>
                                </div>
                                <h3 class="text-center"><a href="">LG optimus G E973</a></h3>
                                <h4 class="text-center">9,000,000 USD</h4>
                                <div>
                                    <div class="row">
                                        <div class="col-sm-8 col-sm-offset-2">
                                            <button class="btn btn-success center-block">Add to cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="box">
                                <img class="img-responsive center-block" src="https://www.thegioididong.com/images/42/71542/oppo-neo-5-400x533.png" alt=""/>
                                <div class="info">
                                    <h3>Thông tin</h3>
                                    <p>Màn hình:   fullHD</p>
                                    <p>H Đ H:   Android 4.4.5</p>
                                    <p>Ram:   2GB</p>
                                    <p>CPU:   HD</p>
                                    <a href="<?php echo site_url('product/details');?>">Xem thêm <i class="fa fa-fw fa-hand-o-right"></i></a>
                                </div>
                                <h3 class="text-center"><a href="">LG optimus G E973</a></h3>
                                <h4 class="text-center">9,000,000 USD</h4>
                                <div>
                                    <div class="row">
                                        <div class="col-sm-8 col-sm-offset-2">
                                            <button class="btn btn-success center-block">Add to cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="col-sm-12">
                            <hr>
                            <ul class="pagination pull-right">
                                <li><a href="#">&laquo;</a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">&raquo;</a></li>
                            </ul>
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
        <!-- Customize -->
        <script>
        $(document).ready(function() {
        $("#owl-demo").owlCarousel({
        navigation : true, // Show next and prev buttons
        slideSpeed : 300,
        paginationSpeed : 400,
        singleItem:true,
        navigationText: [
        "<i class='fa fa-2x fa-chevron-left'></i>",
        "<i class='fa fa-2x fa-chevron-right'></i>"
        ],
        autoPlay : 4000
        });
        $("#owl-newfeeds").owlCarousel({
        items : 1,
        itemsDesktopSmall : [980,1],
        itemsDesktop : [1199,1],
        slideSpeed : 300,
        paginationSpeed : 400,
        autoPlay : 3000
        });
        var owl_news = $("#owl-newfeeds").data('owlCarousel');
        $('.owl-next-new').click(function(event) {
        owl_news.next();
        });
        $('.owl-prev-new').click(function(event) {
        owl_news.prev();
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