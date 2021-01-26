<?= $this->extend('frontend/layouts/main') ?>


<?= $this->section('content') ?>
<?= view_cell("\App\Libraries\HomeWidget::slider") ?>
<?= view_cell("\App\Libraries\HomeWidget::category") ?>

<?= view_cell("\App\Libraries\HomeWidget::product") ?>
<?= view_cell("\App\Libraries\HomeWidget::news") ?>




<?= $this->endSection() ?>



<?= $this->section("script") ?>
<script>
    $(document).ready(function() {
        // slide: home banners
        $('.c-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true,
            arrows: true,
            prevArrow: '<span class="c-slider__arrow c-slider__arrow--prev"><i class="fas fa-chevron-left"></i></span>',
            nextArrow: '<span class="c-slider__arrow c-slider__arrow--next"><i class="fas fa-chevron-right"></i></span>',
        });

        $('.c-home-app').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true,
            arrows: true,
            prevArrow: '<span class="c-slider__arrow c-slider__arrow--prev"><i class="fas fa-chevron-left"></i></span>',
            nextArrow: '<span class="c-slider__arrow c-slider__arrow--next"><i class="fas fa-chevron-right"></i></span>',
        });
        // slide: home products
        $('.c-slider--products').slick({
            rows: 2,
            slidesPerRow: 5,
            arrows: true,
            prevArrow: '<span class="c-slider__arrow c-slider__arrow--prev"><i class="fas fa-chevron-left"></i></span>',
            nextArrow: '<span class="c-slider__arrow c-slider__arrow--next"><i class="fas fa-chevron-right"></i></span>',
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesPerRow: 4,
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesPerRow: 3,
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesPerRow: 2,
                    }
                }
            ],
        });

        // slide: home products
        $('.c-slider--news').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            arrows: true,
            prevArrow: '<span class="c-slider__arrow c-slider__arrow--prev"><i class="fas fa-chevron-left"></i></span>',
            nextArrow: '<span class="c-slider__arrow c-slider__arrow--next"><i class="fas fa-chevron-right"></i></span>',
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 4,
                    }
                },
                {
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
        // slide: home products
        $('.c-slider--account').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: true,
            prevArrow: '<span class="c-slider__arrow c-slider__arrow--prev"><i class="fas fa-chevron-left"></i></span>',
            nextArrow: '<span class="c-slider__arrow c-slider__arrow--next"><i class="fas fa-chevron-right"></i></span>',
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 4,
                    }
                },
                {
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
    });
</script>
<?= $this->endSection() ?>