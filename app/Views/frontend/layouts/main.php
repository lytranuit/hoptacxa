<!DOCTYPE html>
<!-- saved from url=(0020)https://hoptacxa.vn/ -->
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="description" content="">
    <meta name="keywords" content="gao phu yen, nha may xay xat, lua gao phu yen, gao xay moc, gao dac san,gao lam bun, gao lam banh trang,gao cac loai">
    <meta property="og:url" content="<?= base_url() ?>">
    <meta property="og:title" content="Tú Loan | Nhà máy xay xat lúa gạo Phú Yên">
    <meta property="og:type" content="article">
    <meta property="og:description" content="">
    <meta property="og:image" content="<?= base_url("assets/images/logo.png?v=1") ?>">

    <link rel="canonical" href="<?= base_url() ?>">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url("assets/images/logo.png") ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="author" content="daotran">
    <meta name="copyright" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preload" href="<?= base_url('assets/webfonts/fa-solid-900.woff2') ?>" as="font" type="font/woff2" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Charm:400,700&subset=vietnamese">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,400i,700,700i|Roboto:400,400i,500,500i,700,700i,900,900i&display=swap&subset=vietnamese">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,500,600,700,800,900&display=swap&subset=vietnamese">
    <!-- CSS -->
    <!-- Latest compiled and minified CSS -->
    <!--<link rel="stylesheet" type="text/css" href="<?= base_url('assets/lib/bootstrap3/bootstrap.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/lib/fontawesome5/css/all.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url("assets/css/all.css") ?> " ?>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/lib/slick/slick.css') ?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/lib/fancybox/jquery.fancybox.min.css') ?>" />-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/app.min.css') ?>" />
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

    <!--<script type="text/javascript" src="<?= base_url('assets/lib/jquery/jquery.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/lib/jquery/jquery-migrate.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/lib/bootstrap3/bootstrap.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/lib/slick/slick.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/lib/fancybox/jquery.fancybox.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/js/frontend.js') ?>"></script>-->
    <script type="text/javascript" src="<?= base_url('assets/js/app.min.js') ?>"></script>
    <?= $this->renderSection('script') ?>
</body>

</html>