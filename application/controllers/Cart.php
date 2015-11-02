<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->library('cart');
    }
    public function index()
    {
    	# code...
    }
    public function checkout() {
        $data['cart'] = $this->cart->contents();
        $this->load->view('cart/index', $data);
    }

	public function pay()
	{
		$data['cart'] = $this->cart->contents();
        $this->load->view('cart/pay', $data);
	}

    public function info()
    {
		$cart = $this->cart->contents();
		$total = 0;
		$total_amount = 0;
		foreach ($cart as $item) {
			$total++;
			$total_amount = $total_amount + $item['price'] * $item['qty'];
		}
		echo '<i class="fa fa-fw fa-shopping-cart"></i><span>'.$total.'</span> item(s) - $ <span>'.$total_amount.'</span>';
    }
    public function addtocart()
    {
    	$id = $this->input->post('id');
    	$qty = $this->input->post('qty');
    	$sql = "SELECT product_id, product_title, product_price FROM product WHERE product_id = $id AND product_status = 0";
    	$result = $this->db->query($sql);
    	if($result->num_rows() < 1){
    		echo "FASLE";
    	}
    	else{
    		$cart = $this->cart->contents();
    		$result = $result->result();
    		$product = $result[0];
    		$checked = 0;
    		foreach ($cart as $item) {
    			if($item['id'] == $product->product_id){
    				$checked = 1;
    				$qty = $qty + $item['qty'];
    				$update = array('rowid' => $item['rowid'], 'qty' => $qty);
    				$this->cart->update($update);
    				echo "TRUE";
    				break;
    			}
    		}
    		if($checked == 0){
    			$add = array('id' => $product->product_id, 'name' => $product->product_title, 'qty' => $qty, 'price' => $product->product_price);
    			$this->cart->insert($add);
    			echo 'TRUE';
    		}
    	}
    }

    public function deleteall()
    {
    	$cart = $this->cart->contents();
    	foreach ($cart as $item) {
    		$update = array('rowid' => $item['rowid'], 'qty' => 0);
    		$this->cart->update($update);
    	}
    }

    public function delete()
    {
    	$id = $this->input->post('id');
    	$cart = $this->cart->contents();
    	foreach ($cart as $item) {
    		if($item['id'] == $id){
    			$update = array('rowid' => $item['rowid'], 'qty' => 0);
    			$this->cart->update($update);
    			echo "TRUE";
    		}
    	}
    }
}

/* End of file Cart.php */

/* Location: ./application/controllers/Cart.php */
