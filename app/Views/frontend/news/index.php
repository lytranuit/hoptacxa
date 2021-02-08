<?= $this->extend('frontend/layouts/main') ?>


<?= $this->section('content') ?>
<div class="banner has-hover" id="banner-500135139">
    <div class="banner-inner fill">
        <div class="banner-bg fill">
            <div class="bg fill bg-fill  bg-loaded"></div>
            <div class="overlay"></div>
        </div><!-- bg-layers -->
        <div class="banner-layers container">
            <div class="fill banner-link"></div>
            <div id="text-box-117304511" class="text-box banner-layer x50 md-x50 lg-x50 y50 md-y50 lg-y50 res-text">
                <div class="text dark">

                    <div class="text-inner text-center">

                        <h2 class="uppercase">
                            <?php if (isset($tag)) : ?>
                                <?= $tag->{pick_language($tag, "name_")} ?>
                            <?php else: ?>
                                Bếp Gạo
                            <?php endif ?>
                        </h2>
                    </div>
                </div><!-- text-box-inner -->

                <style scope="scope">
                    #text-box-117304511 {
                        width: 60%;
                    }

                    #text-box-117304511 .text {
                        font-size: 100%;
                    }
                </style>
            </div><!-- text-box -->

        </div><!-- .banner-layers -->
    </div><!-- .banner-inner -->


    <style scope="scope">
        #banner-500135139 {
            padding-top: 150px;
        }

        #banner-500135139 .bg.bg-loaded {
            background-image: url(<?= base_url("assets/images/bep-gao-1024x440.jpg") ?>);
        }

        #banner-500135139 .overlay {
            background-color: rgba(0, 0, 0, .5);
        }

        #banner-500135139 .bg {
            background-position: 45% 0%;
        }


        @media (min-width:550px) {

            #banner-500135139 {
                padding-top: 300px;
            }

        }
    </style>
</div>
<div class="row row-small" id="row-1501562783">
    <div class="col medium-9 small-12 large-9 small-col-first">
        <div class="col-inner" style="background-color:rgb(249, 249, 249);padding:10px 10px 0px 10px;margin:0px 0px -50px 0px;">
            <div class="row" id="row-1534967448">
                <div class="col small-12 large-12">
                    <div class="col-inner">
                        <div class="row large-columns-1 medium-columns-1 small-columns-1" id="list-products">

                        </div>
                        <div class="c-more-products col small-12 large-12" id="button-load-more">
                            <div class="text-center"><a href="javascript:;void(0)" class="button is-gloss is-small mb-0">Xem thêm</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?= $this->include('frontend/layouts/_right') ?>

</div>
<?= $this->endSection() ?>

<?= $this->section("script") ?>
<script>
    var tag_id = <?= $tag_id ?>;
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
        let keyword = $("#input-search-product").val();
        $.ajax({
            url: path + "ajax/news",
            data: {
                tag_id: tag_id,
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