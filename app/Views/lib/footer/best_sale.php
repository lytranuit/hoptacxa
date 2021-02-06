
<div class="col medium-3 small-12 large-3">
    <div class="col-inner">

        <ul class="sidebar-wrapper ul-reset">
            <li id="woocommerce_products-6" class="widget woocommerce widget_products">
                <h2 class="widgettitle">Sản phẩm bán chạy</h2>
                <ul class="product_list_widget">
                    <?php foreach ($products as $row) : ?>
                        <li>
                            <a href="<?= url_product($row->id) ?>">
                                <img width="100" height="100" src="<?= base_url(isset($row->image->src) ? $row->image->src : "assets/images/placeholder.png") ?>" class="attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail" alt="<?= $row->{pick_language($row)} ?>">
                                <span class="product-title"><?= $row->{pick_language($row)} ?></span>
                            </a>
                            <span class="woocommerce-Price-amount amount"><?= number_format($row->price, 0, ",", ".") ?>&nbsp;<span class="woocommerce-Price-currencySymbol">₫</span></span>
                        </li>
                    <?php endforeach ?>

                </ul>
            </li>
        </ul>
    </div>
</div>