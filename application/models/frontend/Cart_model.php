<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart_model extends CI_Model {

    public function buyProduct($id=0)
    {
        $sql = "SELECT product_buy FROM \"product\" WHERE product_id = $id";
        $result = $this->db->query($sql)->result();
        $product_buy = $result[0]->product_buy + 1;
        $sql = "UPDATE \"product\" SET product_buy = $product_buy WHERE product_id = $id";
        $result = $this->db->query($sql);
    }

}

/* End of file Cart_model.php */
/* Location: ./application/models/frontend/Cart_model.php */