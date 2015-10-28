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
        <title>Details</title>
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
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/product/details.css">
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
        <div class="bread">
            <div class="container">
                <ol class="breadcrumb">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">Mobile</a>
                    </li>
                    <li>
                        <a href="#">LG</a>
                    </li>
                    <li class="active">Current</li>
                </ol>
            </div>
        </div>
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="slider">
                            <div id="owl-demo" class="owl-carousel owl-theme">
                                <div class="item"><img src="http://img.trananh.vn/trananh/2015/08/11/dien-thoai-samsung-galaxy-a8-vang(4).jpg" alt="The Last of us"></div>
                                <div class="item"><img src="http://img.trananh.vn/trananh/2015/08/11/dien-thoai-samsung-galaxy-a8-vang(1).jpg" alt="GTA V"></div>
                                <div class="item"><img src="http://img.trananh.vn/trananh/2015/08/11/dien-thoai-samsung-galaxy-a8-vang(4).jpg" alt="Mirror Edge"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 details">
                        <h2 class="product-name">Samsung Galaxy Ace 2</h2>
                        <hr>
                        <div class="col-sm-12 status">
                            <h4><span>Status: </span>In Stock</h4>
                            <h4><span>Brand: </span>Apple</h4>
                        </div>
                        <div class="col-sm-12">
                            <hr>
                            <h4 class="heading">Deals</h4>
                            <div class="alert alert-info" role="alert">
                                <p>Lorem ipsum Dolore ad aute sed id.
                                <br>Lorem ipsum Anim pariatur amet mollit.</p>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <hr>
                            <h4 class="heading">Order</h4>
                            <div class="col-sm-6">
                                <div class="input-group">
                                    <div class="input-group-addon">Quantity</div>
                                    <input type="number" name="quantity" min="1" max="10" value="1" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <button class="btn btn-warning btn-block">ADD TO CART</button>
                                <button class="btn btn-primary btn-block">BUY NOW</button>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <hr>
                            <h4 class="heading">Policies</h4>
                            <p><i class="fa fa-fw fa-check-square-o"></i> Bộ sản phẩm. <a href="#">Tìm hiểu</a></p>
                            <p><i class="fa fa-fw fa-check-square-o"></i> Chính sách hậu mãi. <a href="#">Tìm hiểu</a></p>
                            <p><i class="fa fa-fw fa-check-square-o"></i> Chính sách giao hàng. <a href="#">Tìm hiểu</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <hr>
                    <div class="col-sm-8">
                        <h2 class="sub-heading">More information</h2>
                        <!-- tabs left -->
                        <div class="tabbable tabs-left">
                            <ul class="nav nav-tabs">
                                <li><a href="#a" data-toggle="tab"><i class="fa fa-fw fa-info"></i><span>Details</span></a></li>
                                <li class="active"><a href="#b" data-toggle="tab"><i class="fa fa-fw fa-rocket"></i><span>Description</span></a></li>
                                <li><a href="#c" data-toggle="tab"><i class="fa fa-fw fa-video-camera"></i><span>Video</span></a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="a">Lorem ipsum Officia minim aute sint commodo velit in minim pariatur quis minim ea tempor est irure commodo anim exercitation dolor ex reprehenderit in nisi cupidatat id exercitation voluptate sint anim id qui aliquip qui ut eiusmod dolor Excepteur officia Duis velit nulla in nostrud deserunt nulla cillum eiusmod dolor exercitation in ad dolor pariatur cillum incididunt proident adipisicing velit officia ad quis esse fugiat aliqua quis mollit Duis pariatur Ut reprehenderit culpa sunt consequat consequat aute reprehenderit in qui labore esse esse ut commodo id cupidatat labore qui labore irure culpa eu nostrud veniam in dolore fugiat est sed nostrud labore non pariatur dolor consectetur laboris cupidatat consectetur dolor et culpa ea minim fugiat nisi voluptate Duis do anim ut nisi Excepteur tempor in occaecat ad ea pariatur et fugiat dolore laborum voluptate dolore dolor proident id est dolore laborum deserunt voluptate veniam in exercitation esse occaecat eu amet anim sint ex ut nostrud anim enim reprehenderit aliqua eu qui elit aliquip sed minim sit cupidatat laboris Duis irure Ut nisi officia amet esse in proident elit tempor ex ea laborum qui et sit eu reprehenderit ullamco elit in eu velit reprehenderit dolore fugiat cillum pariatur anim sint minim ut adipisicing dolor laboris non officia sit magna exercitation nostrud est sunt culpa irure fugiat commodo veniam elit laboris cupidatat do mollit et nostrud proident cillum sit qui pariatur eiusmod ut ut laborum aute commodo.Lorem ipsum dolor sit amet, charetra varius quam sit amet vulputate.
                                Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero.</div>
                                <div class="tab-pane" id="b">Secondo sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan.
                                Aliquam in felis sit amet augue.</div>
                                <div class="tab-pane" id="c">Thirdamuno, ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
                                Quisque mauris augue, molestie tincidunt condimentum vitae. </div>
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
                    <h2 class="sub-heading">Recommend products</h2>
                    <div class="slider">
                        <div id="owl-product" class="owl-carousel owl-theme owl-product products">
                            <div class="col-sm-12">
                                <div class="box">
                                    <img class="img-responsive center-block" src="https://www.thegioididong.com/images/44/72316/hp-stream-13-533-400-400x400.png" alt=""/>
                                    <div class="info">
                                        <h3>Thông tin</h3>
                                        <p>Màn hình:   fullHD</p>
                                        <p>H Đ H:   Android 4.4.5</p>
                                        <p>Ram:   2GB</p>
                                        <p>CPU:   HD</p>
                                        <a href="<?php echo site_url('product/details');?>">Xem thêm <i class="fa fa-fw fa-hand-o-right"></i></a>
                                    </div>
                                    <h3 class="text-center"><a href="">Sony Xperia M4 Aqua Dual</a></h3>
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
                            <div class="col-sm-12">
                                <div class="box">
                                    <img class="img-responsive center-block" src="https://www.thegioididong.com/images/42/71990/wiko-ridge-533a-1-400x533.png" alt=""/>
                                    <div class="info">
                                        <h3>Thông tin</h3>
                                        <p>Màn hình:   fullHD</p>
                                        <p>H Đ H:   Android 4.4.5</p>
                                        <p>Ram:   2GB</p>
                                        <p>CPU:   HD</p>
                                        <a href="<?php echo site_url('product/details');?>">Xem thêm <i class="fa fa-fw fa-hand-o-right"></i></a>
                                    </div>
                                    <h3 class="text-center"><a href="">Sony Xperia M4 Aqua Dual</a></h3>
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
                            <div class="col-sm-12">
                                <div class="box">
                                    <img class="img-responsive center-block" src="https://www.thegioididong.com/images/42/71990/wiko-ridge-533a-1-400x533.png" alt=""/>
                                    <div class="info">
                                        <h3>Thông tin</h3>
                                        <p>Màn hình:   fullHD</p>
                                        <p>H Đ H:   Android 4.4.5</p>
                                        <p>Ram:   2GB</p>
                                        <p>CPU:   HD</p>
                                        <a href="<?php echo site_url('product/details');?>">Xem thêm <i class="fa fa-fw fa-hand-o-right"></i></a>
                                    </div>
                                    <h3 class="text-center"><a href="">Sony Xperia M4 Aqua Dual</a></h3>
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
                            <div class="col-sm-12">
                                <div class="box">
                                    <img class="img-responsive center-block" src="https://www.thegioididong.com/images/42/71990/wiko-ridge-533a-1-400x533.png" alt=""/>
                                    <div class="info">
                                        <h3>Thông tin</h3>
                                        <p>Màn hình:   fullHD</p>
                                        <p>H Đ H:   Android 4.4.5</p>
                                        <p>Ram:   2GB</p>
                                        <p>CPU:   HD</p>
                                        <a href="<?php echo site_url('product/details');?>">Xem thêm <i class="fa fa-fw fa-hand-o-right"></i></a>
                                    </div>
                                    <h3 class="text-center"><a href="">Sony Xperia M4 Aqua Dual</a></h3>
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
                            <div class="col-sm-12">
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
                            <div class="col-sm-12">
                                <div class="box">
                                    <img class="img-responsive center-block" src="https://www.thegioididong.com/images/42/71089/microsoft-lumia-640-game-400x533-400x533.png" alt=""/>
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
        $(".owl-product").owlCarousel({
        items : 4,
        itemsDesktopSmall : [980,3],
        itemsDesktop : [1199,4],
        navigation : true, // Show next and prev buttons
        slideSpeed : 300,
        paginationSpeed : 400,
        navigationText: [
        "<i class='fa fa-2x fa-chevron-left'></i>",
        "<i class='fa fa-2x fa-chevron-right'></i>"
        ],
        autoPlay : 2000,
        stopOnHover: true
        });
        });
         $("#owl-demo").owlCarousel({
        navigation : true, // Show next and prev buttons
        slideSpeed : 300,
        paginationSpeed : 400,
        singleItem:true,
        navigationText: [
        "<i class='fa fa-2x fa-chevron-left'></i>",
        "<i class='fa fa-2x fa-chevron-right'></i>"
        ],
        autoPlay : 3000
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