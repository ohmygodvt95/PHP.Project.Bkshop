<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('frontend/log_model');
    }
    public function index($value='')
    {
        # code...
    }

    public function register() {
        if (!$this->session->has_userdata('login')) {
            $email = $this->input->post('email');
            $password = md5($this->input->post('password').COMPANY);
            $phone = $this->input->post('phone');
            $address = $this->input->post('address');
            $name = substr($email, 0, 8);
            if ($email != "" && $password != "") {
                $time = time();
                $sql = "INSERT INTO \"user\"( user_email, user_pass, user_fullname, user_time, user_join_time, user_phone, user_address) VALUES( '$email', '$password', '$email', $time, $time, '$phone', '$address')";
                $this->db->query($sql);
                $this->session->set_flashdata('signup', $email);
                $this->log_model->write_log($email." đã tạo tài khoản mới", 0);
            }
            redirect('cart/pay', 'refresh');
        }
    }
    public function register2() {
        if (!$this->session->has_userdata('login')) {
            $email = $this->input->post('email');
            $password = md5($this->input->post('password').COMPANY);
            $phone = $this->input->post('phone');
            $address = $this->input->post('address');
            $name = substr($email, 0, 8);
            if ($email != "" && $password != "") {
                $time = time();
                $sql = "INSERT INTO \"user\"( user_email, user_pass, user_fullname, user_time, user_join_time, user_phone, user_address) VALUES( '$email', '$password', '$email', $time, $time, '$phone', '$address')";
                $this->db->query($sql);
                $this->session->set_flashdata('signup', $email);
                $this->log_model->write_log($email." đã tạo tài khoản mới", 0);
            }
            redirect('user/account/dang-nhap', 'refresh');
        }
    }

    public function checklogin() {
        if (!$this->session->has_userdata('login')) {
            $email = $this->input->post('email');
            $pass = md5($this->input->post('pass').COMPANY);
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
                $this->log_model->write_log_login("đăng nhập vào hệ thống", 0);
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
            $this->log_model->write_log_login("đăng xuất khỏi hệ thống", 0);
            session_destroy();
        }
        redirect(site_url(), 'refresh');
    }

    public function profile($value = '') {
        if ($this->session->has_userdata('login')) {
            $result = $this->db->query("SELECT * FROM \"user\" WHERE user_id = ".$this->session->userdata('id'))->result();
            $data['user'] = $result[0];
            $this->load->view('user/profile', $data);
        }
        else {
            redirect(site_url("cart/pay"), 'refresh');
        }
    }

    public function history($value = '') {
        if ($this->session->has_userdata('login')) {

            $this->load->view('user/history');
        }
        else {
            redirect(site_url("cart/pay"), 'refresh');
        }
    }

    public function account($action = "dang-ky") {
        if ($this->session->has_userdata('login')) {
            redirect('user/profile','refresh');
        }
        else {
            switch ($action) {
                case "dang-ky":
                    $this->load->view('user/register');
                    break;

                case "dang-nhap":
                    $this->load->view('user/login');
                    break;

                default:
                    redirect(site_url(), 'refresh');
                    break;
            }
        }
    }

    public function trackyourorder($id = 0)
    {
        if (!$this->session->has_userdata('login')) {
            redirect(site_url(),'refresh');
        }
        else{
            if($id == 0) redirect(site_url(),'refresh');
            else{
                $result = $this->db->query("SELECT * FROM \"order\" WHERE order_id = $id")->result();
                $data['order'] = $result[0];
                $this->load->view('user/track', $data);
            }
        }

    }
}

/* End of file User.php */

/* Location: ./application/controllers/User.php */
