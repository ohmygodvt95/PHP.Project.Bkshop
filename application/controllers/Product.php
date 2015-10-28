<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function index($category = "", $sub_category = "all", $sortby = "time", $sorttype="DESC") {

		// kiem tra ton tai
		if($this->db->query("SELECT * FROM category WHERE category_url = '$category' AND category_level = 0")->num_rows() != 1){
			redirect('/','refresh');
		}
		if($sub_category != "all"){
			//$r = $this->db->query("SELECT * FROM category WHERE category_url = '$category' AND category_level = 0")->result();
			if($this->db->query("SELECT * FROM category WHERE category_url = '$sub_category' AND category_level = 1")->num_rows() != 1){
				redirect('/','refresh');
			}
		}

		$sql = "SELECT * FROM category WHERE category_url = '$category' AND category_level = 0";
		$result = $this->db->query($sql)->result();
		$data['category'] = $result[0];
		$prev = $data['category']->category_id;
		if($sub_category != "all"){
			$sql = "SELECT * FROM category WHERE category_level = 1 AND category_url = '$sub_category'";
			$result = $this->db->query($sql)->result();
			$data['this_category'] = $result[0];
		}
		else{
			$data['this_category'] = $object = json_decode(json_encode(array('category_title' => "Tất cả", 'category_url' => "all")), FALSE);;

		}
		$sql = "SELECT * FROM category WHERE category_level = 1 AND category_prev = $prev";
		$data['sub_category'] = $this->db->query($sql)->result();
		$data['this_sub_category'] = $sub_category ;
		$this->load->view('product/index', $data);
	}

	public function details($product = '') {
		$this->load->view('product/details');
	}

}

/* End of file Product.php */
/* Location: ./application/controllers/Product.php */