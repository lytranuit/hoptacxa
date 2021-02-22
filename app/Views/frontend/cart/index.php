<?= $this->extend('frontend/layouts/main') ?>


<?= $this->section('content') ?>


<div class="checkout-page-title page-title">
    <div class="page-title-inner flex-row medium-flex-wrap container">
        <div class="flex-col flex-grow medium-text-center">
            <nav class="breadcrumbs heading-font checkout-breadcrumbs text-center h2 strong">
                <a href="<?= base_url("cart") ?>" class="current">Giỏ hàng</a>
                <span class="divider hide-for-small"><i class="icon-angle-right"></i></span>
                <a href="<?= base_url("cart/checkout") ?>" class="hide-for-small">Thanh toán</a>
                <span class="divider hide-for-small"><i class="icon-angle-right"></i></span>
                <a href="#" class="no-click hide-for-small">Hoàn tất</a>
            </nav>
        </div><!-- .flex-left -->
    </div><!-- flex-row -->
</div><!-- .page-title -->
<div class="cart-container container page-wrapper page-checkout">
    <div class="woocommerce">
        <div class="woocommerce-notices-wrapper"></div>
        <div class="woocommerce row row-large row-divided">
            <div class="col large-7 pb-0 ">


                <div class="woocommerce-cart-form" method="post">
                    <div class="cart-wrapper sm-touch-scroll">


                        <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
                            <thead>
                                <tr>
                                    <th class="product-name" colspan="3">Sản phẩm</th>
                                    <th class="product-price">Giá</th>
                                    <th class="product-quantity">Số lượng</th>
                                    <th class="product-subtotal">Tổng</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($cart['details'] as $row) : ?>
                                    <tr class="woocommerce-cart-form__cart-item cart_item product" data-id="<?= $row->id ?>">

                                        <td class="product-remove">
                                            <a href="" class="remove remove_product" aria-label="Xóa sản phẩm này">×</a>
                                        </td>

                                        <td class="product-thumbnail">
                                            <a href="<?= url_product($row->id) ?>"><img width="300" height="300" src="<?= base_url(isset($row->image->src) ? $row->image->src : "assets/images/placeholder.png") ?>"></a>
                                        </td>

                                        <td class="product-name" data-title="Sản phẩm">
                                            <a href="<?= url_product($row->id) ?>"><?= $row->{pick_language($row)} ?></a>
                                            <div class="show-for-small mobile-product-price">
                                                <span class="mobile-product-price__qty"><?= $row->qty ?> x </span>
                                                <span class="woocommerce-Price-amount amount"><?= number_format($row->price, 0, ",", ".") ?>&nbsp;<span class="woocommerce-Price-currencySymbol">₫</span></span>
                                            </div>
                                        </td>

                                        <td class="product-price" data-title="Giá">
                                            <span class="woocommerce-Price-amount amount"><?= number_format($row->price, 0, ",", ".") ?>&nbsp;<span class="woocommerce-Price-currencySymbol">₫</span></span>
                                        </td>

                                        <td class="product-quantity" data-title="Số lượng">
                                            <div class="quantity buttons_added">
                                                <input type="button" value="-" class="btn-down minus button is-form"> <label class="screen-reader-text" for="quantity_602c8a7e16c73"><?= $row->{pick_language($row, "name_")} ?></label>
                                                <input type="number" id="quantity_602c8a7e16c73" class="input-text qty text input_qty" value="<?= $row->qty ?>">
                                                <input type="button" value="+" class="btn-up plus button is-form">
                                            </div>
                                        </td>

                                        <td class="product-subtotal" data-title="Tổng">
                                            <span class="woocommerce-Price-amount amount"><?= number_format($row->amount, 0, ",", ".") ?>&nbsp;<span class="woocommerce-Price-currencySymbol">₫</span></span>
                                        </td>
                                    </tr>
                                <?php endforeach ?>

                                <tr>
                                    <td colspan="6" class="actions clear">


                                        <div class="continue-shopping pull-left text-left">
                                            <a class="button-continue-shopping button primary is-outline" href="<?= base_url() ?>">
                                                ←&nbsp;Tiếp tục xem sản phẩm </a>
                                        </div>

                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            <div class="cart-collaterals large-5 col pb-0">

                <div class="cart-sidebar col-inner ">
                    <div class="cart_totals ">

                        <table cellspacing="0">
                            <thead>
                                <tr>
                                    <th class="product-name" colspan="2" style="border-width:3px;">Cộng giỏ hàng</th>
                                </tr>
                            </thead>
                        </table>

                        <h2>Cộng giỏ hàng</h2>

                        <table cellspacing="0" class="shop_table shop_table_responsive">

                            <tbody>
                                <tr class="cart-subtotal">
                                    <th>Tạm tính</th>
                                    <td data-title="Tạm tính"><span class="woocommerce-Price-amount amount"><?= number_format($cart['paid_amount'], 0, ",", ".") ?>&nbsp;<span class="woocommerce-Price-currencySymbol">₫</span></span></td>
                                </tr>

                            </tbody>
                        </table>

                        <div class="wc-proceed-to-checkout">

                            <a href="<?= base_url("cart/checkout") ?>" class="checkout-button button alt wc-forward">
                                Tiến hành thanh toán</a>
                        </div>


                    </div>
                </div>
            </div>
        </div>

        <div class="cart-footer-content after-cart-content relative"></div>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section("script") ?>
<?= $this->endSection() ?>