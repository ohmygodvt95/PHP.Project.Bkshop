<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories_model extends CI_Model {

	public function getCategoryLevelZero()
	{
		$sql = "SELECT category_id, category_title FROM category WHERE category_level = 0 ORDER BY category_id DESC";
		return $this->db->query($sql)->result();
	}

}

/* End of file Categories_model.php */
/* Location: ./application/models/backend/Categories_model.php */