<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo COMPANY;?>">
    <meta name="author" content="LengKeng">
    <title>Quản lý sản phẩm - <?php echo COMPANY;?></title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>asset/css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url();?>asset/backend/css/metisMenu.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link type="text/css" href="<?php echo base_url();?>asset/backend/css/sb-admin-2.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/sweetalert.min.css">
    <link href="<?php echo base_url();?>/asset/css/table.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css" media="screen">
    </style>
</head>

<body>
    <div id="wrapper">
        <?php $this->load->view('admincp/header');?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="page-header">Quản lý sản phẩm <a class="pull-right" href="<?php echo site_url("admincp/product/add"); ?>"><i class="fa fa-fw fa-plus"></i>Thêm mới sản phẩm</a></h2>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Thumb</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Tình trạng</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            foreach ($data as $item) {
                                echo "<tr>
                                        <td>$item->product_id</td>
                                        <td><img src='$item->product_thumb' height='40px' width='40px'/></td>
                                        ";
                                        echo "<td><a target = '_new' href='".site_url('/chi-tiet/'.$item->product_url)."'>$item->product_title</a><br>
                                        <i class='fa fa-fw fa-eye'></i> $item->product_view | <i class='fa fa-fw fa-shopping-cart'></i> $item->product_buy</td>";
                                    $result = $this->db->query("SELECT category_title FROM \"category\" WHERE category_id = ".$item->category_id)->result();
                                    echo "<td>".$result[0]->category_title;
                                        echo "</td>

                                        <td>";
                                        if($item->product_status == 0) echo "Còn hàng";
                                        else if($item->product_status == 2) echo "Hết hàng";
                                        if($item->product_status == 1) echo "Ngừng kinh doanh";
                                        echo "</td>
                                        <td>
                                        <a class='btn btn-primary' href='".site_url('admincp/product/edit?pid='.$item->product_id)."'><i class='fa fa-fw fa-wrench'></i>Sửa</a>
                                        <a class='btn btn-danger btn-del' pid='$item->product_id'><i class='fa fa-fw fa-trash'></i>Xóa</a></td>
                                    </tr>
                                    ";
                            }
                        ?>

                        </tbody>
                    </table>
                    <hr>
                    <h2><a class="pull-right" href="<?php echo site_url("admincp/product/add"); ?>"><i class="fa fa-fw fa-plus"></i>Thêm mới sản phẩm</a></h2>
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
    <script src="<?php echo base_url();?>asset/js/table.js"></script>
    <script type="text/javascript" charset="utf-8" >
    $(document).ready(function() {
        var  base_url = $('.base_url').val();
        $('.table').DataTable();
        $(document).on('click', '.btn-del', function(event) {
            var pid = $(this).attr('pid');
                        swal({
                            title: "Chú ý",
                            text: 'Bạn có chắc chắn xóa sản phẩm này?',
                            type: 'warning',
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Delete',
                            closeOnConfirm: false,
                            showCancelButton: true,
                        },
                        function() {
                            $.post(base_url + "adminajax/deleteproduct/", {pid: pid}, function(data, textStatus, xhr) {
                                if(textStatus == "success" && data == "TRUE"){
                                        swal({
                                            title: "Success",
                                            text: 'Bạn đã xóa thành công sản phẩm',
                                            type: 'success',
                                            confirmButtonColor: '#3085d6',
                                            cancelButtonColor: '#d33',
                                            confirmButtonText: 'OK',
                                            closeOnConfirm: false
                                        },
                                        function() {
                                            window.location = "<?php echo site_url('admincp/product/manager');?>";
                                        });
                                }
                            });
                        });

        });
    });

    </script>

</body>

</html>
