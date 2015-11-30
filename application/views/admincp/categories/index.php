<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo COMPANY;?>">
    <meta name="author" content="lengKeng">

    <title>Categories - <?php echo COMPANY;?></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>/asset/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url();?>/asset/backend/css/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>/asset/backend/css/sb-admin-2.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/sweetalert.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css" media="screen">
        .level-1 a:hover{
            cursor: pointer;
        }
        .level-2 a:hover{
            cursor: pointer;
        }
        .level-1 a i:hover{
            color: red;
        }
    </style>
</head>

<body>

    <div id="wrapper">

        <?php $this->load->view('admincp/header');?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Thêm mới danh mục sản phẩm</h1>
                    <div class="col-sm-4">
                        <h4>Tên danh mục:</h4>
                        <input type="text" name="" value="" placeholder="Tên danh mục mới" class="form-control ten-danh-muc">
                    </div>
                    <div class="col-sm-4">
                        <h4>Loại danh mục:</h4>
                        <select name="" class="form-control loai-danh-muc">
                            <option value="1">Danh mục con</option>
                            <option value="0">Danh mục cha</option>
                        </select>
                    </div>
                    <div class="col-sm-4 category">
                        <h4>Danh mục cha:</h4>
                        <select name="" class="form-control danh-muc-cha">
                            <?php
                            foreach ($category as $key) {
                                echo '<option value="'.$key->category_id.'">'.$key->category_title.'</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-sm-6 col-sm-offset-3">
                        <br>
                        <button class="btn btn-primary btn-block btn-lg btn-create">Tạo mới danh mục</button>
                    </div>
                </div>
                <div class="col-lg-12">
                    <h1 class="page-header">Quản lý danh mục sản phẩm</h1>
                    <div class="col-sm-4">
                        <h3 class="page-header text-center">Danh mục sp cấp một</h3>
                        <div class="list-group level-1">
                            <?php
                                foreach ($category as $key) {
                                    echo '<a  class="list-group-item" value="'.$key->category_id.'">'.$key->category_title.'<i class="fa fa-fw fa-trash pull-right delete" title="Xóa" value="'.$key->category_id.'"></i><i class="fa fa-fw fa-wrench pull-right edit" title="Chỉnh sửa" value="'.$key->category_id.'"></i></a>';
                                }
                            ?>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <h3 class="page-header text-center">Danh mục sp cấp hai</h3>
                        <div class="list-group level-2">
                            Hãy chọn danh mục sản phẩm cấp một
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
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url();?>/asset/js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>/asset/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url();?>/asset/backend/js/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url();?>/asset/backend/js/sb-admin-2.js"></script>

    <!-- customize -->
    <script src="<?php echo base_url();?>asset/js/sweetalert.min.js"></script>
    <script type="text/javascript" charset="utf-8" >
    jQuery(document).ready(function($) {
        var base_url = $('input.base_url').val();
        $(".loai-danh-muc").change(function(event) {
            $('.category').toggle();
        });
        $('.btn-create').click(function(event) {
            var name = $.trim($('.ten-danh-muc').val());
            var type = parseInt($(".loai-danh-muc").val());
            var father = 0;
            if (type == 1) {
                father = parseInt($(".danh-muc-cha").val());
            }
            if (name.length > 4) {
                $.post('<?php echo site_url();?>adminajax/newcategory/', {
                        name: name,
                        type: type,
                        father: father
                    }, function(data, textStatus, xhr) {
                        if (textStatus == 'success' && data=="TRUE") {
                            swal({
                                title: 'Success',
                                text: 'Bạn đã thêm thành công!' + name,
                                type: 'success',
                                confirmButtonColor: '#3085d6',
                                confirmButtonText: 'OK',
                                closeOnConfirm: false
                            },
                            function() {
                                window.location = "<?php echo site_url('admincp/categories');?>";
                            });
                        }
                        else{
                            swal('Error', "Đã có lỗi or category đã có", "error");
                        }
                    });
                } else swal('Error', "Category phải >= 5 kí tự", "error");
            });

        $(".level-1 a").click(function(event) {
            var id = $(this).attr("value");
            $(".level-1 a").each(function(index, el) {
                $(this).removeClass('active');
            });
            $(this).addClass('active');

            $.post(base_url + "adminajax/getsubcategory/",
                {id: id}
                , function(data, textStatus, xhr) {
                    if(textStatus == "success"){
                        $('.level-2').html(data);
                    }
            });
        });

        $(document).on('click', '.delete', function(event) {
            var id = $(this).attr('value');
            swal({
                title: 'Are you sure?',
                text: 'Bạn có chắc chắn xóa category này?',
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                closeOnConfirm: false
            },
            function() {
                $.post('<?php echo site_url();?>adminajax/deletecategory/', {id: id}, function(data, textStatus, xhr) {
                   if(textStatus == 'success' && data == 'TRUE'){
                        swal({
                            title: 'Success',
                            text: 'Bạn đã xóa thành công!',
                            type: 'success',
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'OK',
                            closeOnConfirm: false
                        },
                        function() {
                            window.location = "<?php echo site_url('admincp/categories');?>";
                        });
                   }
                });
                swal(
                  'Deleted!',
                  'Your file has been deleted.',
                  'success'
                );
            });
        });
    });
    </script>

</body>

</html>
