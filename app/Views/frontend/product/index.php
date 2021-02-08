<?= $this->extend('frontend/layouts/main') ?>


<?= $this->section('content') ?>

<div class="shop-page-title category-page-title page-title ">

    <div class="page-title-inner flex-row  medium-flex-wrap container">
        <div class="flex-col flex-grow medium-text-center">
            <div class="is-small">
                <nav class="woocommerce-breadcrumb breadcrumbs">
                    <a href="<?= base_url() ?>">Trang chủ</a>

                    <span class="divider">/</span>
                    <?php if (isset($category)) : ?>
                        <?= $category->{pick_language($category, "name_")} ?>
                    <?php else : ?>
                        Sản phẩm
                    <?php endif ?>
                </nav>
            </div>
        </div><!-- .flex-left -->

    </div><!-- flex-row -->
</div>
<main id="main" class="">
    <div class="row category-page-row">
        <?= $this->include('frontend/layouts/_left') ?>
        <div class="col large-9">
            <div class="shop-container">
                <div class="term-description">
                    <?php if (isset($category)) : ?>
                        <?= $category->{pick_language($category, "content_")} ?>
                    <?php endif ?>
                </div>
                <div class="woocommerce-notices-wrapper"></div>
                <div class="products row row-small large-columns-3 medium-columns-2 small-columns-1" id="list-products">

                </div>
                <div class="c-more-products col small-12 large-12" id="button-load-more">
                    <div class="text-center"><a href="javascript:;void(0)" class="button is-gloss is-small mb-0">Xem thêm</a>
                    </div>
                </div>
                <div class="products row row-small large-columns-3 medium-columns-2 small-columns-1">

                </div><!-- row -->
            </div><!-- shop container -->
        </div>
    </div>
</main>
<?= $this->endSection() ?>

<?= $this->section("script") ?>
<script>
    var category_id = <?= $category_id ?>;
    var keyword = '<?= $keyword ?>';
    var offset = 0;
    var limit = 20;
    $(document).ready(function() {
        getmore();
        $(".c-categorybar__toggle").click(function() {
            offset = 0;
            $("#list-products").empty();
            getmore();
        });
        $(".btn-see-more").click(function() {
            getmore();
        });
        $('#input-search-product').keypress(function(e) {
            if (e.which == 13) {
                $(".c-categorybar__toggle").trigger("click");
                return false; //<---- Add this line
            }
        });
    })

    function getmore() {
        //let keyword = $("#input-search-product").val();
        $.ajax({
            url: path + "ajax/product",
            data: {
                category_id: category_id,
                limit: limit,
                offset: offset,
                keyword: keyword
            },
            success: function(data) {
                $("#list-products").append(data);
                //var data_parse = $.parseHTML("<div>" + data + "</div>");
                //let count = $(".item-product", data_parse).length;
                offset += limit;
            }
        })
    }
</script>
<?= $this->endSection() ?>