<!DOCTYPE html>
<!-- saved from url=(0020)https://hoptacxa.vn/ -->
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="description" content="">
    <meta name="keywords" content="gao phu yen, nha may xay xat, lua gao phu yen, gao xay moc, gao dac san">
    <meta property="og:url" content="<?= base_url() ?>">
    <meta property="og:title" content="Tú Loan | Nhà máy xay xat lúa gạo Phú Yên">
    <meta property="og:type" content="article">
    <meta property="og:description" content="">
    <meta property="og:image" content="<?= base_url("assets/images/logo.png?v=1") ?>">

    <link rel="canonical" href="<?= base_url() ?>">

    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url("assets/images/logo.png") ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="author" content="daotran">
    <meta name="copyright" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Favicon -->
    <!-- CSS -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!-- Theme Styles -->

    <link rel="stylesheet" href="<?= base_url("assets/css/all.css") ?> " ?>

    <style>
        .footer-content__single {
            white-space: pre-line;
            margin-top: -20px;
        }

        @media (min-width: 768px) {
            .box-lang-footer {
                min-width: 500px;
            }

            .btn-see-more {
                /*width: 100% !important;*/
                font-size: 18px !important;
            }

            .s-sachi .feature-detail,
            .s-sachi .content-detail--text-lg {
                font-size: 22px !important;
            }

            .site-header--minimal .site-header__nav .list-header-nav li a {
                font-size: 18px !important;
            }
        }

        @media (max-width: 768px) {
            body {
                font-size: 18px !important;
            }

            .c-single-post .post-title {
                font-size: 24px !important;
            }

            .log__user-info__title {
                font-size: 20px !important;
                line-height: 20px !important;
            }
        }

        .log__user-avatar {
            display: block;
            float: left;
            max-width: 48px;
            max-height: 48px;
        }

        .mt-10 {
            margin-top: 10px;
        }

        .p-single-desrc__wrap,
        .planting-info__descr {
            white-space: pre-line;
        }

        .btn-content-see-more {
            cursor: pointer;
        }

        .search-submit {
            background-color: #998250 !important;
        }
    </style>

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/lib/fancybox/jquery.fancybox.min.css') ?>" />
    <?= $this->renderSection('style') ?>

    <script>
        var path = '<?= base_url() ?>/';
    </script>

    <title><?= $title ?></title>
</head>

<body>
    <div class="site-wrapper">

        <?= $this->include('frontend/layouts/_header') ?>
        <div class="site-content">
            <?= $this->renderSection("content"); ?>
        </div>
        <!-- Site Header -->
        <?= $this->include('frontend/layouts/_footer') ?>
      
    </div>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

    <script src="<?= base_url('assets/lib/jquery-ui/jquery-ui.js') ?>"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script src="<?= base_url('assets/lib/fancybox/jquery.fancybox.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/frontend.js') ?>"></script>

    <?= $this->renderSection('script') ?>
</body>

</html>