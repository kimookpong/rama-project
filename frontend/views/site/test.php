<?php

use yii\helpers\Url;
?>

<p>
    <a href="<?= Url::toRoute(['site/test1']); ?>">test speech to text</a>
</p>

<?php print_r(Yii::$app->helpers->googleSpeechToText('https://modx.hccrg.org/frontend/web/records/20220707_073741_be70f053224705ec6bc36d8db6e0349e.flac')) ?>