<div class="col-sm-3">
                        	<ul class="list-group">
                        		<li class="list-group-item">Hi, <i><?php echo $this->session->userdata('email'); ?></i></li>
                        		<li class="list-group-item active">Menu</li>
							  	<li class="list-group-item"><a href="<?php
echo site_url("user/profile"); ?>">Thông tin tài khoản</a></li>
							  	<li class="list-group-item"><a href="<?php
echo site_url("user/history"); ?>">Lịch sử đơn hàng</a></li>
							 	<!-- <li class="list-group-item">Morbi leo risus</li> -->
							</ul>
                        </div>