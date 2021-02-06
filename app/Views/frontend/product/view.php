<?= $this->extend('frontend/layouts/main') ?>


<?= $this->section('content') ?>

<div class="page-title shop-page-title product-page-title">
    <div class="page-title-inner flex-row medium-flex-wrap container">
        <div class="flex-col flex-grow medium-text-center">
            <div class="is-small">
                <nav class="woocommerce-breadcrumb breadcrumbs">
                    <a href="<?= base_url() ?>">Trang chủ</a> <span class="divider">/</span>
                    <span><?= $info->{pick_language($info, "name_")} ?></span>
                </nav>
            </div>
        </div><!-- .flex-left -->

        <div class="flex-col medium-text-center">
        </div><!-- .flex-right -->
    </div><!-- flex-row -->
</div>
<div class="shop-container">

    <div class="container">
        <div class="woocommerce-notices-wrapper"></div>
    </div><!-- /.container -->
    <div id="product-1420" class="product type-product post-1420 status-publish first instock product_cat-gao-trang product_tag-gao-lut product_tag-gao-lut-den has-post-thumbnail shipping-taxable purchasable product-type-variable has-default-attributes">
        <div class="row content-row row-divided row-large row-reverse">

            <?= $this->include('frontend/layouts/_right') ?>
           
            <div class="col large-9">
                <div class="product-main">
                    <div class="row">
                        <div class="large-6 col">
                            <div class="slider-for">
                                <div class="item">
                                    <a data-fancybox="gallery" href="<?= base_url(isset($info->image->src) ? $info->image->src : "assets/images/placeholder.png") ?>" class="fancybox d-flex">
                                        <img class="product-featured-image img-responsive mx-auto" src="<?= base_url(isset($info->image->src) ? $info->image->src : "assets/images/placeholder.png") ?>">
                                    </a>
                                </div>
                                <?php if (!empty($info->image_other)) : ?>
                                    <?php foreach ($info->image_other as $row) : ?>
                                        <div class="item">
                                            <a data-fancybox="gallery" href="<?= base_url(isset($row->src) ? $row->src : "assets/images/placeholder.png") ?>" class="fancybox d-flex">
                                                <img class="product-featured-image img-responsive mx-auto" src="<?= base_url(isset($row->src) ? $row->src : "assets/images/placeholder.png") ?>">
                                            </a>
                                        </div>
                                    <?php endforeach ?>
                                <?php endif ?>
                            </div>
                            <?php if (!empty($info->image_other)) : ?>
                                <div class="slider-nav" style="margin-top: 10px;">
                                    <div class="item" style="margin:5px;">
                                        <a href="javascript:void(0)">
                                            <img class="img-responsive" style="height:75px;width:75px" src="<?= base_url(isset($info->image->src) ? $info->image->src : "assets/images/placeholder.png") ?>">
                                        </a>
                                    </div>

                                    <?php foreach ($info->image_other as $row) : ?>
                                        <div class="item" style="margin:5px;">
                                            <a href="javascript:void(0)" data-image="<?= base_url(isset($row->src) ? $row->src : "assets/images/placeholder.png") ?>" data-zoom-image="<?= base_url(isset($row->src) ? $row->src : "assets/images/placeholder.png") ?>">
                                                <img class="img-responsive" style="height:75px;width:75px" src="<?= base_url(isset($row->src) ? $row->src : "assets/images/placeholder.png") ?>">
                                            </a>
                                        </div>
                                    <?php endforeach ?>

                                </div>
                            <?php endif ?>
                        </div>


                        <div class="product-info summary entry-summary col col-fit product-summary">
                            <h1 class="product-title product_title entry-title">
                                <?= $info->{pick_language($info, "name_")} ?></h1>

                            <div class="price-wrapper">
                                <p class="price product-page-price ">
                                    <span class="woocommerce-Price-amount amount"><?= number_format($info->price, 0, ",", ".") ?>&nbsp;<span class="woocommerce-Price-currencySymbol">₫</span></span>
                                </p>
                            </div>
                            <div class="product-short-description">
                                <?= $info->{pick_language($info, "description_")} ?>
                            </div>
                            <div class="product_meta">



                                <span class="sku_wrapper">Mã: <span class="sku" data-o_content="GBL001-1"> <?= $info->code ?></span></span>


                                <span class="posted_in">Danh mục:
                                    <?php foreach ($info->categories as $row) : ?>
                                        <a href="<?= url_product_list($row->id) ?>" rel="tag"><?= $row->{pick_language($row)} ?></a>,
                                    <?php endforeach ?>
                                </span>

                            </div>
                            <div class="woocommerce-variation-add-to-cart variations_button woocommerce-variation-add-to-cart-enabled">

                                <div class="quantity buttons_added">
                                    <input type="button" value="-" class="minus button is-form">
                                    <input type="number" id="quantity_601a5e016510a" class="input-text qty text" step="1" min="1" max="" name="quantity" value="1" title="SL" size="4" inputmode="numeric">
                                    <input type="button" value="+" class="plus button is-form">
                                </div>

                                <button type="submit" class="single_add_to_cart_button button alt">Mua hàng</button>
                            </div>
                        </div><!-- .summary -->
                    </div><!-- .row -->
                </div><!-- .product-main -->
                <div class="product-footer">
                    <div class="product-page-accordian">
                        <div class="accordion" rel="1">
                            <?php if ($info->{pick_language($info, "element_")} != "") : ?>
                                <div class="accordion-item">
                                    <a class="accordion-title plain" href="javascript:void();">
                                        <button class="toggle"><i class="icon-angle-down"></i></button>
                                        Thành phần </a>
                                    <div class="accordion-inner">
                                        <?= $info->{pick_language($info, "element_")}  ?>
                                    </div>
                                </div><!-- accordion-item -->
                            <?php endif ?>
                            <?php if ($info->{pick_language($info, "uses_")} != "") : ?>
                                <div class="accordion-item">
                                    <a class="accordion-title plain" href="javascript:void();">
                                        <button class="toggle"><i class="icon-angle-down"></i></button>
                                        Công dụng </a>
                                    <div class="accordion-inner">
                                        <?= $info->{pick_language($info, "uses_")}  ?>
                                    </div>
                                </div><!-- accordion-item -->
                            <?php endif ?>
                            <?php if ($info->{pick_language($info, "guide_")} != "") : ?>
                                <div class="accordion-item">
                                    <a class="accordion-title plain" href="javascript:void();">
                                        <button class="toggle"><i class="icon-angle-down"></i></button>
                                        Hướng dẫn sử dụng </a>
                                    <div class="accordion-inner">
                                        <?= $info->{pick_language($info, "guide_")}  ?>
                                    </div>
                                </div><!-- accordion-item -->
                            <?php endif ?>
                        </div>
                    </div>
                    <div class="related related-products-wrapper product-section">

                        <h3 class="product-section-title container-width product-section-title-related pt-half pb-half uppercase">
                            Sản phẩm tương tự </h3>


                        <div class="row large-columns-4 medium-columns- small-columns-2 row-small c-slider--products--related">


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
                    </div>

                </div>

            </div><!-- col large-9 -->

        </div><!-- .row -->
    </div>


</div>
<?= $this->endSection() ?>




<?= $this->section("style") ?>

<?= $this->endSection() ?>
<?= $this->section("script") ?>
<script>
    $(document).ready(function() {
        // slide: home products
        $('.c-slider--products--related').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: true,
            prevArrow: '<span class="c-slider__arrow c-slider__arrow--prev"><i class="fas fa-chevron-left"></i></span>',
            nextArrow: '<span class="c-slider__arrow c-slider__arrow--next"><i class="fas fa-chevron-right"></i></span>',
            responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                    }
                }
            ],
        });
        $('.slider-for').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            swipe: false,
            fade: true,
            adaptiveHeight: true,
            asNavFor: '.slider-nav'

        });
        $('.slider-nav').slick({
            infinite: true,
            slidesToShow: 5,
            slidesToScroll: 1,
            swipe: false,
            asNavFor: '.slider-for',
            dots: false,
            focusOnSelect: true,

            prevArrow: '<span class="c-slider__arrow c-slider__arrow--prev"><i class="fas fa-chevron-left"></i></span>',
            nextArrow: '<span class="c-slider__arrow c-slider__arrow--next"><i class="fas fa-chevron-right"></i></span>',
        });
    })
</script>
<?= $this->endSection() ?>