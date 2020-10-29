<?php

use yii\helpers\Html;
use humhub\assets\AppAsset;
use humhub\widgets\PoweredBy;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
                <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-MX4G3BZ');</script>
        <!-- End Google Tag Manager -->
        <title><?php echo Html::encode($this->title); ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="language" content="en"/>

        <?= Html::csrfMetaTags() ?>

        <?php $this->head() ?>

        <!-- start: render additional head (css and js files) -->
        <?php echo $this->render('@humhub/views/layouts/head'); ?>
        <!-- end: render additional head -->
    </head>
    <body>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MX4G3BZ"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
    <?php $this->beginBody() ?>

    <div class="container installer" style="margin: 0 auto; max-width: 770px;">
        <div class="logo">
            <a class="animated fadeIn" href="http://www.humhub.org" target="_blank" class="">
                <img src="<?php echo Yii::getAlias("@web-static/resources/installer"); ?>/humhub-logo.png" alt="Logo">
            </a>
        </div>

        <?php echo $content; ?>

        <div class="text text-center powered">
            <?= PoweredBy::widget(); ?>
            <br/>
            <br/>
        </div>
    </div>

    <div class="clear"></div>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>
