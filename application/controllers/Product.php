<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller
{

    public function index($category = "", $sub_category = "all", $sortby = "time", $sorttype = "desc") {

        // kiem tra ton tai
        if ($this->db->query("SELECT * FROM category WHERE category_url = '$category' AND category_level = 0")->num_rows() != 1) {
            redirect('/', 'refresh');
        }
        if ($sub_category != "all") {

            //$r = $this->db->query("SELECT * FROM category WHERE category_url = '$category' AND category_level = 0")->result();
            if ($this->db->query("SELECT * FROM category WHERE category_url = '$sub_category' AND category_level = 1")->num_rows() != 1) {
                redirect('/', 'refresh');
            }
        }

        $sql = "SELECT * FROM category WHERE category_url = '$category' AND category_level = 0";
        $result = $this->db->query($sql)->result();
        $data['category'] = $result[0];
        $prev = $data['category']->category_id;
        if ($sub_category != "all") {
            $sql = "SELECT * FROM category WHERE category_level = 1 AND category_url = '$sub_category'";
            $result = $this->db->query($sql)->result();
            $data['this_category'] = $result[0];
        }
        else {
            $data['this_category'] = $object = json_decode(json_encode(array('category_title' => "Tất cả", 'category_url' => "all")), FALSE);
        }
        $sql = "SELECT * FROM category WHERE category_level = 1 AND category_prev = $prev";
        $data['sub_category'] = $this->db->query($sql)->result();
        $data['this_sub_category'] = $sub_category;
        $data['sort_by'] = $sortby;
        $data['sort_type'] = $sorttype;
        $this->load->view('product/index', $data);
    }

    public function details($product = '') {
        $this->load->model('frontend/product_model');

        $sql = "SELECT * FROM product WHERE product_url  = '$product'";
        $result = $this->db->query($sql)->result();
        $data['product'] = $result[0];
        $cate = $data['product']->category_id;
        $sql = "SELECT * FROM category WHERE category_id = $cate AND category_level = 1";
        $result = $this->db->query($sql)->result();
        $data['sub_category'] = $result[0];
        $cate = $result[0]->category_prev;
        $sql = "SELECT * FROM category WHERE category_id = $cate AND category_level = 0";
        $result = $this->db->query($sql)->result();
        $data['category'] = $result[0];
        $this->load->view('product/details', $data);
    }

    public function search() {
        $this->load->helper('string_helper');
        $this->load->helper('text');
        $this->load->model('frontend/product_model');
        if (isset($_GET['key'])) {
            $value = string_short(convert_accented_characters(trim($_GET['key'])));
            $value_2 = trim($_GET['key']);
        }
        else {
            $value = $value_2 = "BKSHOP";
        }
        $sql = "SELECT product_id, product_url, product_title, product_thumb, product_price, product_desc, product_buy, product_view FROM \"product\" WHERE product_url LIKE '%$value%' OR product_title LIKE '%$value_2%' ORDER BY product_time DESC LIMIT " . MAX;
        $data['product'] = $this->db->query($sql)->result();
        $this->load->view('product/search', $data);
    }
}

/* End of file Product.php */

/* Location: ./application/controllers/Product.php */
