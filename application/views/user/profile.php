<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="<?php echo COMPANY;?> - Thông tin tài khoản">
        <META NAME="keywords" CONTENT="<?php echo COMPANY;?>">
        <meta name="Author" content="LengKeng, E-mail: ohmygodvt95@gmail.com">
        <meta name="copyright" content="Copyright   &copy <?php echo date('Y');?> by LengKeng">
        <link rel="shortcut icon" type="image/png" href="<?php echo base_url();?>asset/images/favicon.png" />
        <title>User profile - <?php echo COMPANY;?> - <?php echo SOLOGAN;?></title>
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
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/product/details.css">
        <!-- Load customize fonts -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700,500' rel='stylesheet' type='text/css'>
            <!-- Style -->
            <style>
                tr i{
                    transition: 0.5s;
                    cursor: pointer;
                    color: green;
                }
                tr i:hover{
                    color: red;
                }
                .roboto{
                    font-family: 'Roboto';
                }
                .error{
                    color: red;
                }
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
                        <li class="">
                            <a href="<?php echo site_url();?>"><?php echo COMPANY;?> - Home</a>
                        </li>
                        <li class="active">
                            User profile
                        </li>
                    </ol>
                </div>
            </div>
            <div class="content">
                <div class="container">
                    <div class="row">
                    	<?php  $this->load->view('user/menu');?>
	                    <div class="col-sm-6">
	                    	<div class="panel panel-info">
	                    		  <div class="panel-heading">
	                    				<h3 class="panel-title text-center">Thông tin tài khoản</h3>
	                    		  </div>
	                    		  <div class="panel-body">
	                    				<table class="table table-hover">
	                    					<tbody>
	                    						<tr>
	                    							<td>Họ và tên: </td>
	                    							<td><?php echo $user->user_fullname;?> <i class="fa fa-wrench fa-fw pull-right fix" action = "user_fullname" val = "<?php echo $user->user_fullname;?>" title="Đổi họ và tên"></i></td>
	                    						</tr>
	                    						<tr>
	                    							<td>Giới tính: </td>
	                    							<td><?php if($user->user_sex == 1) echo "Nam"; else echo "Nữ"?> <i class="fa fa-wrench fa-fw pull-right fix-sex" action = "user_sex" val = "<?php echo $user->user_sex;?>" title="Đổi giới tính"></i></td>
	                    						</tr>
                                                <tr>
                                                    <td>Phone: </td>
                                                    <td><?php echo $user->user_phone;?><i class="fa fa-wrench fa-fw pull-right fix" action = "user_phone" val = "<?php echo $user->user_phone;?>" title="Đổi sdt"></i></td>
                                                </tr>
                                                <tr>
                                                    <td>Address: </td>
                                                    <td><?php echo $user->user_address;?><i class="fa fa-wrench fa-fw pull-right fix" action = "user_address" val = "<?php echo $user->user_address;?>" title="Đổi địa chỉ nhận hàng"></i></td>
                                                </tr>
                                                <tr>
                                                    <td>Email: </td>
                                                    <td><?php echo $user->user_email;?></td>
                                                </tr>
	                    						<tr>
	                    							<td>Loại tài khoản: </td>
	                    							<td><?php if($user->user_role == 1) echo "Customer"; else echo "Administrator"?> </td>
	                    						</tr>
	                    						<tr>
	                    							<td>Mã: </td>
	                    							<td><?php echo ($user->user_id);?></td>
	                    						</tr>
	                    						<tr>
	                    							<td>Thời gian tham gia: </td>
	                    							<td><?php echo date("l, F jS, Y h:i:s", $user->user_join_time);?></td>
	                    						</tr>
	                    						<tr>
	                    							<td>Hoạt động gần nhất: </td>
	                    							<td><?php echo date("l, F jS, Y h:i:s", $user->user_time);?></td>
	                    						</tr>
	                    					</tbody>
	                    				</table>
	                    		  </div>
	                    	</div>
	                    </div>
                        <div class="col-sm-3">
                            <div class="panel panel-info">
                                  <div class="panel-heading">
                                        <h3 class="panel-title">Đổi mật khẩu</h3>
                                  </div>
                                  <div class="panel-body">
                                       <h5>Mật khẩu hiện tại:</h5>
                                       <input type="password" class="form-control curpass" placeholder="Mật khẩu hiện có">
                                       <hr>
                                       <h5>Mật khẩu mới:</h5>
                                       <input type="password" class="form-control nextpass" placeholder="Độ dài >= 8 kí tự" >
                                       <h5>Xác nhận mật khẩu mới:</h5>
                                       <input type="password" class="form-control re-nextpass" placeholder="Mật khẩu xác nhận phải giống">
                                       <hr>
                                       <button class="btn btn-success btn-block btn-change" >Đổi mật khẩu</button>
                                  </div>
                            </div>
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
            <script>
            $(document).ready(function() {
                $('.btn-change').click(function(event) {
                    var curpass = $('.curpass').val();
                    var nextpass = $('.nextpass').val();
                    var renextpass = $('.re-nextpass').val();
                    if(nextpass.length < 8 || nextpass != renextpass || curpass.length < 8){
                        swal({title: 'Error', html: "<ul style='text-align: left!important'><li>Mật khẩu cũ phải có độ dài >= 8 kí tự.</li><li>Mật khẩu mới phải có độ dài >= 8 kí tự. </li><li>Mật khẩu xác nhận phải giống mật khẩu mới!</li></ul>", type: "error"});
                    }
                    else{
                        $.post('<?php echo site_url();?>ajax/changepass', {curpass: curpass, nextpass: nextpass}, function(data, textStatus, xhr) {
                            if(textStatus == "success" && data == "TRUE"){
                                swal({
                                        title: "Success",
                                        html: "Bạn đã đổi mật khẩu thành công!" ,
                                        type: "success",
                                        showCancelButton: false,
                                        closeOnConfirm: false },
                                        function() {
                                            window.location = "<?php echo site_url('user/profile');?>";
                                        });
                            }
                            else{
                                swal('Error', "Mật khẩu hiện tại không đúng!", "error");
                            }
                        });
                    }
                });
                $('.fix').click(function(event) {
                    var title = $(this).attr('title');
                    var action = $(this).attr('action');
                    var val = $(this).attr('val');
                    swal({
                        title: title,
                        html: '<p><input id="input-field" class="form-control" value="'+val+'">',
                        showCancelButton: true,
                        closeOnConfirm: false },
                        function() {
                            var new_val = $('#input-field').val();
                            $.post('<?php echo site_url();?>ajax/changeinfo', {action: action, value: new_val}, function(data, textStatus, xhr) {
                                if(textStatus == "success" && data == "TRUE"){
                                    swal({
                                        title: "Success",
                                        html: 'Bạn đã '+ title + " thành công!" ,
                                        type: "success",
                                        showCancelButton: false,
                                        closeOnConfirm: false },
                                        function() {
                                            window.location = "<?php echo site_url('user/profile');?>";
                                        });
                                }
                                else swal("Error", "Có lỗi xảy ra, vui lòng thử lại sau!", "error");

                            });
                        });
                });
                $('.fix-sex').click(function(event) {
                    var title = $(this).attr('title');
                    var action = $(this).attr('action');
                    swal({
                        title: title,
                        html: '<select class="form-control" id="sex"><option value="0">Nữ</option><option value="1">Nam</option></select>',
                        showCancelButton: true,
                        closeOnConfirm: false },
                        function() {
                            var new_val = $('#sex').val();
                            $.post('<?php echo site_url();?>ajax/changeinfo', {action: action, value: new_val}, function(data, textStatus, xhr) {
                                if(textStatus == "success" && data == "TRUE"){
                                    swal({
                                        title: "Success",
                                        html: 'Bạn đã '+ title + " thành công!" ,
                                        type: "success",
                                        showCancelButton: false,
                                        closeOnConfirm: false },
                                        function() {
                                            window.location = "<?php echo site_url('user/profile');?>";
                                        });
                                }
                                else swal("Error", "Có lỗi xảy ra, vui lòng thử lại sau!", "error");

                            });
                        });
                });
            });

            </script>
            <!-- Customize -->
            <script>
                        // Preloader Website
                        $(window).load(function() {
                            $('#loader-wrapper').delay(450).fadeOut();
                            $('#loader').delay(750).fadeOut('slow');
                        });
            </script>
        </body>
    </html>