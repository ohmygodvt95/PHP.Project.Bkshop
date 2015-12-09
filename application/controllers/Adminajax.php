<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminajax extends CI_Controller
{

    public function __construct() {
        parent::__construct();
        $this->load->helper('string_helper');
        $this->load->helper('text');
        $this->load->model('frontend/log_model');
    }
    public function index() {
    }
    public function getsubcategory() {
        $id = $this->input->post("id");
        $sql = "SELECT * FROM category WHERE category_level = 1 AND category_prev = $id ORDER BY category_title ASC";
        $data = $this->db->query($sql)->result();
        foreach ($data as $key) {
            echo '<a  class="list-group-item" value="' . $key->category_id . '">' . $key->category_title . '<i class="fa fa-fw fa-trash pull-right delete" title="Xóa" value="' . $key->category_id . '"></i><i class="fa fa-fw fa-wrench pull-right edit" title="Chỉnh sửa tiêu đề" cid="'.$key->category_id.'" value="'.$key->category_title.'"></i></a>';
        }
    }

    public function editcategorytitle($value='')
    {
        $category_id = $this->input->post('id');
        $category_title = $this->input->post('value');
        $category_url = string_short(convert_accented_characters($category_title));
        $sql = "UPDATE \"category\" SET category_title = '$category_title', category_url = '$category_url' WHERE category_id = $category_id";
        $this->db->query($sql);
        echo "TRUE";
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
            $this->log_model->write_log_login("tạo thành công category mới: ".$data['category_title'], 1);
            echo "TRUE";
        }
    }

    public function deletecategory() {
        $id = $this->input->post("id");
        $sql = "SELECT * FROM \"category\" WHERE category_id = $id";
        $result = $this->db->query($sql)->result();
        $ctg = $result[0]->category_title;
        if ($result[0]->category_level == 0) {
            $r = $this->db->query("DELETE FROM \"category\" WHERE category_prev = " . $result[0]->category_id);
        }
        $result = $this->db->query("DELETE FROM \"category\" WHERE category_id = $id");
        $this->log_model->write_log_login("xóa thành công category ".$ctg, 1);
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
        $user_id = $item->user_id;
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
            <hr>';
            $sql = "SELECT user_email, user_fullname, user_phone, user_address FROM \"user\" WHERE user_id = $user_id";
            if($this->session->userdata('role') == 0){
                $r = $this->db->query($sql)->result();
                echo "<h3>Thông tin người nhận:</h3><hr>";

                echo "<h4>Họ và Tên: ".$r[0]->user_fullname."</h4>";
                echo "<h4>SDT: ".$r[0]->user_phone."</h4>";
                echo "<h4>Email: ".$r[0]->user_email."</h4>";
                echo "<h4>Nơi nhận: ".$r[0]->user_address."</h4><hr>";
            }
    }

    public function updatestatus() {
        $oid = $this->input->post("oid");
        $status = $this->input->post("status");
        $sql = "UPDATE \"order\" SET order_status = $status WHERE order_id = $oid";
        $this->db->query($sql);
        $this->log_model->write_log_login("cập nhật thành công trạng thái đơn hàng $oid", 1);
        echo "TRUE";
    }

    public function addproduct() {
        $product_title = $this->input->post('product_title');
        $product_url = string_short(convert_accented_characters($product_title)) . "-" . generate_random_string(2);
        $product_price = $this->input->post('product_price');
        $product_status = $this->input->post('product_status');
        $product_desc = $this->input->post('product_desc');
        $product_details = $this->input->post('product_details');
        $product_content = $this->input->post('product_content');
        $category_id = $this->input->post('category_id');
        $product_thumb = $this->input->post('product_thumb');
        $product_image = $this->input->post('product_image');
        $product_time = time();
        $product_deals = $this->input->post('product_deals');
        $sql = "INSERT INTO \"product\"(product_title, product_url, product_price, product_status, product_desc, product_details, product_content, category_id, product_thumb,product_image,product_time,product_deals) VALUES('$product_title', '$product_url', $product_price, $product_status, '$product_desc', '$product_details', '$product_content', $category_id, '$product_thumb', '$product_image', $product_time, '$product_deals')";
        $this->db->query($sql);
        $this->log_model->write_log_login("thêm thành công sản phẩm $product_title", 1);
        echo "TRUE";
    }

    public function deleteproduct() {
        $id = $this->input->post('pid');
        $sql = "DELETE FROM \"product\" WHERE product_id = $id";
        $this->db->query($sql);
        $this->log_model->write_log_login("xóa thành công sản phẩm $id", 1);
        echo "TRUE";
    }

    public function editproduct() {
        $product_id = $this->input->post('product_id');
        $product_title = $this->input->post('product_title');
        $product_url = string_short(convert_accented_characters($product_title)) . "-" . generate_random_string(2);
        $product_price = $this->input->post('product_price');
        $product_status = $this->input->post('product_status');
        $product_desc = $this->input->post('product_desc');
        $product_details = $this->input->post('product_details');
        $product_content = $this->input->post('product_content');
        $category_id = $this->input->post('category_id');
        $product_thumb = $this->input->post('product_thumb');
        $product_image = $this->input->post('product_image');
        $product_time = time();
        $product_deals = $this->input->post('product_deals');
        $sql = "UPDATE \"product\" SET product_title = '$product_title', product_url = '$product_url', product_price = $product_price, product_status = $product_status, product_desc = '$product_desc', product_details = '$product_details', product_content = '$product_content', category_id = $category_id, product_thumb = '$product_thumb', product_image = '$product_image', product_deals = '$product_deals' WHERE product_id = $product_id";
        $this->db->query($sql);
        $this->log_model->write_log_login("sửa thành công sản phẩm $product_id", 1);
        echo "TRUE";
    }

    public function resetpass($value='')
    {
        $uid = $this->input->post('uid');
        $pass = md5("12345678".COMPANY);
        $this->db->query("UPDATE \"user\" SET user_pass = '$pass' WHERE user_id = $uid");
        echo "TRUE";
    }
}

/* End of file Adminajax.php */

/* Location: ./application/controllers/Adminajax.php */
