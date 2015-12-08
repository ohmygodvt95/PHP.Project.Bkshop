<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admincp extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->has_userdata('login')) {
            redirect(site_url(),'refresh');
        }
        else if($this->session->userdata['role'] != 0){
            redirect(site_url(),'refresh');
        }
    }
    public function index() {
        redirect('admincp/dashboard', 'refresh');
    }

    public function dashboard() {
        $this->load->view('admincp/dashboard.php');
    }
    public function product($value = 'add') {
        switch ($value) {
            case 'add':
                $this->load->view('admincp/product/add');
                break;

            case 'manager':
                $sql = "SELECT product_id, product_thumb, product_title, product_url, product_status, category_id, product_view, product_buy FROM product ORDER BY product_time DESC";
                $data['data'] = $this->db->query($sql)->result();
                $this->load->view('admincp/product/manager', $data);
                break;
            case 'edit':
                $pid = $this->input->get('pid');
                $result = $this->db->query("SELECT * FROM product WHERE product_id = $pid")->result();
                $data['product'] = $result[0];
                $this->load->view('admincp/product/edit', $data);
                break;

            default:
                echo "null";
                break;
        }
    }
    public function categories($value = 'index') {
        $this->load->model('backend/categories_model');
        switch ($value) {
            case 'index':
                $data['category'] = $this->categories_model->getCategoryLevelZero();
                $this->load->view('admincp/categories/index', $data);
                break;

            default:

                // code...
                break;
        }
    }

    public function order() {
        $this->load->model('backend/user_model');
        $data['order'] = $this->db->query("SELECT * FROM \"order\" WHERE order_status = 0 ORDER BY order_id DESC")->result();
        $data['order2'] = $this->db->query("SELECT * FROM \"order\" WHERE order_status = 1 ORDER BY order_id DESC")->result();
        $data['order3'] = $this->db->query("SELECT * FROM \"order\" WHERE order_status = 2 ORDER BY order_id DESC")->result();
        $data['order4'] = $this->db->query("SELECT * FROM \"order\" WHERE order_status = 3 ORDER BY order_id DESC")->result();
        $this->load->view('admincp/order/index', $data);
    }
}

/* End of file Admincp.php */

/* Location: ./application/controllers/Admincp.php */
