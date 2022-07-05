<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body class="d-flex flex-column h-100 bg-reg">
    <?php $this->beginBody() ?>
    <header>
        <?php
        NavBar::begin([
            'brandLabel' => '<img src="' . Yii::getAlias('@web') . '/images/Braintest-logo.svg" height="40" class="bi me-2">',
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'class' => 'navbar navbar-expand-md fixed-top px-2 ',
            ],
        ]);
        $menuItems = [
            ['label' => 'หน้าแรก', 'url' => ['/site/index']],
            ['label' => 'เกี่ยวกับโครงการ', 'url' => ['/site/page1']],
            ['label' => 'ข้อจำกัดความรับผิดชอบ', 'url' => ['/site/page2']],
            ['label' => 'เกี่ยวกับเครื่องมือทดสอบ', 'url' => ['/site/page3']],
            ['label' => 'About', 'url' => ['/site/about', 'id' => 1, 'detail' => 'hakim']],
        ];
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav ml-auto px-2'],
            'items' => $menuItems,
        ]);
        NavBar::end();
        ?>
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
    <footer class="footer mt-auto text-muted">
        <div class="container">
            <p class="text-center my-1">&copy; 2022 Faculty of Medicine Ramathibadi Hospital, All rights reserved.</p>
        </div>
    </footer>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage();
