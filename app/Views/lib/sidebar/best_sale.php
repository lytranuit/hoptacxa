<aside id="woocommerce_products-5" class="widget woocommerce widget_products"><span class="widget-title shop-sidebar">Sản phẩm bán chạy nhất</span>
    <div class="is-divider small"></div>
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
</aside>