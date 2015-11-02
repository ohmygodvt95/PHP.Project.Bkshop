jQuery(document).ready(function($) {
    // add to cart
    get_info_cart();

    function get_info_cart() {
        var url = $('.baseurl').text();
        $.get(url + "cart/info/", function(data) {
            $('.info-cart').html(data);
        });
    }
    $(document).on('click', '.btn-add', function(event) {
        var id = $(this).attr('productid');
        var qty = 1;
        var url = $('.baseurl').text();
        $.post(url + "cart/addtocart/", {
            id: id,
            qty: qty
        }, function(data, textStatus, xhr) {
            if (textStatus == "success" && data == "TRUE") {
                get_info_cart();
                swal('Thêm giỏ hàng thành công!', 'Hãy kiểm tra giỏ hàng của mình', 'success');
            } else {
                swal('Thêm giỏ hàng thất bại!', 'Hãy kiểm tra giỏ hàng của mình', 'error');
            }
        });
    });
});
