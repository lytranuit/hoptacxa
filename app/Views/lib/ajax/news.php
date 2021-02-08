<?php foreach ($news as $row) : ?>
    
    <div class="col post-item">
        <div class="col-inner">
            <a href="<?= url_news($row->id) ?>" class="plain">
                <div class="box box-normal box-text-bottom box-blog-post has-hover">
                    <div class="box-image">
                        <div class="image-cover" style="padding-top:350px;">
                            <img width="560" height="350" src="<?= base_url(isset($row->image->src) ? $row->image->src : "assets/images/placeholder.png") ?>" class="attachment-medium size-medium wp-post-image lazy-load-active" alt="">
                        </div>
                    </div><!-- .box-image -->
                    <div class="box-text text-left">
                        <div class="box-text-inner blog-post-inner">


                            <h5 class="post-title is-large "><?= $row->{pick_language($row, 'title_')} ?></h5>
                            <div class="is-divider"></div>
                            <p class="from_the_blog_excerpt "><?= split_string($row->{pick_language($row, 'content_')}, 200) ?></p>

                            <button href="<?= url_news($row->id) ?>" class="button  is-gloss is-small mb-0">
                                Xem chi tiết </button>
                        </div><!-- .box-text-inner -->
                    </div><!-- .box-text -->
                </div><!-- .box -->
            </a><!-- .link -->
        </div><!-- .col-inner -->
    </div><!-- .col -->
<?php endforeach ?>