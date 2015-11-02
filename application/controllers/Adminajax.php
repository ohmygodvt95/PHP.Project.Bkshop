<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminajax extends CI_Controller {

	public function index()
	{

	}
	public function getsubcategory()
	{
		$id = $this->input->post("id");
		$sql = "SELECT * FROM category WHERE category_level = 1 AND category_prev = $id ORDER BY category_title ASC";
		$data = $this->db->query($sql)->result();
		foreach ($data as $key) {
			echo '<a  class="list-group-item" value="'.$key->category_id.'">'.$key->category_title.'<i class="fa fa-fw fa-trash pull-right delete" title="Xóa" value="'.$key->category_id.'"></i><i class="fa fa-fw fa-wrench pull-right edit" title="Chỉnh sửa" value="'.$key->category_id.'"></i></a>';
		}
	}

}

/* End of file Adminajax.php */
/* Location: ./application/controllers/Adminajax.php */