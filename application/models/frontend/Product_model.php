<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model
{

    public function recommentProductByPrice($price = 0, $offset = 100) {
        $sql = "SELECT product_id, product_url, product_title, product_thumb, product_price, product_desc, product_buy FROM product WHERE product_price <= " . ($price + $offset) . " AND product_price >= " . ($price - $offset) . "  ORDER BY product_id DESC LIMIT " . MAX;
        $result = $this->db->query($sql)->result();
        foreach ($result as $key) {
            echo '<div class="col-sm-12">
                                                <div class="box">
                                                    <img class="img-responsive center-block" src="' . $key->product_thumb . '" alt="' . $key->product_title . '"/>
                                                    <div class="info">
                                                        <h3>Thông tin</h3>
                                                        ' . $key->product_desc . '<br>
                                                        <a href="' . site_url('chi-tiet/' . $key->product_url) . '" title="Xem chi tiết sản phẩm">Xem thêm <i class="fa fa-fw fa-hand-o-right"></i></a>
                                                    </div>
                                                    <h3 class="text-center"><a href="' . site_url('chi-tiet/' . $key->product_url) . '" title="Xem chi tiết sản phẩm">' . $key->product_title . '</a></h3>
                                                    <h4 class="text-center" >' . $key->product_price . ' USD</h4>
                                                    <div>
                                                        <div class="row">
                                                            <div class="col-sm-8 col-sm-offset-2">
                                                                <button class="btn btn-success center-block btn-add" productid = "' . $key->product_id . '" title="Thêm vào giỏ">Thêm vào giỏ</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            ';
        }
    }
}

/* End of file Product_model.php */

/* Location: ./application/models/frontend/Product_model.php */
