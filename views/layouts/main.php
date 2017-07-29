<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/images/favicon.ico">
    <link rel="shortcut icon" href="/images/favicon.ico" />
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="page1">
<?php $this->beginBody() ?>




    <?php
    NavBar::begin([
        'brandLabel' => Html::img('@web/images/logo.png', ['alt'=>Yii::$app->name, 'class'=>'img-responsive']),
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Главная', 'url' => ['/site/index']],
            ['label' => 'Все работы', 'url' => ['/site/gallery']],
        ],
    ]);
    NavBar::end();
    ?>
    <header>
        <div class="container">
            <div class="row">
                <div class="hidden-xs">
                    <div id="camera_wrap" class="col-xs-12">
                        <div data-src="/images/portfolio/slide1.jpg" class="img-responsive"></div>
                        <div data-src="/images/main.jpg" class="img-responsive"></div>
                        <div data-src="/images/portfolio/slide2.jpg" class="img-responsive"></div>
                    </div>
                </div>
                <div class="clear"></div>
            </div
            ><div class="clear"></div>
        </div>
    </header>


    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>

            <?= $content ?>
    </div>

<footer>
    <div class="container">
        <div class="row">
            <div class="container_12">
                <div class="grid_12">
                    <div class="menu_block">
                        <h1><a href="index.html"><img src="images/logo.png" alt="Gerald Harris attorney at law"></a> </h1>
                        <nav class="">
                            <ul class="sf-menu">
                                <li class="current"><a href="index.html">Home</a></li>
                                <li class="with_ul"><a href="index-1.html">About Us</a></li>
                                <li><a href="index-2.html">Works</a></li>
                                <li><a href="index-3.html">Contacts</a></li>
                            </ul>
                        </nav>
                        <div class="clear"></div>
                    </div>
                    <div class="socials">
                        <a href="#"></a>
                        <a href="#"></a>
                        <a href="#"></a>
                        <a href="#"></a>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
