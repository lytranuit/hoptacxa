<header id="header" class="header has-sticky sticky-jump">
    <div class="header-wrapper">
        <div id="masthead" class="header-main hide-for-sticky">
            <div class="header-inner flex-row container logo-left medium-logo-center" role="navigation">

                <!-- Logo -->
                <div id="logo" class="flex-col logo" style="padding: 5px;">
                    <!-- Header logo -->
                    <a href="<?= base_url() ?>" title="Gạo Đất phú - Bữa ăn thêm ngon khi có Gạo Quý" rel="home">
                        <img src="<?= base_url("assets/images/logo.webp") ?>" class="header_logo header-logo" alt="Gạo Quý">
                    </a>
                </div>

                <!-- Mobile Left Elements -->
                <div class="flex-col show-for-medium flex-left">
                    <ul class="mobile-nav nav nav-left ">
                        <li class="nav-icon has-icon">
                            <a href="<?= base_url() ?>" data-open="#main-menu" data-pos="left" data-bg="main-menu-overlay" data-color="" class="is-small" aria-controls="main-menu" aria-expanded="false">
                                <i class="fas fa-bars"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Left Elements -->
                <!--<div class="flex-col hide-for-medium flex-left
            flex-grow">
                    <ul class="header-nav header-nav-main nav nav-left  nav-size-medium nav-spacing-large nav-uppercase">
                        <li class="html custom html_topbar_left"><img src="<?= base_url("assets/images/giao-hang-tan-noi-1024x286.png") ?>" alt="Smiley face" height="160" width="408"></li>
                    </ul>
                </div>-->
                <!-- Right Elements -->
                <div class="flex-col hide-for-medium flex-right">
                    <ul class="header-nav header-nav-main nav nav-right  nav-size-medium nav-spacing-large nav-uppercase">
                        <li class="cart-item has-icon">
                            <div class="header-button">
                                <a href="https://gaoquy.vn/gio-hang/" class="header-cart-link off-canvas-toggle nav-top-link icon button round is-outline is-small" data-open="#cart-popup" data-class="off-canvas-cart" title="Giỏ hàng" data-pos="right">

                                    <!--<span class="header-cart-title">
                                        <span class="cart-price"><span class="woocommerce-Price-amount amount">45.000&nbsp;<span class="woocommerce-Price-currencySymbol">₫</span></span>
                                        </span>
                                    </span>-->

                                    <span class="image-icon header-cart-icon" data-icon-label="1">
                                        <img class="cart-img-icon" alt="Giỏ hàng" src="<?= base_url("assets/images/cart-small.png") ?>">
                                    </span>
                                    <!-- .cart-img-inner -->
                                </a>
                            </div>


                            <!-- Cart Sidebar Popup -->
                            <div id="cart-popup" class="mfp-hide widget_shopping_cart">
                                <div class="cart-popup-inner inner-padding">
                                    <div class="cart-popup-title text-center">
                                        <h4 class="uppercase">Giỏ hàng</h4>
                                        <div class="is-divider"></div>
                                    </div>
                                    <div class="widget_shopping_cart_content">

                                    
                                    </div>
                                    <div class="cart-sidebar-content relative"></div>
                                </div>
                            </div>

                        </li>
                    </ul>
                </div>

                <!-- Mobile Right Elements -->
                <div class="flex-col show-for-medium flex-right">
                    <ul class="mobile-nav nav nav-right ">
                        <li class="cart-item has-icon">

                            <div class="header-button">
                                <a href="https://gaoquy.vn/gio-hang/" class="header-cart-link off-canvas-toggle nav-top-link icon button round is-outline is-small" data-open="#cart-popup" data-class="off-canvas-cart" title="Giỏ hàng" data-pos="right">

                                    <span class="image-icon header-cart-icon" data-icon-label="1">
                                        <img class="cart-img-icon" alt="Giỏ hàng" src="<?= base_url("assets/images/cart-small.png") ?>">
                                    </span>
                                    <!-- .cart-img-inner -->
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- .header-inner -->

        </div>

        <?= view_cell("\App\Libraries\HeaderWidget::navbar") ?>

        <!-- .header-bottom -->

        <div class="header-bg-container fill">
            <div class="header-bg-image fill"></div>
            <div class="header-bg-color fill"></div>
        </div>
        <!-- .header-bg-container -->
    </div>
    <!-- header-wrapper-->
</header>