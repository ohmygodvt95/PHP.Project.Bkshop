<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		
	}

	public function register()
	{
		if(!$this->session->has_userdata('login')){
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$time = time();
			$sql = "INSERT INTO \"user\"( user_email, user_pass, user_fullname, user_time, user_join_time) VALUES( '$email', '$password', '$email', $time, $time)";
			$this->db->query($sql);
			$this->session->set_flashdata('signup', $email);
			redirect('cart/pay','refresh');
		}
	}

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */