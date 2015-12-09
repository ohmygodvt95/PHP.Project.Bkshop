<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo COMPANY;?>">
    <meta name="author" content="Lengkeng">

    <title>Quản lý user - <?php echo COMPANY;?></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>/asset/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url();?>/asset/backend/css/metisMenu.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/asset/css/sweetalert.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>/asset/backend/css/sb-admin-2.css" rel="stylesheet">
     <!-- Custom CSS -->
    <link href="<?php echo base_url();?>/asset/backend/css/order.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/asset/css/table.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/font-awesome.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">
<?php $this->load->view('admincp/header.php'); ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">User</h1>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Họ tên</th>
                                <th>Email</th>
                                <th>Ngày đk</th>
                                <th>Phone</th>
                                <th>Reset pass</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach ($user as $item) {
                                    echo "<tr>
                                            <td>$item->user_id</td>
                                            <td>$item->user_fullname</td>
                                            <td>$item->user_email</td>
                                            <td>".date("l, d M, Y h:i:s", $item->user_join_time)."</td>
                                            <td>$item->user_phone</td>
                                            <td><button class='btn btn-default btn-reset' uid='$item->user_id'>Reset</button></td>
                                        </tr>";
                                }
                            ?>
                        </tbody>
                    </table>
                    <hr>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
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
    <script src="<?php echo base_url();?>asset/js/table.js"></script>
    <script type="text/javascript" charset="utf-8" >
        $(document).ready(function() {
            var base_url = $('.base_url').val();
            $('.table').DataTable();
            $(document).on('click', '.btn-reset', function(event) {
                var uid = $(this).attr('uid');
                $.post('<?php echo site_url();?>adminajax/resetpass', {uid: uid}, function(data, textStatus, xhr) {
                    if(textStatus == 'success' && data == 'TRUE'){
                        swal({
                                            title: "Success",
                                            text: 'Bạn đã reset mật khẩu thành công',
                                            type: 'success',
                                            confirmButtonColor: '#3085d6',
                                            cancelButtonColor: '#d33',
                                            confirmButtonText: 'OK',
                                            closeOnConfirm: false
                                        },
                                        function() {
                                            window.location = "<?php echo site_url('admincp/user');?>";
                                        });
                    }
                    else{
                        swal("Error", "Đã có lỗi xảy ra!", "error");
                    }
                });
            });
        });
    </script>

</body>

</html>