<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
	public function index() {
		$sql = "SELECT * FROM category WHERE category_level = 0 ORDER BY category_title DESC";
		$data['category'] = $this->db->query($sql)->result();
		$this->load->view('home/index', $data);
	}
}
/* End of file Home.php */
/* Location: ./application/controllers/Home.php */