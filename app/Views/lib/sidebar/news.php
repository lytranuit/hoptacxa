<aside id="flatsome_recent_posts-4" class="widget flatsome_recent_posts"> <span class="widget-title "><span>Bài viết mới nhất</span></span>
    <div class="is-divider small"></div>
    <ul>
        <?php foreach ($news as $row) : ?>
            <li class="recent-blog-posts-li">
                <div class="flex-row recent-blog-posts align-top pt-half pb-half">
                    <div class="flex-col mr-half">
                        <div class="badge post-date  badge-square">
                            <div class="badge-inner bg-fill" style="background: url(<?= base_url(isset($row->image->src) ? $row->image->src : "assets/images/placeholder.png") ?>); border:0;">
                            </div>
                        </div>
                    </div><!-- .flex-col -->
                    <div class="flex-col flex-grow">
                        <a href="<?= url_news($row->id) ?>" title="<?= $row->{pick_language($row, 'title_')} ?>"><?= $row->{pick_language($row, 'title_')} ?></a>
                    </div>
                </div><!-- .flex-row -->
            </li>


        <?php endforeach ?>
    </ul>
</aside>