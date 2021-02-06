<?= $this->extend('frontend/layouts/main') ?>


<?= $this->section('content') ?>

<div id="content" class="blog-wrapper blog-single page-wrapper">

    <div class="row row-large row-divided ">

        <?= $this->include('frontend/layouts/_left') ?>

        <div class="large-9 col medium-col-first">

            <article id="post-1371" class="post-1371 post type-post status-publish format-standard has-post-thumbnail hentry category-suc-khoe">
                <div class="article-inner ">
                    <header class="entry-header">
                        <div class="entry-header-text entry-header-text-top text-left">
                            <h1 class="entry-title"><?= $info->{pick_language($info, "title_")} ?></h1>
                            <div class="entry-divider is-divider small"></div>

                            <div class="entry-meta uppercase is-xsmall">
                                <span class="posted-on">Posted on <time><?= date("Y-m-d", strtotime($info->date)) ?></time></span>
                                <span class="byline"> by admin</span>
                            </div><!-- .entry-meta -->
                        </div><!-- .entry-header -->

                    </header><!-- post-header -->
                    <div class="entry-content single-page">
                        <?= $info->{pick_language($info, "content_")} ?>
                        
                    </div><!-- .entry-content2 -->



                </div><!-- .article-inner -->
            </article><!-- #-1371 -->
        </div> <!-- .large-9 -->
    </div><!-- .row -->
</div>
<?= $this->endSection() ?>



<?= $this->section("style") ?>

<?= $this->endSection() ?>
<?= $this->section("script") ?>
<script>
    $(document).ready(function() {
        // slide: home products
        $('.c-slider--news--related').slick({
            slidesToShow: 5,
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
    })
</script>
<?= $this->endSection() ?>