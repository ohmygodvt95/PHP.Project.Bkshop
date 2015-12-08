<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo COMPANY;?>">
    <meta name="author" content="LengKeng">
    <title>Chỉnh sửa sản phẩm - <?php echo COMPANY;?></title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>asset/css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url();?>asset/backend/css/metisMenu.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link type="text/css" href="<?php echo base_url();?>asset/backend/css/sb-admin-2.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/sweetalert.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/admincp/product/add.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css" media="screen">
        .img-thumb{
            margin-top: 10px;
            border-radius: 5px;
            padding: 7px;
            box-shadow: 0px 0px 5px gray;
        }
        .img{
            border-radius: 5px;
            padding: 5px;
            box-shadow: 0px 0px 5px gray;
            height: 80px;
            width: 80px;
            margin: 6px;
        }
    </style>
</head>

<body>
    <div id="wrapper">
        <?php $this->load->view('admincp/header');?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="page-header">Chỉnh sửa sản phẩm <small class="pull-right"><a  href="<?php echo site_url("admincp/product/add"); ?>"><i class="fa fa-fw fa-plus"></i>Thêm mới sản phẩm</a></small></h2>
                    <div class="row">
                        <div class="col-sm-7">
                            <h3>Tên sản phẩm:</h3>
                            <input type="text" class="form-control product_title" placeholder="Nhập tên sản phẩm" value="<?php echo $product->product_title;?>">
                            <hr>
                            <h4>Thuộc chuyên mục:</h4>
                            <select name="" id="" class="form-control category_id">
                                <?php
                                    $sql = "SELECT * FROM category WHERE category_level = 0 ORDER BY category_title ASC";
                                    $result = $this->db->query($sql)->result();
                                    foreach ($result as $item) {
                                        echo '<optgroup label="'.$item->category_title.'">
                                        ';

                                            $sql = "SELECT * FROM category WHERE category_level = 1 AND category_prev = $item->category_id ORDER BY category_title ASC";
                                            $r = $this->db->query($sql)->result();
                                            foreach ($r as $key) {
                                                if($product->category_id == $key->category_id)
                                                    echo "<option value='$key->category_id' selected>$key->category_title</option>";
                                                else echo "<option value='$key->category_id' >$key->category_title</option>";
                                            }
                                        echo "</optgroup>";
                                    }
                                    ?>
                            </select>
                            <hr>
                            <h4>Thông tin ngắn sản phẩm:</h4>
                            <textarea rows="8" class="form-control product_desc" placeholder="Thông số vắn tắt của sản phẩm"><?php $product->product_desc = str_replace("<br>","\n",$product->product_desc); echo $product->product_desc;?></textarea>
                        </div>
                        <div class="col-sm-5">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h3>Giá:</h3>
                                    <input type="number" class="form-control product_price" placeholder="Đơn vị USD" value="<?php echo $product->product_price;?>">
                                </div>
                                <div class="col-sm-6">
                                    <h3>Tình trạng:</h3>
                                    <select name="" id="" class="form-control product_status">
                                        <option value="0" <?php if($product->product_status == 0) echo "selected";?>>Sẵn sàng</option>
                                        <option value="1" <?php if($product->product_status == 1) echo "selected";?>>Ngừng cung cấp</option>
                                        <option value="2" <?php if($product->product_status == 2) echo "selected";?>>Hết hàng</option>
                                    </select>
                                </div>
                            </div>
                            <hr>
                            <h4>Ảnh đại diện:</h4>
                            <div class="input-group">
                                <input class="form-control thumb product_thumb" disabled="true" placeholder="Ảnh đại diện cho sản phẩm" type="text" value="<?php echo $product->product_thumb;?>">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary btn-thumb" type="button">Chọn ảnh</button>
                                </span>
                            </div>
                            <img src="<?php echo $product->product_thumb;?>" alt="" class="img-reponsive center-block img-thumb" height="250px" width="200px" >
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-7">
                            <div role="tabpanel">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#home" aria-controls="home" role="tab" data-toggle="tab">Thông tin chi tiết sản phẩm</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#tab1" aria-controls="tab" role="tab" data-toggle="tab">Khuyến mãi</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#tab" aria-controls="tab" role="tab" data-toggle="tab">Giới thiệu về sản phẩm</a>
                                    </li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="home">
                                        <h3>Chi tiết sản phẩm</h3>
                                        <textarea id="details" rows="15" cols="80" placeholder="Chi tiết sản phẩm" class="product_details"><?php echo $product->product_details;?></textarea>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="tab">
                                        <h3>Giới thiệu sản phẩm</h3>
                                        <textarea id="content" rows="15" cols="80" placeholder="Bài viết, review sản phẩm" class="product_content"><?php echo $product->product_content;?></textarea>
                                    </div>
                                     <div role="tabpanel" class="tab-pane" id="tab1">
                                        <h3>Khuyến mãi</h3>
                                        <textarea id="deals" rows="10" cols="80" placeholder="Thông tin khuyến mãi" class="product_deals form-control"><?php echo $product->product_deals;?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <h4>Tập ảnh sản phẩm <a class="btn btn-primary pull-right add-img btn-sm">Thêm ảnh</a></h4>
                            <hr>
                            <div class="images well product_image">
                            <?php
                                $img = explode("|",$product->product_image);
                                foreach ($img as $key) {
                                    if(strlen($key) > 10) echo '<div><img src="'. $key .'" alt="Image" title="Click to remove image"><div></div></div>';
                                }
                            ?>
                            </div>
                            <a class="img-delete pull-right"> Xóa tất cả ảnh</a>
                            <br>
                            <hr>
                            <div class="row">
                                <div class="col-sm-6">
                                    <button type="button" class="btn btn-success btn-block btn-lg save">Cập nhật</button>
                                </div>
                                <div class="col-sm-6">
                                    <button type="button" class="btn btn-danger btn-block btn-lg reset">Làm lại</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->

            </div>

        </div>
        <!-- /#page-wrapper -->
    </div>

    <div class="hidden">
        <input class="base_url" type="text" name="" value="<?php echo site_url();?>" placeholder="">
        <input class="product_id" type="text" name="" value="<?php echo $product->product_id;?>" placeholder="">
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="<?php echo base_url();?>asset/js/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>asset/js/bootstrap.min.js"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url();?>asset/backend/js/metisMenu.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url();?>asset/backend/js/sb-admin-2.js"></script>
    <!-- customize -->
    <script src="<?php echo base_url();?>asset/js/sweetalert.min.js"></script>
    <!-- ckeditor -->
    <script src="<?php echo base_url();?>asset/ckeditor/ckeditor.js"></script>
    <script src="<?php echo base_url();?>asset/ckfinder/ckfinder.js"></script>
    <script type="text/javascript" charset="utf-8" >
        $(document).ready(function() {
            var base_url = $('.base_url').val();
            CKEDITOR.replace('details');
            CKEDITOR.replace('content');
            CKEDITOR.replace('deals');
            function openModalThumb() {
                 CKFinder.modal( {
                    width: 1000,
                    height: 550,
                     chooseFiles: true,
                     onInit: function( finder ) {
                         finder.on( 'files:choose', function( evt ) {
                            var file = evt.data.files.first();
                            $('.img-thumb').attr("src", file.getUrl());
                            $('.thumb').attr("value", file.getUrl());
                         } );
                         finder.on( 'file:choose:resizedImage', function( evt ) {
                            $('.img-thumb').attr("src", evt.data.resizedUrl);
                            $('.thumb').attr("value", evt.data.resizedUrl);
                         } );
                     }
                 } );
             }

            function openModalImages() {
                 CKFinder.modal( {
                    width: 1000,
                    height: 550,
                     chooseFiles: true,
                     onInit: function( finder ) {
                         finder.on( 'files:choose', function( evt ) {
                            var file = evt.data.files.first();
                            $('.images').append('<div><img src="'+ file.getUrl() +'" alt="" title="Click to remove image"><div></div></div>');
                         } );
                         finder.on( 'file:choose:resizedImage', function( evt ) {
                            $('.images').append('<div><img src="'+ evt.data.resizedUrl +'" alt="" title="Click to remove image"><div></div></div>');
                         } );
                     }
                 } );
             }

            $(document).on("click", ".images > div",function() {
                $(this).remove();
            });
             $('.btn-thumb').click(function(event) {
                openModalThumb();
             });
             $('.add-img').click(function(event) {
                openModalImages();
             });
             $('.img-delete').click(function(event) {
                $('.images').html('');
             });
             $('.save').click(function(event) {
                var product_id = $('.product_id').val();
                var product_title = $.trim($('.product_title').val());
                var product_price = $('.product_price').val();
                var product_status = $('.product_status').val();
                var category_id = $('.category_id').val();
                var product_desc = $.trim($('.product_desc').val()).replace(new RegExp("\n", 'g'), "<br>");
                var product_details = CKEDITOR.instances['details'].getData();
                var product_content = CKEDITOR.instances['content'].getData();
                var product_deals = CKEDITOR.instances['deals'].getData();
                var product_thumb = $('.product_thumb').val();
                var product_image = "";
                $('.images img').each(function(){
                    product_image += $(this).attr('src') + "|";
                });
                if(product_title.length < 5 || product_price < 1 || product_thumb.length < 10){
                    swal("Error", "Thông tin nhập chưa đầy đủ, vui lòng kiểm tra lại!", "error");
                }
                else{
                    $.post(base_url + "adminajax/editproduct/", {
                        product_id: product_id,
                        product_title: product_title,
                        product_price: product_price,
                        product_status: product_status,
                        category_id: category_id,
                        product_desc: product_desc,
                        product_details: product_details,
                        product_content: product_content,
                        product_thumb: product_thumb,
                        product_image: product_image,
                        product_deals:product_deals
                    }, function(data, textStatus, xhr) {
                        if(textStatus == "success" && data == "TRUE"){
                            swal({
                                    title: 'Thành công',
                                    text: 'Bạn đã sửa thông tin thành công!',
                                    type: 'success',
                                    confirmButtonColor: '#3085d6',
                                    confirmButtonText: 'OK',
                                    closeOnConfirm: false
                                },function (argument) {
                                    window.location = "<?php echo site_url('admincp/product/manager');?>";
                                });
                        }
                    });
                }
             });
            });
    </script>

</body>

</html>
