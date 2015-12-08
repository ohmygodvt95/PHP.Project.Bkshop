<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo COMPANY;?>">
    <meta name="author" content="lengKeng">

    <title>Dashboard - <?php echo COMPANY;?></title>

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
<?php $this->load->view('admincp/header.php');?>
        <div id="page-wrapper">
        <h1 class="page-header">Quản lý order</h1>
        <div role="tabpanel">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active">
                    <a href="#pending" aria-controls="home" role="tab" data-toggle="tab">Chờ xử lý <sup><span class="badge"><?php echo count($order);?></span></sup></a>
                </li>
                <li role="presentation">
                    <a href="#processing" aria-controls="tab" role="tab" data-toggle="tab">Đang xử lý <sup><span class="badge"><?php echo count($order2);?></span></sup></a>
                </li>
                <li role="presentation">
                    <a href="#done" aria-controls="tab" role="tab" data-toggle="tab">Đã xử lý <sup><span class="badge"><?php echo count($order3);?></span></sup></a>
                </li>
                 <li role="presentation">
                    <a href="#del" aria-controls="tab" role="tab" data-toggle="tab">Đã hủy<sup><span class="badge"><?php echo count($order4);?></span></sup></a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="pending">
                    <div class="row">
                        <div class="col-lg-6">
                        <hr>
                            <table class="table table-hover table-pending">
                                <thead>
                                    <tr>
                                        <th>#ID</th>
                                        <th>Code</th>
                                        <th>User</th>
                                        <th>Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $id = 0;
                                        foreach ($order as $item) {
                                            $id++;
                                            echo '<tr class="order-pending" oid = "'.$item->order_id.'">
                                                    <th>'.$id.'</th>
                                                    <td>'.substr(md5($item->order_id), 0, 6).'</td>
                                                    <td title="'.$this->user_model->get_info($item->user_id)->user_email.'">'.$this->user_model->get_info($item->user_id)->user_fullname.'</td>
                                                    <td>'.date("d-M-Y h:i:s", $item->order_time).'</td>
                                                </tr>';
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-sm-6 info-order">
                            <h1 class="page-header">Thông tin đơn hàng</h1>
                            <div class="info-pending">Hãy bấm chọn đơn hàng bên trái</div>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                </div>
                <div role="tabpanel" class="tab-pane" id="processing">
                    <div class="row">
                        <div class="col-lg-6">
                        <hr>
                            <table class="table table-hover table-processing">
                                <thead>
                                    <tr>
                                        <th>#ID</th>
                                        <th>Code</th>
                                        <th>User</th>
                                        <th>Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $id = 0;
                                        foreach ($order2 as $item) {
                                            $id++;
                                            echo '<tr class="order-processing" oid = "'.$item->order_id.'">
                                                    <th>'.$id.'</th>
                                                    <td>'.substr(md5($item->order_id), 0, 6).'</td>
                                                    <td title="'.$this->user_model->get_info($item->user_id)->user_email.'">'.$this->user_model->get_info($item->user_id)->user_fullname.'</td>
                                                    <td>'.date("d-M-Y h:i:s", $item->order_time).'</td>
                                                </tr>';
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-sm-6 info-order">
                            <h1 class="page-header">Thông tin đơn hàng</h1>
                            <div class="info-processing">Hãy bấm chọn đơn hàng bên trái</div>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                </div>
                <div role="tabpanel" class="tab-pane" id="done">
                    <div class="row">
                        <div class="col-lg-6">
                        <hr>
                            <table class="table table-hover table-done">
                                <thead>
                                    <tr>
                                        <th>#ID</th>
                                        <th>Code</th>
                                        <th>User</th>
                                        <th>Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $id = 0;
                                        foreach ($order3 as $item) {
                                            $id++;
                                            echo '<tr class="order-done" oid = "'.$item->order_id.'">
                                                    <th>'.$id.'</th>
                                                    <td>'.substr(md5($item->order_id), 0, 6).'</td>
                                                    <td title="'.$this->user_model->get_info($item->user_id)->user_email.'">'.$this->user_model->get_info($item->user_id)->user_fullname.'</td>
                                                    <td>'.date("d-M-Y h:i:s", $item->order_time).'</td>
                                                </tr>';
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-sm-6 info-order">
                            <h1 class="page-header">Thông tin đơn hàng</h1>
                            <div class="info-done">Hãy bấm chọn đơn hàng bên trái</div>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    </div>
                    <div role="tabpanel" class="tab-pane" id="del">
                    <div class="row">
                        <div class="col-lg-12">
                        <hr>
                            <table class="table table-hover table-del">
                                <thead>
                                    <tr>
                                        <th>#ID</th>
                                        <th>Code</th>
                                        <th>User</th>
                                        <th>Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $id = 0;
                                        foreach ($order4 as $item) {
                                            $id++;
                                            echo '<tr class="order-done" oid = "'.$item->order_id.'">
                                                    <th>'.$id.'</th>
                                                    <td>'.substr(md5($item->order_id), 0, 6).'</td>
                                                    <td title="'.$this->user_model->get_info($item->user_id)->user_email.'">'.$this->user_model->get_info($item->user_id)->user_fullname.'</td>
                                                    <td>'.date("d-M-Y h:i:s", $item->order_time).'</td>
                                                </tr>';
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div><!-- /.row -->
                </div>
            </div>
        </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url();?>asset/js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>asset/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url();?>asset/backend/js/metisMenu.min.js"></script>
    <script src="<?php echo base_url();?>asset/js/sweetalert.min.js"></script>
    <script src="<?php echo base_url();?>asset/js/table.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url();?>/asset/backend/js/sb-admin-2.js"></script>
    <script>
    $(document).ready(function() {

        $('.table-pending').DataTable();
        $('.table-done').DataTable();
        $('.table-processing').DataTable();
        $('.table-del').DataTable();

        $('tr').click(function(event) {
           $('tr').each(function(index, el) {
               $(this).removeClass('act');
           });
           $(this).addClass('act');
        });
        $(document).on('click', '.order-pending', function(event) {
            var id = $(this).attr('oid');
          // / alert(id);
           $.post('<?php echo site_url();?>adminajax/getorderitem', {id: id, status: 0}, function(data, textStatus, xhr) {
               $('.info-pending').html(data);
           });
        });

        $(document).on('click', '.order-status-pending', function(event) {
           var oid = $(this).attr('oid');
           var status =  $('.status-pending').val();
           $.post('<?php echo site_url()?>adminajax/updatestatus/', {oid: oid, status: status}, function(data, textStatus, xhr) {
               if(textStatus == "success"){
                    if(data == "TRUE"){
                        swal({
                            title: "Success",
                            text: 'Bạn đã cập nhật trạng thái đơn hàng thành công',
                            type: 'success',
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Tiếp tục',
                            closeOnConfirm: false
                        },
                        function() {
                            window.location = "<?php echo site_url("admincp/order");?>";
                        });
                    }
               }
           });
        });
        $(document).on('click', '.order-processing', function(event) {
            var id = $(this).attr('oid');
          // / alert(id);
           $.post('<?php echo site_url();?>adminajax/getorderitem', {id: id, status: 1}, function(data, textStatus, xhr) {
               $('.info-processing').html(data);
           });
        });

        $(document).on('click', '.order-status-processing', function(event) {
           var oid = $(this).attr('oid');
           var status =  $('.status-processing').val();
           $.post('<?php echo site_url()?>adminajax/updatestatus/', {oid: oid, status: status}, function(data, textStatus, xhr) {
               if(textStatus == "success"){
                    if(data == "TRUE"){
                        swal({
                            title: "Success",
                            text: 'Bạn đã cập nhật trạng thái đơn hàng thành công',
                            type: 'success',
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Tiếp tục',
                            closeOnConfirm: false
                        },
                        function() {
                            window.location = "<?php echo site_url("admincp/order");?>";
                        });
                    }
               }
           });
        });
        $(document).on('click', '.order-done', function(event) {
            var id = $(this).attr('oid');
          // / alert(id);
           $.post('<?php echo site_url();?>adminajax/getorderitem', {id: id, status: 2}, function(data, textStatus, xhr) {
               $('.info-done').html(data);
           });
        });

        $(document).on('click', '.order-status-done', function(event) {
           var oid = $(this).attr('oid');
           var status =  $('.status-done').val();
           $.post('<?php echo site_url()?>adminajax/updatestatus/', {oid: oid, status: status}, function(data, textStatus, xhr) {
               if(textStatus == "success"){
                    if(data == "TRUE"){
                        swal({
                            title: "Success",
                            text: 'Bạn đã cập nhật trạng thái đơn hàng thành công',
                            type: 'success',
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Tiếp tục',
                            closeOnConfirm: false
                        },
                        function() {
                            window.location = "<?php echo site_url("admincp/order");?>";
                        });
                    }
               }
           });
        });
    });
    </script>
</body>

</html>
