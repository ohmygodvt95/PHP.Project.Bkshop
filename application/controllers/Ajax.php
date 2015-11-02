<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {

	public function index()
	{

	}

	public function getproduct($category = "", $sub_category = "", $sort_by = "" , $sort_type = "", $offset = 0)
	{
		if($category == "" || $sub_category == "" || $sort_by == "" || $sort_type == ""){
			echo "a";
		}
		else{
			$sql = "SELECT * FROM category WHERE category_url = '$category' AND category_level = 0";
			$result = $this->db->query($sql)->result();
			$prev = $result[0];
			if($sub_category != 'all'){
				$sql = "SELECT category_id FROM category WHERE category_url = '$sub_category' AND category_prev = $prev->category_id";
				$result = $this->db->query($sql)->result();
				$category_id = $result[0]->category_id;
			}
			switch ($sort_by) {
				case 'name':
					$sort_by = "product_title";
					break;
				case 'price':
					$sort_by = "product_price";
					break;
				case 'view':
					$sort_by = "product_view";
					break;
				case 'time':
					$sort_by = "product_time";
					break;
				default:
					$sort_by = "product_time";
					break;
			}
			switch ($sort_type) {
				case 'asc':
					$sort_type = "ASC";
					break;
				default:
					$sort_type = "DESC";
					break;
			}
			if($sub_category == 'all'){
				$sql =
				"SELECT product_id, product_url, product_title, product_thumb, product_price, product_desc, product_buy
			 	 FROM product
				 WHERE category_id IN(SELECT category_id FROM category WHERE category_prev = $prev->category_id) AND product_status = 0 ORDER BY $sort_by $sort_type LIMIT ".MAX." OFFSET $offset";
			}
			else {
				$sql =
				"SELECT product_id, product_url, product_title, product_thumb, product_price, product_desc, product_buy
				 FROM product
				 WHERE category_id = $category_id AND product_status = 0 ORDER BY $sort_by $sort_type LIMIT ".MAX." OFFSET $offset";
				}
			$result = $this->db->query($sql)->result();
			$i = 0;
			foreach ($result as $key) {
				$i++;
				echo '<div class="col-sm-3">
                        <div class="box">
                        <img class="img-responsive center-block" src="'.$key->product_thumb.'" alt=""/>
                        	<div class="info">
	                            <h3>Thông tin</h3>
	                            '.$key->product_desc.'
	                            <br>
	                            <a href="'.site_url('chi-tiet/'.$key->product_url).'">Xem thêm <i class="fa fa-fw fa-hand-o-right"></i></a>
                            </div>
                            <h3 class="text-center"><a href="'.site_url('chi-tiet/'.$key->product_url).'">'.$key->product_title.'</a></h3>
                            <h4 class="text-center">'.$key->product_price.' USD</h4>
                            <div>
	                            <div class="row">
		                            <div class="col-sm-8 col-sm-offset-2">
		                            	<button class="btn btn-success center-block btn-add" productid = "'.$key->product_id.'">Add to cart</button>
		                            </div>
	                            </div>
                            </div>
                        </div>
                      </div>
                            <!--split-->';
			}
			if($i == 0) echo "FALSE";
		}
	}

}

/* End of file Ajax.php */
/* Location: ./application/controllers/Ajax.php */