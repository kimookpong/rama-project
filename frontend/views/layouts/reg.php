<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" translate="no" class="h-100">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?> | <?= Yii::$app->params['project'] ?></title>
    <link href="<?= Yii::getAlias('@web') ?>/images/logo.svg" rel="shortcut icon">
    <?php $this->head() ?>
</head>

<body class="d-flex flex-column h-100 bg-reg">
    <?php $this->beginBody() ?>
    <header>
        <nav id="w1" class="navbar navbar-expand-md fixed-top px-4 bg-white  navbar">
            <div class="container">
                <a class="navbar-brand" href="<?= Url::toRoute(['site/index']) ?>"><img src="<?= Yii::getAlias('@web') ?>/images/Braintest-logo.svg" height="60" class="bi me-2"></a>
            </div>
        </nav>
    </header>
    <main role="main" class="flex-shrink-0">
        <div class="container">
            <?= $content ?>
        </div>
    </main>
    <!--
    <ul class="circles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
    -->
    <footer class="footer  text-muted">
        <div class="container">
            <p class="text-center my-1">&copy; 2022 Faculty of Medicine Ramathibadi Hospital, All rights reserved.</p>
        </div>
    </footer>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage();
