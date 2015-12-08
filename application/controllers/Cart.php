<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->library('cart');
        $this->load->model('frontend/log_model');
    }
    public function index() {
        $data['cart'] = $this->cart->contents();
        echo "<pre>";
        print_r($data['cart']);
        echo "</pre>";
    }
    public function checkout() {
        $data['cart'] = $this->cart->contents();
        $this->load->view('cart/checkout', $data);
    }

    public function pay() {
        $data['cart'] = $this->cart->contents();
        $data['total'] = count($data['cart']);
        $data['total_amount'] = 0;
        $data['total_product'] = 0;
        foreach ($data['cart'] as $key) {
            $data['total_amount']+= $key['qty'] * $key['price'];
            $data['total_product']+= $key['qty'];
        }
        if (!$this->session->has_userdata('login')) {
            $this->load->view('cart/pay', $data);
        }
        else {
            $this->load->view('cart/pay-login', $data);
        }
    }

    public function info() {
        $cart = $this->cart->contents();
        $total = 0;
        $total_amount = 0;
        foreach ($cart as $item) {
            $total++;
            $total_amount = $total_amount + $item['price'] * $item['qty'];
        }
        echo '<i class="fa fa-fw fa-shopping-cart ';
        if($total >0 ) echo "text-success";
        echo '"></i><span>' . $total . '</span> item(s) - $ <span>' . $total_amount . '</span>';
    }
    public function addtocart() {
        $id = $this->input->post('id');
        $qty = $this->input->post('qty');
        $sql = "SELECT product_id, product_title, product_price, product_url FROM product WHERE product_id = $id AND product_status = 0";
        $result = $this->db->query($sql);
        if ($result->num_rows() < 1) {
            echo "FASLE";
        }
        else {
            $cart = $this->cart->contents();
            $result = $result->result();
            $product = $result[0];
            $checked = 0;
            foreach ($cart as $item) {
                if ($item['id'] == $product->product_id) {
                    $checked = 1;
                    $qty = $qty + $item['qty'];
                    $update = array('rowid' => $item['rowid'], 'qty' => $qty);
                    $this->cart->update($update);
                    echo "TRUE";
                    break;
                }
            }
            if ($checked == 0) {
                $add = array('id' => $product->product_id, 'name' => $product->product_title, 'qty' => $qty, 'price' => $product->product_price, 'options' => $product->product_url);
                $this->cart->insert($add);
                echo 'TRUE';
            }
        }
    }

    public function deleteall() {
        $cart = $this->cart->contents();
        foreach ($cart as $item) {
            $update = array('rowid' => $item['rowid'], 'qty' => 0);
            $this->cart->update($update);
        }
    }

    public function order() {
        $this->load->model('frontend/cart_model');
        $cart = $this->cart->contents();
        if ($this->session->has_userdata('login')) {
            $user_id = $this->session->userdata('id');
            $time = time();
            $sql = "INSERT INTO \"order\"(user_id, order_time) VALUES($user_id, $time)";
            $result = $this->db->query($sql);
            $sql = "SELECT * FROM \"order\" WHERE user_id = $user_id AND order_status = 0 ORDER BY order_id DESC LIMIT 1";
            $result = $this->db->query($sql)->result();
            $oid = $result[0]->order_id;
            foreach ($cart as $item) {
                $pid = $item['id'];
                $qty = $item['qty'];
                $sql = "INSERT INTO \"order_item\"(product_id, order_id, order_item_qty) VALUES($pid, $oid, $qty)";
                $result = $this->db->query($sql);
                $update = array('rowid' => $item['rowid'], 'qty' => 0);
                $this->cart->update($update);
                $this->cart_model->buyProduct($pid);
            }
            $this->log_model->write_log_login("thêm đơn hàng số $oid thành công", 0);
            echo 'TRUE';
        }
    }
    public function delete() {
        $id = $this->input->post('id');
        $cart = $this->cart->contents();
        foreach ($cart as $item) {
            if ($item['id'] == $id) {
                $update = array('rowid' => $item['rowid'], 'qty' => 0);
                $this->cart->update($update);
                echo "TRUE";
            }
        }
    }
}

/* End of file Cart.php */

/* Location: ./application/controllers/Cart.php */
