<header id="siteHeader" class="site-header site-header--minimal">
    <div class="site-header__wrapper-bg h-bg-cover" style="background-image: url(<?= base_url("assets/images/header.jpeg") ?>);">
        <div class="site-header__wrapper-opacity">
            <div class="site-header__top-action">
                <div class="single-action">
                    <div class="dropdown dropdown--lang">
                        <a href="javascript:;void(0)" class="single-action__button btn-flag-languages" data-toggle="dropdown">
                            <?php if (current_language() == "vi") : ?>
                                Tiếng Việt
                            <?php elseif (current_language() == "en") : ?>
                                English
                            <?php elseif (current_language() == "jp") : ?>
                                官话
                            <?php endif ?>
                            <i class="fas fa-chevron-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <?php if (current_language() != "vi") : ?>
                                <li><a class="dropdown-item" href="<?= base_url('lang/vi'); ?>">Tiếng Việt</a></li>
                            <?php endif ?>

                            <?php if (current_language() != "en") : ?>
                                <li><a class="dropdown-item" href="<?= base_url('lang/en'); ?>">English</a></li>
                            <?php endif ?>

                            <?php if (current_language() != "jp") : ?>
                                <li><a class="dropdown-item" href="<?= base_url('lang/jp'); ?>">官话</a></li>
                            <?php endif ?>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="site-header__top">
                    <div class="site-header__logo">
                        <a href="<?= base_url() ?>"><img src="<?= base_url("assets/images/logo.webp") ?>" alt="Sachi Logo"></a>
                    </div>
                    <div class="site-header__toggle hidden-sm hidden-md hidden-lg">
                        <a href="<?= base_url() ?>" class="btn-toggle-list-nav js-btn-toggle-list-nav"><i class="fas fa-bars"></i></a>
                    </div>
                </div>
                <div class="site-header__nav js-site-header__nav">
                    <?= view_cell("\App\Libraries\HomeWidget::navbar") ?>
                </div>
            </div>
        </div>
    </div>
</header>