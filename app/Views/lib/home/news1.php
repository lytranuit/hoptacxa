<div class="col-inner tin-tuc" style="margin:0px 0px -50px 0px;">
    <h2>TIN TỨC / SỰ KIỆN</h2>
    <div class="is-divider divider clearfix" style="max-width:60px;background-color:rgb(246, 184, 51);"></div>
    <!-- .divider -->


    <div class="row large-columns-1 medium-columns-1 small-columns-1 row-collapse">
        <?php foreach ($news as $row) : ?>
            <div class="col post-item">
                <div class="col-inner">
                    <a href="<?= url_news($row->id) ?>" class="plain">
                        <div class="box box-vertical box-text-bottom box-blog-post has-hover">
                            <div class="box-image" style="width:29%;">
                                <div class="image-cover">
                                    <img width="560" height="350" src="<?= base_url(isset($row->image->src) ? $row->image->src : "assets/images/placeholder.png") ?>" class="attachment-medium size-medium wp-post-image lazy-load-active" alt="">
                                </div>
                            </div>
                            <!-- .box-image -->
                            <div class="box-text text-left is-large">
                                <div class="box-text-inner blog-post-inner">


                                    <h5 class="post-title is-large "><?= $row->{pick_language($row, 'title_')} ?></h5>
                                    <div class="is-divider"></div>
                                    <p class="from_the_blog_excerpt "><?= split_string($row->{pick_language($row, 'content_')}, 100) ?></p>
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
</div>
<style>
    .tin-tuc .image-cover {
        padding-top: 100%;
    }

    @media only screen and (max-width: 600px) {
        .tin-tuc .image-cover {
            padding-top: 56%;
        }
    }
</style>