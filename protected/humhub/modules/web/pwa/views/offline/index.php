<?php

use humhub\libs\Html;

?>
<!DOCTYPE html>
<html lang="en">
<head>
                <!-- Google Tag Manager -->
                <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-MX4G3BZ');</script>
        <!-- End Google Tag Manager -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title><?= Yii::t('WebModule.pwa', 'Unable to connect to {site}', ['{site}' => Html::encode(Yii::$app->name)]); ?></title>
    <style type="text/css">
        body {
            background: <?= Yii::$app->view->theme->variable('primary') ?>;
            color: #ffffff;
            font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
            font-weight: 300;
        }

        body a {
            color: #ffffff;
        }

        #content {
            text-align: center;
            margin-top: 15%;
        }

        #content p {
            line-height: 30px;
        }

        #content .smilie {
            font-size: 60px;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
                <!-- Google Tag Manager (noscript) -->
                <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MX4G3BZ"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

<div id="content">
    <span class="smilie">:-(</span>
    <h1><?= Yii::t('WebModule.pwa', 'Hm...'); ?></h1>
    <h2><?= Yii::t('WebModule.pwa', 'Unable to connect to {site}', ['{site}' => Html::encode(Yii::$app->name)]); ?></h2>
    <p><?= Yii::t('WebModule.pwa', 'Please check your internet connection and <a href="?">refresh</a> this page once your are online again!'); ?></p>
</div>
</body>
</html>
