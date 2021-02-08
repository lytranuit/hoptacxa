<?php foreach ($products as $row) : ?>

    <div class="product-small col has-hover product type-product post-1402 status-publish first instock product_cat-gao-trang product_tag-gao-lut product_tag-gao-lut-den has-post-thumbnail shipping-taxable purchasable product-type-variable has-default-attributes">
        <div class="col-inner">
            <div class="badge-container absolute left top z-1">
            </div>
            <div class="product-small box ">
                <div class="box-image">
                    <div class="image-none">
                        <a href="<?= url_product($row->id); ?>">
                            <img width="300" height="300" src="<?= base_url(isset($row->image->src) ? $row->image->src : "assets/images/placeholder.png") ?>" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="Gạo bán lứt đài thơm"> </a>
                    </div>
                    <div class="image-tools is-small top right show-on-hover">
                    </div>
                    <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                    </div>
                    <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                    </div>
                </div><!-- box-image -->

                <div class="box-text box-text-products text-center grid-style-2">
                    <div class="price-wrapper">
                        <span class="price"><span class="woocommerce-Price-amount amount"><?= number_format($row->price, 0, ",", ".") ?>&nbsp;<span class="woocommerce-Price-currencySymbol">₫</span></span></span>
                    </div>
                    <div class="title-wrapper">
                        <p class="name product-title"><a href="<?= url_product($row->id); ?>"><?= $row->{pick_language($row, 'name_')} ?></a></p>
                    </div>
                    <div class="add-to-cart-button"><a href="<?= url_product($row->id); ?>" rel="nofollow" data-product_id="1402" class=" add_to_cart_button product_type_variable button primary is-outline mb-0 is-small">Mua hàng</a></div>
                </div><!-- box-text -->
            </div><!-- box -->
        </div><!-- .col-inner -->
    </div><!-- col -->

<?php endforeach ?>