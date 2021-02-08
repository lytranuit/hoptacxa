<!-- .header-main -->
<div id="wide-nav" class="header-bottom wide-nav hide-for-sticky hide-for-medium">
    <div class="flex-row container">

        <div class="flex-col hide-for-medium flex-left">
            <ul class="nav header-nav header-bottom-nav nav-left  nav-uppercase">
                <div id="mega-menu-wrap-primary" class="mega-menu-wrap">
                    <div class="mega-menu-toggle">
                        <div class="mega-toggle-blocks-left"></div>
                        <div class="mega-toggle-blocks-center"></div>
                        <div class="mega-toggle-blocks-right">
                            <div class="mega-toggle-block mega-menu-toggle-block mega-toggle-block-1" id="mega-toggle-block-1" tabindex="0"><span class="mega-toggle-label" role="button" aria-expanded="false"><span class="mega-toggle-label-closed">MENU</span><span class="mega-toggle-label-open">MENU</span></span>
                            </div>
                        </div>
                    </div>
                    <ul id="mega-menu-primary" class="mega-menu max-mega-menu mega-menu-horizontal" data-event="hover" data-effect="fade_up" data-effect-speed="200" data-effect-mobile="disabled" data-effect-speed-mobile="0" data-mobile-force-width="false" data-second-click="go" data-document-click="collapse" data-vertical-behaviour="standard" data-breakpoint="600" data-unbind="true">
                        <?php foreach ($menus as $row) : ?>
                            <li class="mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-item-has-children mega-align-bottom-left mega-menu-flyout mega-menu-item-195" id="mega-menu-item-195">
                                <?php if ($row->type == 1) : ?>
                                    <a href="<?= $row->link ?>" class='mega-menu-link'>
                                        <?= $row->{pick_language($row, 'name_')} ?>
                                        <?php if (!empty($row->child)) : ?>
                                            <span class="mega-indicator"></span>
                                        <?php endif ?>
                                    </a>
                                <?php elseif ($row->type == 2) : ?>
                                    <a href="<?= url_product_list($row->category_id) ?>" class='mega-menu-link'>
                                        <?= $row->{pick_language($row, 'name_')} ?>
                                        <?php if (!empty($row->child)) : ?>
                                            <span class="mega-indicator"></span>
                                        <?php endif ?>
                                    </a>
                                <?php elseif ($row->type == 3) : ?>

                                    <a href="<?= url_news_list($row->category_id) ?>" class='mega-menu-link'>
                                        <?= $row->{pick_language($row, 'name_')} ?>
                                        <?php if (!empty($row->child)) : ?>
                                            <span class="mega-indicator"></span>
                                        <?php endif ?>
                                    </a>
                                <?php elseif ($row->type == 4) : ?>
                                    <?php if ($row->category_id == 0) : ?>
                                        <a href="<?= url_page_list($row->category_id) ?>" class='mega-menu-link'>
                                            <?= $row->{pick_language($row, 'name_')} ?>
                                            <?php if (!empty($row->child)) : ?>
                                                <span class="mega-indicator"></span>
                                            <?php endif ?>
                                        </a>
                                    <?php else : ?>
                                        <a href="<?= url_page($row->category_id) ?>" class='mega-menu-link'>
                                            <?= $row->{pick_language($row, 'name_')} ?>
                                            <?php if (!empty($row->child)) : ?>
                                                <span class="mega-indicator"></span>
                                            <?php endif ?>
                                        </a>
                                    <?php endif ?>
                                <?php endif ?>
                                <?php if (!empty($row->child)) : ?>
                                    <ul class="mega-sub-menu">
                                        <?php foreach ($row->child as $child) : ?>
                                            <li class="mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-item-997" id="mega-menu-item-997">
                                                <?php if ($child->type == 1) : ?>
                                                    <a href="<?= $child->link ?>" class='mega-menu-link'><?= $child->{pick_language($child, 'name_')} ?></a>
                                                <?php elseif ($child->type == 2) : ?>
                                                    <a href="<?= url_product_list($child->category_id) ?>" class='mega-menu-link'><?= $child->{pick_language($child, 'name_')} ?></a>
                                                <?php elseif ($child->type == 3) : ?>

                                                    <a href="<?= url_news_list($child->category_id) ?>" class='mega-menu-link'><?= $child->{pick_language($child, 'name_')} ?></a>
                                                <?php elseif ($child->type == 4) : ?>
                                                    <?php if ($child->category_id == 0) : ?>
                                                        <a href="<?= url_page_list($child->category_id) ?>" class='mega-menu-link'><?= $child->{pick_language($child, 'name_')} ?></a>
                                                    <?php else : ?>
                                                        <a href="<?= url_page($child->category_id) ?>" class='mega-menu-link'><?= $child->{pick_language($child, 'name_')} ?></a>
                                                    <?php endif ?>
                                                <?php endif ?>
                                            </li>
                                        <?php endforeach ?>
                                    </ul>
                                <?php endif ?>
                            </li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </ul>
        </div>
        <!-- flex-col -->


        <div class="flex-col hide-for-medium flex-right flex-grow">
            <ul class="nav header-nav header-bottom-nav nav-right  nav-uppercase">
                <li class="header-search-form search-form html relative has-icon">
                    <div class="header-search-form-wrapper">
                        <div class="searchform-wrapper ux-search-box relative form-flat is-normal">
                            <form role="search" method="get" class="searchform" action="<?= url_product_list(0) ?>">
                                <div class="flex-row relative">
                                    <div class="flex-col flex-grow">
                                        <input type="search" class="search-field mb-0" name="s" value="" placeholder="Tìm kiếm sản phẩm" autocomplete="off">
                                    </div>
                                    <!-- .flex-col -->
                                    <div class="flex-col">
                                        <button type="submit" class="ux-search-submit submit-button secondary button icon mb-0">
                                            <i class="fas fa-search"></i></button>
                                    </div>
                                    <!-- .flex-col -->
                                </div>
                                <!-- .flex-row -->
                                <div class="live-search-results text-left z-top">
                                    <div class="autocomplete-suggestions" style="position: absolute; display: none; max-height: 300px; z-index: 9999;"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <!-- flex-col -->


    </div>
    <!-- .flex-row -->
