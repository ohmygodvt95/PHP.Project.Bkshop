<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Demo extends CI_Controller {

	public function index()
	{
		for($i = 1000000; $i< 2000000; $i++)
		{
			$sql = "INSERT INTO \"GiangVien2\" VALUES('GV$i', 'Aaaa$i', 'sdsdsaa', '1975-10-10'  )";
			$this->db->query($sql);
		}
	}

}

/* End of file Demo.php */
/* Location: ./application/controllers/Demo.php */