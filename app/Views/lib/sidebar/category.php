<aside id="woocommerce_product_categories-3" class="widget woocommerce widget_product_categories"><span class="widget-title shop-sidebar">Danh mục sản phẩm</span>
    <div class="is-divider small"></div>
    <ul class="product-categories">
        <?php foreach ($categories as $row) : ?>
            <li class="cat-item"><a href="<?= url_product_list($row->id) ?>"><?= $row->{pick_language($row)} ?></a></li>
        <?php endforeach ?>
    </ul>
</aside>