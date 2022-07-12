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
    <?php $this->head() ?>
</head>

<body class="d-flex flex-column h-100 bg-ad8">
    <?php $this->beginBody() ?>
    <header>
        <nav id="w1" class="navbar navbar-expand-md fixed-top bg-white px-4  navbar">
            <div class="container">
                <a class="navbar-brand"><img src="<?= Yii::getAlias('@web') ?>/images/Braintest-logo.svg" height="60" class="bi me-2"></a>
            </div>
        </nav>
    </header>
    <main role="main" class="flex-shrink-0 h-100">
        <div class="container h-100">
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

</html>
<?php $this->endPage();
