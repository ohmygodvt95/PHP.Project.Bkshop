<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{
    
    public function register() {
        if (!$this->session->has_userdata('login')) {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $name = substr($email, 0, 8);
            if ($email != "" && $password != "") {
                $time = time();
                $sql = "INSERT INTO \"user\"( user_email, user_pass, user_fullname, user_time, user_join_time) VALUES( '$email', '$password', '$email', $time, $time)";
                $this->db->query($sql);
                $this->session->set_flashdata('signup', $email);
            }
            redirect('cart/pay', 'refresh');
        }
    }
    
    public function checklogin() {
        if (!$this->session->has_userdata('login')) {
            $email = $this->input->post('email');
            $pass = $this->input->post('pass');
            $sql = "SELECT * FROM \"user\" WHERE user_email = '$email' AND user_pass = '$pass'";
            $result = $this->db->query($sql);
            if ($result->num_rows() == 1) {
                $result = $result->result();
                $result = $result[0];
                $time = time();
                $sql = "UPDATE \"user\" SET user_time = $time WHERE user_id = $result->user_id";
                $r = $this->db->query($sql);
                $newdata = array('id' => $result->user_id, 'email' => $result->user_email, 'name' => $result->user_fullname, 'login' => TRUE, 'role' => $result->user_role, 'time' => $time, 'join' => $result->user_join_time, 'sex' => $result->user_sex);
                $this->session->set_userdata($newdata);
                echo "TRUE";
            } 
            else {
                echo "FALSE";
                $this->session->set_flashdata('error_login', 'TRUE');
            }
        }
    }
    
    public function logout() {
        if ($this->session->has_userdata('login')) {
            session_destroy();
            redirect(site_url(), 'refresh');
        }
    }
    
    public function profile($value = '') {
        if ($this->session->has_userdata('login')){
            $this->load->view('user/profile');
        } else {
            redirect(site_url("cart/pay"), 'refresh');
        }
    }

    public function history($value='')
    {
        if ($this->session->has_userdata('login')){
            $this->load->view('user/history');
        } else {
            redirect(site_url("cart/pay"), 'refresh');
        }    }
}

/* End of file User.php */

/* Location: ./application/controllers/User.php */
