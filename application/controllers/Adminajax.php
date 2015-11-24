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

    public function getorderitem() {
        $id = $this->input->post('id');
        $astatus = array("0" => "pending", "1" => "processing", "2" => "done");
        $status = $astatus[$this->input->post('status') ];
        $sql = "SELECT * FROM \"order_item\" WHERE order_id = $id";
        echo "<h2> Mã đơn hàng: " . $id . "</h2>";
        $result = $this->db->query($sql)->result();
        echo '<table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#ID</th>
                                <th>Name</th>
                                <th>Qty</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>';
        $sid = 0;
        $total_amount = 0;
        foreach ($result as $item) {
            $sid++;
            $sql = "SELECT product_title, product_price, product_url FROM \"product\" WHERE product_id = $item->product_id";
            $r = $this->db->query($sql)->result();
            $total_amount+= $r[0]->product_price * $item->order_item_qty;
            echo '<tr>
                                <th>' . $sid . '</th>
                                <th><a href="' . site_url('chi-tiet/' . $r[0]->product_url) . '" target="_new">' . $r[0]->product_title . '</a></th>
                                <th>' . $item->order_item_qty . '</th>
                                <th>$ ' . $r[0]->product_price * $item->order_item_qty . '</th>
                            </tr>';
        }
        echo '<tr>
                                <th></th>
                                <th></th>
                                <th class="text-danger">Tổng cộng: </th>
                                <th class="text-danger">$ ' . $total_amount . '</th>
                            </tr></tbody>
            </table>';
        $sql = "SELECT * FROM \"order\" WHERE order_id = $id";
        $re = $this->db->query($sql)->result();
        $item = $re[0];
        echo '<hr>
            <h3>Trạng thái đơn hàng: ';
        if ($item->order_status == 0) echo '<span class="pending">Chờ xử lý</span>';
        else if ($item->order_status == 1) echo '<span class="text-danger">Đang xử lý</span>';
        else if ($item->order_status == 2) echo '<span class="text-success">Đã xử lý</span>';
        else if ($item->order_status == 3) echo '<span class="text-warning">Đã bị hủy</span>';
        echo '</h3>
            <select class="form-control status-' . $status . '">
                <option value = "0">Chờ xử lý</option>
                <option value = "1">Đang xử lý</option>
                <option value = "2">Đã xử lý</option>
                <option value = "3">Hủy đơn hàng</option>
            </select>
            <br>
            <button type="button" class="btn btn-primary order-status-' . $status . '" oid="' . $item->order_id . '">Cập nhật trạng thái</button>
            ';
    }

    public function updatestatus() {
        $oid = $this->input->post("oid");
        $status = $this->input->post("status");
        $sql = "UPDATE \"order\" SET order_status = $status WHERE order_id = $oid";
        $this->db->query($sql);
        echo "TRUE";
    }
}

/* End of file Adminajax.php */

/* Location: ./application/controllers/Adminajax.php */
