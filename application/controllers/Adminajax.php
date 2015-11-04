<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminajax extends CI_Controller
{
    
    public function __construct() {
        parent::__construct();
        $this->load->helper('string_helper');
        $this->load->helper('text');
    }
    public function index() {
    }
    public function getsubcategory() {
        $id = $this->input->post("id");
        $sql = "SELECT * FROM category WHERE category_level = 1 AND category_prev = $id ORDER BY category_title ASC";
        $data = $this->db->query($sql)->result();
        foreach ($data as $key) {
            echo '<a  class="list-group-item" value="' . $key->category_id . '">' . $key->category_title . '<i class="fa fa-fw fa-trash pull-right delete" title="Xóa" value="' . $key->category_id . '"></i><i class="fa fa-fw fa-wrench pull-right edit" title="Chỉnh sửa" value="' . $key->category_id . '"></i></a>';
        }
    }
    
    public function newcategory() {
        $data['category_level'] = $this->input->post("type");
        $data['category_prev'] = $this->input->post("father");
        $data['category_title'] = $this->input->post("name");
        $data['category_url'] = string_short(convert_accented_characters($data['category_title']));
        $sql = "SELECT * FROM \"category\" WHERE category_url = '" . $data['category_url'] . "'";
        if ($this->db->query($sql)->num_rows() > 0) {
            echo "FALSE";
        } 
        else {
            $this->db->insert('category', $data);
            echo "TRUE";
        }
    }
    
    public function deletecategory() {
        $id = $this->input->post("id");
        $sql = "SELECT * FROM \"category\" WHERE category_id = $id";
        $result = $this->db->query($sql)->result();
        if ($result[0]->category_level == 0) {
            $r = $this->db->query("DELETE FROM \"category\" WHERE category_prev = " . $result[0]->category_id);
        }
        $result = $this->db->query("DELETE FROM \"category\" WHERE category_id = $id");
        echo "TRUE";
    }
}

/* End of file Adminajax.php */

/* Location: ./application/controllers/Adminajax.php */
