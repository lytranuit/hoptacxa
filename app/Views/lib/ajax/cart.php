<ul class="woocommerce-mini-cart cart_list product_list_widget ">
    <?php foreach ($cart['details'] as $row) : ?>
        <li class="woocommerce-mini-cart-item mini_cart_item product" data-id="<?= $row->id ?>">
            <a href="" class="remove remove_product" aria-label="Xóa sản phẩm này">×</a>
            <a href="<?= url_product($row->id) ?>"><img width="300" height="300" src="<?= base_url(isset($row->image->src) ? $row->image->src : "assets/images/placeholder.png") ?>"></a>

            <span class="quantity"><?= number_format($row->qty, 0, ",", ".") ?> × <span class="woocommerce-Price-amount amount"><?= number_format($row->amount, 0, ",", ".") ?>&nbsp;<span class="woocommerce-Price-currencySymbol">₫</span></span>
            </span>
        </li>
    <?php endforeach ?>
</ul>

<p class="woocommerce-mini-cart__total total">
    <strong>Tạm tính:</strong> <span class="woocommerce-Price-amount amount"><?= number_format($cart['paid_amount'], 0, ",", ".") ?>&nbsp;<span class="woocommerce-Price-currencySymbol">₫</span></span>
</p>


<p class="woocommerce-mini-cart__buttons buttons"><a href="<?= base_url("cart") ?>" class="button wc-forward">Xem giỏ hàng</a><a href="<?= base_url("cart/checkout") ?>" class="button checkout wc-forward">Thanh toán</a></p>