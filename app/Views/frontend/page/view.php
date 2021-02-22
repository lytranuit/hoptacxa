<?= $this->extend('frontend/layouts/main') ?>


<?= $this->section('content') ?>
<div id="content" role="main" class="content-area">
    <div class="banner has-hover" id="banner-646177447">
        <div class="banner-inner fill">
            <div class="banner-bg fill">
                <div class="bg fill bg-fill  bg-loaded"></div>
                <div class="overlay"></div>
            </div><!-- bg-layers -->
            <div class="banner-layers container">
                <div class="fill banner-link"></div>
                <div id="text-box-393876737" class="text-box banner-layer x50 md-x50 lg-x50 y50 md-y50 lg-y50 res-text">
                    <div class="text dark">

                        <div class="text-inner text-center">

                            <h3 class="uppercase"><strong><?= $info->{pick_language($info, "title_")} ?></strong></h3>
                        </div>
                    </div><!-- text-box-inner -->

                    <style scope="scope">
                        #text-box-393876737 {
                            width: 60%;
                        }

                        #text-box-393876737 .text {
                            font-size: 100%;
                        }
                    </style>
                </div><!-- text-box -->

            </div><!-- .banner-layers -->
        </div><!-- .banner-inner -->


        <style scope="scope">
            #banner-646177447 {
                padding-top: 300px;
            }

            #banner-646177447 .bg.bg-loaded {
                background-image: url(https://gaoquy.vn/wp-content/uploads/2019/04/bai-viet-3.jpg);
            }

            #banner-646177447 .overlay {
                background-color: rgba(0, 0, 0, .5);
            }

            #banner-646177447 .bg {
                background-position: 69% 29%;
            }
        </style>
    </div><!-- .banner -->


    <div class="row" id="row-1119646710">
        <div class="col small-12 large-12">
            <div class="col-inner">
                <?= $info->{pick_language($info, "content_")} ?>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>


<?= $this->section("style") ?>

<?= $this->endSection() ?>

<?= $this->section("script") ?>
<script>
    $(document).ready(function() {
        // slide: home products
        //$('.content--slide-images-2').slick({
        //    slidesToShow: 4,
        //    slidesToScroll: 1,
        //    arrows: true,
        //    prevArrow: '<span class="c-slider__arrow c-slider__arrow--prev"><i class="fas fa-chevron-left"></i></span>',
        //    nextArrow: '<span class="c-slider__arrow c-slider__arrow--next"><i class="fas fa-chevron-right"></i></span>',
        //    responsive: [{
        //            breakpoint: 1024,
        //            settings: {
        //                slidesToShow: 4,
        //            }
        //        },
        //        {
        //            breakpoint: 768,
        //            settings: {
        //                slidesToShow: 3,
        //            }
        //        },
        //        {
        //            breakpoint: 480,
        //            settings: {
        //                slidesToShow: 2,
        //            }
        //        }
        //    ],
        //});
        //// slide: home products
        //$('.c-slider--products--related').slick({
        //    slidesToShow: 5,
        //    slidesToScroll: 1,
        //    arrows: true,
        //    prevArrow: '<span class="c-slider__arrow c-slider__arrow--prev"><i class="fas fa-chevron-left"></i></span>',
        //    nextArrow: '<span class="c-slider__arrow c-slider__arrow--next"><i class="fas fa-chevron-right"></i></span>',
        //    responsive: [{
        //            breakpoint: 1024,
        //            settings: {
        //                slidesToShow: 4,
        //            }
        //        },
        //        {
        //            breakpoint: 768,
        //            settings: {
        //                slidesToShow: 3,
        //            }
        //        },
        //        {
        //            breakpoint: 480,
        //            settings: {
        //                slidesToShow: 2,
        //            }
        //        }
        //    ],
        //});
    })
</script>
<?= $this->endSection() ?>