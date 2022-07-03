<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

$this->title = 'ผลจากการทดสอบ';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">

        <p class="lead"><?= Html::encode($this->title) ?></p>

        <p> ข้อความจาก Web Speech API: <span class="text-success">"<?= $text ?>"</span></p>
        <p> ข้อความจาก Google Speech-to-text API: <?= Yii::$app->helpers->googleSpeechToText('https://waijaipos.com/rama-project/frontend/web/records/' . $file_audio) ?></p>

        <p>

            แยกคำ: <span class="text-success">
                <?php
                $text_seperate = Yii::$app->helpers->wordcut($text);
                if ($text_seperate) {
                    foreach ($text_seperate['tokens'] as $word) {
                        if ($word != ' ') {
                            echo $word . ', ';
                        }
                    }
                }
                ?>
            </span>
        </p>
        <p>
            <audio controls>
                <source src="<?= Yii::getAlias('@web') ?>/records/<?= $file_audio ?>" type="audio/wav">
                Your browser does not support the audio element.
            </audio>
        </p>


        <p><a class="btn btn-lg btn-success" href="<?= Yii::getAlias('@web') ?>/site/about">ทดสอบฟังก์ชั่นอีกครั้ง</a></p>
    </div>
</div>