<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="<?php echo COMPANY;?> - Thanh toán">
        <META NAME="keywords" CONTENT="Lengkeng">
        <meta name="Author" content="LengKeng, E-mail: ohmygodvt95@gmail.com">
        <meta name="copyright" content="Copyright   &copy <?php echo date('Y');?> by LengKeng">
        <link rel="shortcut icon" type="image/png" href="<?php echo base_url();?>asset/images/favicon.png" />
        <meta itemprop="name" content="<?php echo COMPANY;?> - <?php echo SOLOGAN;?> - Thanh toán">
        <meta itemprop="description" content="<?php echo COMPANY;?> - <?php echo SOLOGAN;?> - Thanh toán">
        <meta itemprop="image" content="<?php echo base_url();?>asset/images/logo2.png">
        <meta property="og:title" content="<?php echo COMPANY;?> - <?php echo SOLOGAN;?> - Thanh toán" />
        <meta property="og:locale" content="vi_VN" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="<?php echo $_SERVER['REQUEST_URI'];?>" />
        <meta property="og:image" content="<?php echo base_url();?>asset/images/logo2.png" />
        <meta property="og:description" content="<?php echo COMPANY;?> - <?php echo SOLOGAN;?> - Thanh toán" />
        <meta property="og:site_name" content="<?php echo COMPANY;?>" />
        <meta property="fb:admins" content="ohmygodvt95" />
        <link rel="canonical" href="<?php echo $_SERVER['REQUEST_URI'];?>"/>
        <link rel="next" href="<?php echo $_SERVER['REQUEST_URI'];?>"/>
        <link rel="prev" href="<?php echo $_SERVER['REQUEST_URI'];?>" />
        <title>Tài khoản - <?php echo COMPANY;?> - <?php echo SOLOGAN;?></title>
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
                label.error{
                    color: red;
                    font-weight: normal;
                }
                .type{
                    width: 70%;
                }
                .sex{
                    width: 70%;
                }
                label.valid {
                    background: url('<?php echo base_url();?>asset/images/checked.gif') no-repeat;
                    display: block;
                    margin-top:-25px;
                    margin-left: 95%;
                    width: 16px;
                    height: 16px;
                    z-index: 1000;
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
                            Giỏ hàng của tôi
                        </li>
                    </ol>
                </div>
            </div>
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="panel-title">
                                        <h5 role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Tôi đã là thành viên của <?php echo COMPANY;?>
                                        </h5>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body">
                                        <?php if($this->session->flashdata('signup') != NULL){
                                                echo '<div class="alert alert-info">
                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                <strong>Chúc mừng!</strong> Tài khoản '.$this->session->userdata('signup').' đã có thể sử dụng
                                            </div>';
                                            }?>
                                            <div class="col-sm-8 col-sm-offset-2 login">
                                                <h4>Email:</h4>
                                                <div class="input-group">
                                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-fw fa-user"></i></span>
                                                    <input type="email" class="form-control email" placeholder="Username" aria-describedby="basic-addon1">
                                                </div>
                                                <h4>Password:</h4>
                                                <div class="input-group">
                                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-fw fa-key"></i></span>
                                                    <input type="password" class="form-control pass" placeholder="Password" aria-describedby="basic-addon1">
                                                </div>
                                                <hr>
                                                <button class="btn btn-primary btn-lg btn-block btn-login">Login</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                        <h4 class="panel-title">
                                        <h5 class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Tôi là thành viên mới
                                        </h5>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="panel-body">
                                            <div class="col-sm-8 col-sm-offset-2 signup">
                                                <form id = "form" action="<?php echo site_url();?>user/register/" method = "POST">
                                                     <h4>Email:</h4>
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="basic-addon1"><i class="fa fa-fw fa-user"></i></span>
                                                        <input type="email" class="form-control" placeholder="Username" aria-describedby="basic-addon1" name = "email">
                                                    </div>
                                                    <h4>Password:</h4>
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="basic-addon1"><i class="fa fa-fw fa-key"></i></span>
                                                        <input id="password" type="password" class="form-control" placeholder="Password" aria-describedby="basic-addon1" name = "password">
                                                    </div>
                                                    <h4>Re-password:</h4>
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="basic-addon1"><i class="fa fa-fw fa-key"></i></span>
                                                        <input type="password" class="form-control" name="repassword"placeholder="Password" equalTo="#password" aria-describedby="basic-addon1">
                                                    </div>
                                                    <h4>Phone:</h4>
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="basic-addon1"><i class="fa fa-fw fa-phone"></i></span>
                                                        <input type="text" name = "phone" class="form-control phone" placeholder="Phone number" aria-describedby="basic-addon1">
                                                    </div>
                                                    <h4>Address:</h4>
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="basic-addon1"><i class="fa fa-fw fa-map-marker"></i></span>
                                                        <textarea class="form-control address" name = "address" placeholder="Address"></textarea>
                                                    </div>
                                                    <div class="checkbox hidden" style="font-size: 12px">
                                                        <label><input type="checkbox" value="" class="check">I agree to the <?php echo COMPANY;?> <a href="">Terms of Service</a>  and <a href="">Privacy Policy</a></label>
                                                    </div>
                                                    <hr>
                                                    <button class="btn btn-primary btn-lg btn-block">Sign Up</button>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 <?php if(count($cart) < 1) echo "hidden";?>">
                            <div class="panel panel-info">
                                  <div class="panel-heading">
                                        <h3 class="panel-title text-center" style="height: 35px;">Thông tin đơn hàng</h3>
                                  </div>
                                  <div class="panel-body arial">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Sản phẩm</th>
                                                <th>Số lượng</th>
                                                <th>Thành tiền</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                         <?php
                                            foreach ($cart as $item) {
                                                echo '
                                                    <tr>
                                                        <td><a target="_new" href="'.site_url('chi-tiet/'.$item['options']).'" title="'.$item['name'].'">'.$item['name'].'</a></td>
                                                        <td>'.$item['qty'].'</td>
                                                        <td >$ '.($item['qty'] * $item['price']).'</td>
                                                    </tr>
                                                ';
                                            }
                                        ?>
                                        <tr>
                                            <th></th>
                                            <th><?php echo $total_product;?></th>
                                            <th style="color: red">$<?php echo $total_amount;?></th>
                                        </tr>
                                        </tbody>
                                    </table>
                                  </div>
                                  <div class="panel-footer">
                                     <h3 class="">Tổng số tiền: <?php echo $total_amount;?> $</h3>
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
            <script src="<?php echo base_url();?>asset/js/frontend/cart.js"></script>
            <script src="<?php echo base_url();?>asset/js/jquery.validate.min.js"></script>
            <script src="<?php echo base_url();?>asset/js/additional-methods.min.js"></script>
            <!-- Customize -->
            <script type="text/javascript">
            $(document).ready(function() {
                // $('.check').click(function(event) {
                //     $('.signup button').toggleClass('active');
                // });
                $('#form').validate({
                        success:"valid",
                      rules: {
                        email:{
                            required: true,
                            email: true,
                            remote:{
                                url: "<?php echo site_url();?>ajax/checkemail/",
                                type: "post"
                            }
                        },
                        password:{
                            required: true,
                            minlength: 8
                        },
                        repassword:{
                            required: true,
                            minlength: 8
                        },
                        address:{
                            required: true,
                            minlength: 5,
                            minWords: 2
                        },
                        phone:{
                            required: true,
                            phonesVN: true
                        },
                    },
                      messages:{
                        email:{
                            required: "Email không được bỏ trống",
                            email: "Định dạng email không đúng",
                            remote: "Email này đã có người sử dụng"
                        },
                        password:{
                            required: "Mật khẩu không được bỏ trống",
                            minlength: "Mật khẩu tối tiểu phải có 8 kí tự"
                        },
                        repassword:{
                            required: "Mật khẩu xác nhận không được bỏ trống",
                            equalTo: "Mật khẩu xác nhận không khớp",
                            minlength: "Mật khẩu tối tiểu phải có 8 kí tự"
                        },
                        address:{
                            required: "Địa chỉ không được bỏ trống",
                            minlength: "Tối thiểu phải có 5 kí tự",
                            minWords: "Địa chỉ ít nhất phải gồm 2 từ"
                        },
                        phone:{
                            required: "Số di động không được bỏ trống",
                            phonesVN: "Không phải là số di động của Việt Nam"
                        }
                    }
                });
                $('.btn-login').click(function(event) {
                    var email = $('input.email').val();
                    var pass = $('input.pass').val();
                    var phone = $('textarea.pass').val();
                    var address = $('textarea.pass').val();
                    if($.trim(email) != "" && pass.length > 0){
                        var url = "<?php echo site_url();?>user/checklogin/";
                        $.post(url, {email: email, pass: pass, phone: phone, address: address}, function(data, textStatus, xhr) {
                            if (textStatus == "success" && data == "TRUE") {
                                swal({
                                    title: 'Logged In',
                                    text: 'Bạn đã đăng nhập thành công!',
                                    type: 'success',
                                    confirmButtonColor: '#3085d6',
                                    confirmButtonText: 'OK',
                                    closeOnConfirm: false
                                },function (argument) {
                                    window.location = "<?php echo site_url();?>cart/pay/";
                                });
                            }
                            else{
                                swal('Error!', 'Tên đăng nhập hoặc mật khẩu sai!', 'error');
                            }
                        });
                    }
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