<section class="section" id="section_629903346">
    <div class="bg section-bg fill bg-fill  bg-loaded">
    </div>
    <!-- .section-bg -->

    <div class="section-content relative">

        <div class="row" id="row-861438534">
            <div class="col small-12 large-12">
                <div class="col-inner text-center" style="margin:0px 0px -50px 0px;">
                    <h3 class="thin-font">Sản phẩm</h3>
                    <h2 class="uppercase"><strong>Gạo đất phú</strong></h2>

                    <p><img class="aligncenter wp-image-907 " src="<?= base_url("assets/images/bong-lua-300x97.png") ?>" alt="" width="220" height="71"></p>
                    <p>Gạo sạch được trồng theo hướng hữu cơ – khép kín từ lúa tươi ra gạo thành phẩm, được kiểm soát chất lượng, và đóng gói vệ sinh an toàn thực phẩm.</p>


                    <div class="row large-columns-4 medium-columns- small-columns-2 row-small">


                        <?php foreach ($products as $row) : ?>
                            <div class="product-small col has-hover product type-product post-1420 status-publish first instock product_cat-gao-trang product_tag-gao-lut product_tag-gao-lut-den has-post-thumbnail shipping-taxable purchasable product-type-variable has-default-attributes">
                                <div class="col-inner">

                                    <div class="badge-container absolute left top z-1">
                                    </div>
                                    <div class="product-small box ">
                                        <div class="box-image">
                                            <div class="image-none">
                                                <a href="<?= url_product($row->id) ?>">
                                                    <img style="max-height:240px" src="<?= base_url(isset($row->image->src) ? $row->image->src : "assets/images/placeholder.png") ?>" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="<?= $row->{pick_language($row, 'name_')} ?>" sizes="(max-width: 300px) 100vw, 300px">
                                                </a>
                                            </div>
                                            <div class="image-tools is-small top right show-on-hover">
                                            </div>
                                            <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                                            </div>
                                            <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                            </div>
                                        </div>
                                        <!-- box-image -->

                                        <div class="box-text box-text-products text-center grid-style-2">
                                            <div class="price-wrapper">
                                                <span class="price"><span class="woocommerce-Price-amount amount"><?= number_format($row->price, 0, ",", ".") ?>&nbsp;<span class="woocommerce-Price-currencySymbol">₫</span></span>
                                                </span>
                                            </div>
                                            <div class="title-wrapper">
                                                <p class="name product-title"><a href="<?= url_product($row->id) ?>"><?= $row->{pick_language($row, 'name_')} ?></a></p>
                                            </div>
                                            <div class="add-to-cart-button"><a href="<?= url_product($row->id) ?>" rel="nofollow" data-product_id="1420" class=" add_to_cart_button product_type_variable button primary is-outline mb-0 is-small">Mua hàng</a></div>
                                        </div>
                                        <!-- box-text -->
                                    </div>
                                    <!-- box -->
                                </div>
                                <!-- .col-inner -->
                            </div>
                            <!-- col -->
                        <?php endforeach  ?>
                    </div>
                    <div class="text-center">
                        <a href="<?= url_product_list(0) ?>" class="button primary is-gloss">Xem thêm</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .section-content -->


    <style scope="scope">
        #section_629903346 {
            padding-top: 30px;
            padding-bottom: 30px;
        }
    </style>
</section>