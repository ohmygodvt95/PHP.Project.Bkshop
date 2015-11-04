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
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/sweetalert.min.css">
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
                        <div class="hidden">
                            <input type="text" class="base_url" value="<?php echo site_url(); ?>">
                            <input type="text" class="category" value="<?php echo $category->category_url; ?>">
                            <input type="text" class="sub_category" value="<?php echo $this_sub_category; ?>">
                            <input type="text" class="sort_by" value="<?php echo $sort_by; ?>">
                            <input type="text" class="sort_type" value="<?php echo $sort_type; ?>">
                            <input type="text" class="count" value="0">
                        </div>
                        <div class="row">
                            <div class="col-sm-3 sort">
                                <div class="input-group">
                                    <div class="input-group-addon">Sort by</div>
                                    <select name="" id="" class="form-control sort-by">
                                        <option value="time" <?php if($sort_by == 'time') echo 'selected="true"';?>>Release date</option>
                                        <option value="name" <?php if($sort_by == 'name') echo 'selected="true"';?>>Name</option>
                                        <option value="price" <?php if($sort_by == 'price') echo 'selected="true"';?>>Price</option>
                                        <option value="view" <?php if($sort_by == 'view') echo 'selected="true"';?>>Views</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3 sort">
                                <div class="input-group">
                                    <div class="input-group-addon">Sort type</div>
                                    <select name="" id="" class="form-control sort-type">
                                        <option value="asc" <?php if($sort_type == 'asc') echo 'selected="true"';?>>ASC</option>
                                        <option value="desc" <?php if($sort_type != 'asc') echo 'selected="true"';?>>DESC</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="col-sm-12 products">
                    </div>
                    <div class="col-sm-6 col-sm-offset-3">
                    <hr>
                        <div class="btn btn-block btn-success btn-more btn-lg">Kéo xuống để xem thêm sản phẩm</div>
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
            // load product
            var base_url = $('input.base_url').val();
            var category = $('input.category').val();
            var sub_category = $('input.sub_category').val();
            var sort_by = $('input.sort_by').val();
            var sort_type = $('input.sort_type').val();
            var stt = 0;

            function setCount(dem) {
                var count = parseInt($('input.count').val());
                count = count + dem;
                $('input.count').attr('value', count);
            }
            //alert(category + sub_category + sort_by + sort_type + count);
            function getProduct() {
                stt = 1;
                var count = parseInt($('input.count').val());
                $.post(base_url + "ajax/getproduct/" + category + "/" + sub_category + "/" + sort_by + "/" + sort_type + "/" + count, {
                        param1: 'value1'
                    },
                    function(data, textStatus, xhr) {
                        if (textStatus == "success") {
                            if (data == "FALSE") {
                                $('.btn-more').text("Không còn sản phẩm nào");
                                $('.btn-more').addClass('btn-warning')
                            }
                            var dem = 0;
                            var textArr = data.split("<!--split-->");
                            for (var i = 0; i < textArr.length; i++) {
                                var html = $(textArr[i]).hide();
                                //$('.products').append($(html));
                                $(html).appendTo('.products').show(150 + i * 150);
                                dem++;
                            }
                            if (dem > 0) dem--;
                            setCount(dem);
                            stt = 0;
                        }
                    });
            }

            function init() {
                getProduct();
            }

            init();

            $(window).scroll(function() {
                if ($(window).scrollTop() >= ($(document).height() - $(window).height() - 300) && stt == 0) {
                    getProduct();
                };
            });
            $('select.sort-by').change(function(event) {
                window.location = base_url + "san-pham/" + category + "/" + sub_category + "/" + $(this).val() + "/" + $('select.sort-type').val();
            });
            $('select.sort-type').change(function(event) {
                window.location = base_url + "san-pham/" + category + "/" + sub_category + "/" + $('select.sort-by').val() + "/" + $(this).val();
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