<header>
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="header-top-left">
                        <ul>
                            <li>
                                <a href="<?php echo site_url();?>cart/checkout/" title="Xem giỏ hàng"><i class="fa fa-fw fa-cart-plus"></i><span>Giỏ hàng của tôi</span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="header-top-right">
                        <span>Welcome to <?php echo COMPANY;?></span>
                        <?php if(!$this->session->has_userdata('login')) echo '<a href="'.site_url('user/account/dang-nhap').'">Login</a> or <a href="'.site_url('user/account/dang-ky').'">Sign up</a>';
                        else echo "Hi, <a title='Thông tin tài khoản ".$this->session->userdata('name')."' href='".site_url('user/profile')."'>".substr($this->session->userdata('name'), 0, 8)."</a> | <a title='Đăng xuất' href='".site_url("user/logout")."'> Logout<i class='fa fa-fw fa-sign-out'></i></a>"?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-banner">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 logo">
                    <a href="<?php echo site_url();?>" title="<?php echo COMPANY . " - " . SOLOGAN;?>"><img src="<?php echo base_url();?>asset/images/logo3.png" alt="<?php echo COMPANY;?>" ></a>
                </div>
                <div class="col-sm-4 col-sm-offset-2 contact">
                    <div class="contact-box center-block">
                        <h6 title="Đường dây nóng"><i class="fa fa-fw fa-phone"> </i>+(84) 977 903 921</h6>
                        <h6 title="Email ngay cho chúng tôi"><i class="fa fa-fw fa-envelope"> </i>ohmygodvt95@gmail.com</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-menu">
        <nav class="navbar navbar-default" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand info-cart" href="<?php echo site_url();?>cart/checkout/"><i class="fa fa-fw fa-shopping-cart"></i><span>0</span> item(s) - $ <span>00.0</span></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li><a href="<?php echo site_url();?>" title="<?php echo COMPANY;?> - Home Page"><i class="fa fa-fw fa-home"></i><?php echo COMPANY;?></a></li>
                        <?php
                        $sql = "SELECT * FROM category WHERE category_level = 0 ORDER BY category_title ASC";
                        $result = $this->db->query($sql)->result();
                        foreach ($result as $item) {
                            echo '<li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" title="'.$item->category_title.'">'.$item->category_title.'<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="'.site_url("san-pham/".$item->category_url."/all").'" title="Tất cả sản phẩm '.$item->category_title.'">Tất cả</a></li>';

                                $sql = "SELECT * FROM category WHERE category_level = 1 AND category_prev = $item->category_id ORDER BY category_title ASC";
                                $r = $this->db->query($sql)->result();
                                foreach ($r as $key) {
                                   echo '<li><a href="'.site_url('san-pham/'.$item->category_url."/".$key->category_url).'" title="'.$key->category_title.'">'.$key->category_title.'</a></li>';
                                }
                                echo '</ul>
                        </li>
                        ';
                        }
                        ?>
                        <li><a href="" title="Contact"><i class="fa fa-fw fa-paper-plane"></i>Contact</a></li>
                        <?php if($this->session->has_userdata('login')) echo '<li><a title="User profile" href="'.site_url("user/profile").'"><i class="fa fa-fw fa-user"></i>Profile</a></li>'; ?>
                    </ul>
                    <form class="navbar-form navbar-right"  method="get" action="<?php echo site_url();?>search">
                        <div class="input-group">
                            <input type="text" class="form-control search" placeholder="Search: e.g Iphone 6" name="key">
                            <span class="input-group-btn">
                                <button class="btn btn-success" type="submit" title="Search!"><i class="fa fa-fw fa-search" ></i></button>
                            </span>
                        </div>
                    </form>
                    </div><!-- /.navbar-collapse -->
                </div>
            </nav>
        </div>
    </header>