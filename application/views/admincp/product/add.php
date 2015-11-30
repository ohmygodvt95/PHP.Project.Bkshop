<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo COMPANY;?>">
    <meta name="author" content="LengKeng">
    <title>Thêm mới sản phẩm - <?php echo COMPANY;?></title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>/asset/css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url();?>/asset/backend/css/metisMenu.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link type="text/css" href="<?php echo base_url();?>/asset/backend/css/sb-admin-2.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/sweetalert.min.css">
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
                    <h2 class="page-header">Thêm mới sản phẩm</h2>
                    <div class="row">
                        <div class="col-sm-7">
                            <h3>Tên sản phẩm:</h3>
                            <input type="text" class="form-control">
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
    </script>

</body>

</html>
