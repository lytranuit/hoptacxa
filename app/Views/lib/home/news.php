

<section class="section" id="section_356315474">
    <div class="bg section-bg fill bg-fill  bg-loaded">


        <div class="section-bg-overlay absolute fill"></div>


    </div>
    <!-- .section-bg -->

    <div class="section-content relative">

        <div class="row" id="row-306048634">
            <div class="col small-12 large-12">
                <div class="col-inner text-center" style="margin:0px 0px -60px 0px;">
                    <h2 class="uppercase"><strong>Bếp gạo</strong></h2>

                    <p><img class="aligncenter wp-image-907 " src="<?= base_url("assets/images/bong-lua-300x97.png") ?>" alt="" width="220" height="71"></p>
                    <p>Cập nhật những bài viết hữu ích giúp bữa ăn thêm sức khoẻ và ngon hơn</p>


                    <div class="row large-columns-3 medium-columns-1 small-columns-1 slider row-slider slider-nav-simple slider-nav-outside slider-nav-push flickity-enabled is-draggable slider-lazy-load-active">
                        <div class="c-slider--news">

                            <?php foreach ($news as $row) : ?>
                                <div class="col post-item">
                                    <div class="col-inner">
                                        <a href="<?= url_news($row->id) ?>" class="plain">
                                            <div class="box box-normal box-text-bottom box-blog-post has-hover">
                                                <div class="box-image">
                                                    <div class="image-zoom image-cover" style="padding-top:56.25%;">
                                                        <img width="560" height="350" src="<?= base_url(isset($row->image->src) ? $row->image->src : "assets/images/placeholder.png") ?>" class="attachment-medium size-medium wp-post-image" alt="">
                                                    </div>
                                                </div>
                                                <!-- .box-image -->
                                                <div class="box-text text-center">
                                                    <div class="box-text-inner blog-post-inner">


                                                        <h5 class="post-title is-large "><?= $row->{pick_language($row, 'title_')} ?></h5>
                                                        <div class="is-divider"></div>
                                                        <p class="from_the_blog_excerpt "><?= split_string($row->{pick_language($row, 'content_')}, 50) ?></p>



                                                    </div>
                                                    <!-- .box-text-inner -->
                                                </div>
                                                <!-- .box-text -->
                                            </div>
                                            <!-- .box -->
                                        </a>
                                        <!-- .link -->
                                    </div>
                                    <!-- .col-inner -->
                                </div>
                            <?php endforeach ?>
                        </div>
                        <div class="home-section__footer">
                            <div class="text-center">
                                <a href="<?= url_news_list(0) ?>" class="button primary is-gloss">Xem thêm</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .section-content -->


        <style scope="scope">
            #section_356315474 {
                padding-top: 30px;
                padding-bottom: 30px;
            }

            #section_356315474 .section-bg-overlay {
                background-color: rgba(255, 255, 255, .5);
            }
        </style>
</section>