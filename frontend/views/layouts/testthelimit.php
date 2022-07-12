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
    <script type="text/javascript" src="<?= Yii::getAlias('@web') ?>/assets/6aa7f981/jquery.js"></script>
    <?php $this->head() ?>
</head>

<body class="d-flex flex-column bg-testthelimit">
    <?php $this->beginBody() ?>
    <header>
        <nav id="w0" class="navbar navbar-expand-md fixed-top bg-white px-4">
            <div class="container">
                <a class="navbar-brand"><img src="<?= Yii::getAlias('@web') ?>/images/Braintest-logo.svg" height="60" class="bi me-2"></a>
            </div>
        </nav>
    </header>
    <main role="main" class="flex-shrink-0">
        <div class="container">
            <?= $content ?>
        </div>
    </main>
    <footer class="footer fixed-bottom text-muted">
        <div class="container">
            <p class="text-center my-1">&copy; 2022 Faculty of Medicine Ramathibadi Hospital, All rights reserved.</p>
        </div>
    </footer>

    <?php $this->endBody() ?>
</body>
<script type="text/javascript">
        function noBack()
         {
             window.history.forward()
         }
        noBack();
        window.onload = noBack;
        window.onpageshow = function(evt) { if (evt.persisted) noBack() }
        window.onunload = function() { void (0) }
    </script>
</html>
<?php $this->endPage();
