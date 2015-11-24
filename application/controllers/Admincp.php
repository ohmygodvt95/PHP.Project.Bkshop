<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admincp extends CI_Controller
{

    public function index() {
        redirect('admincp/dashboard', 'refresh');
    }

    public function dashboard() {
        $this->load->view('admincp/dashboard.php');
    }
    public function product($value = '') {
        $this->load->view('admincp/product/add.php');
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
