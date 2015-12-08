<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Log_model extends CI_Model {

    public function write_log_login($log_content = "", $log_type= 0)
    {
        $user_id = $this->session->userdata('id');
        $user_email = $this->session->userdata('email');
        $log_content = $user_email." ".$log_content;
        $log_time = time();
        $sql = "INSERT INTO \"log\"(log_content, user_id, log_type, log_time) VALUES('$log_content', $user_id, $log_type, $log_time)";
        $this->db->query($sql);
    }
    public function write_log($log_content = "", $log_type= 0)
    {
        $log_time = time();
        $sql = "INSERT INTO \"log\"(log_content, user_id, log_type, log_time) VALUES('$log_content', 1, $log_type, $log_time)";
        $this->db->query($sql);
    }

}

/* End of file Log_model.php */
/* Location: ./application/models/frontend/Log_model.php */