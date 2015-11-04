<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function get_info($id=0)
	{
		$result = $this->db->query("SELECT user_fullname, user_email FROM \"user\" WHERE user_id = $id")->result();
		return $result[0];
	}

}

/* End of file User_model.php */
/* Location: ./application/models/backend/User_model.php */