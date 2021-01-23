<footer class="site-footer">
    <div class="site-footer__main h-bg-cover" style="background-image: url(<?= base_url("assets/images/footer.jpeg") ?>);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-content">
                        <div class="footer-content__single">
                            <?= $options['company_name'] ?>

                            <?= $options['mo_ta'] ?>

                            ĐC: <?= $options['dia_chi'] ?>

                            Liên hệ : <?= $options['hot_line'] ?>
                            
                            Email: <?= $options['email'] ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="hotline-left col-sm-2 hidden-xs" style="position: fixed;
     bottom: 0px;
     left: 0px;
     z-index: 1000;
     background: white;
     " href="tel:0924929999">
    <img class="img-responsive" src="<?= base_url("assets/images/hotline.png")?>">
</div>