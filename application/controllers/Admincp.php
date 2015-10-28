<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admincp extends CI_Controller {

	public function index() {
		redirect('admincp/dashboard', 'refresh');
	}

	public function dashboard() {
		$this->load->view('admincp/dashboard.php');
	}
	public function product($value='')
	{
		$this->load->view('admincp/product/add.php');
	}
	public function categories($value='index')
	{
		$this->load->model('backend/categories_model');
		switch ($value) {
			case 'index':
				$data['category'] = $this->categories_model->getCategoryLevelZero();
				$this->load->view('admincp/categories/index', $data);
				break;
			
			default:
				# code...
				break;
		}
	}

}

/* End of file Admincp.php */
/* Location: ./application/controllers/Admincp.php */