</div>
<div id="main-menu" class="mobile-sidebar no-scrollbar mfp-hide">
    <div class="sidebar-menu no-scrollbar ">
        <ul class="nav nav-sidebar  nav-vertical nav-uppercase">
            <li class="header-search-form search-form html relative has-icon">
                <div class="header-search-form-wrapper">
                    <div class="searchform-wrapper ux-search-box relative form-flat is-normal">
                        <form role="search" method="get" class="searchform" action="<?= url_product_list(0) ?>">
                            <div class="flex-row relative">
                                <div class="flex-col flex-grow">
                                    <input type="search" class="search-field mb-0" name="s" value="" placeholder="Tìm kiếm sản phẩm" autocomplete="off">
                                </div><!-- .flex-col -->
                                <div class="flex-col">
                                    <button type="submit" class="ux-search-submit submit-button secondary button icon mb-0">
                                        <i class="icon-search"></i> </button>
                                </div><!-- .flex-col -->
                            </div><!-- .flex-row -->
                            <div class="live-search-results text-left z-top">
                                <div class="autocomplete-suggestions" style="position: absolute; display: none; max-height: 300px; z-index: 9999;"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </li>
            <?php foreach ($menus as $row) : ?>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-20 <?= !empty($row->child) ? "has-child" : "" ?>" id="mega-menu-item-195">
                    <?php if ($row->type == 1) : ?>
                        <a href="<?= $row->link ?>" class='nav-top-link'>
                            <?= $row->{pick_language($row, 'name_')} ?>
                        </a>
                    <?php elseif ($row->type == 2) : ?>
                        <a href="<?= url_product_list($row->category_id) ?>" class='nav-top-link'>
                            <?= $row->{pick_language($row, 'name_')} ?>

                        </a>
                    <?php elseif ($row->type == 3) : ?>

                        <a href="<?= url_news_list($row->category_id) ?>" class='nav-top-link'>
                            <?= $row->{pick_language($row, 'name_')} ?>

                        </a>
                    <?php elseif ($row->type == 4) : ?>
                        <?php if ($row->category_id == 0) : ?>
                            <a href="<?= url_page_list($row->category_id) ?>" class='nav-top-link'>
                                <?= $row->{pick_language($row, 'name_')} ?>

                            </a>
                        <?php else : ?>
                            <a href="<?= url_page($row->category_id) ?>" class='nav-top-link'>
                                <?= $row->{pick_language($row, 'name_')} ?>

                            </a>
                        <?php endif ?>
                    <?php endif ?>
                    <?php if (!empty($row->child)) : ?>
                        <ul class="children">
                            <?php foreach ($row->child as $child) : ?>
                                <li class="mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-item-997" id="mega-menu-item-997">
                                    <?php if ($child->type == 1) : ?>
                                        <a href="<?= $child->link ?>"><?= $child->{pick_language($child, 'name_')} ?></a>
                                    <?php elseif ($child->type == 2) : ?>
                                        <a href="<?= url_product_list($child->category_id) ?>"><?= $child->{pick_language($child, 'name_')} ?></a>
                                    <?php elseif ($child->type == 3) : ?>

                                        <a href="<?= url_news_list($child->category_id) ?>"><?= $child->{pick_language($child, 'name_')} ?></a>
                                    <?php elseif ($child->type == 4) : ?>
                                        <?php if ($child->category_id == 0) : ?>
                                            <a href="<?= url_page_list($child->category_id) ?>"><?= $child->{pick_language($child, 'name_')} ?></a>
                                        <?php else : ?>
                                            <a href="<?= url_page($child->category_id) ?>"><?= $child->{pick_language($child, 'name_')} ?></a>
                                        <?php endif ?>
                                    <?php endif ?>
                                </li>
                            <?php endforeach ?>
                        </ul>
                    <?php endif ?>
                </li>
            <?php endforeach ?>
        </ul>
    </div><!-- inner -->
</div>