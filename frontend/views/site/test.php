<?php

use yii\helpers\Url;
?>

<p>
    <a href="<?= Url::toRoute(['site/test1']); ?>">test speech to text</a>
</p>
<?php // echo mime_content_type("https://modx.hccrg.org/frontend/web/records/toolx/20220707_153618_f1c38e513b194ad786e8391063a3d483.wav") 
?>

<?php print_r(Yii::$app->helpers->Partii('https://modx.hccrg.org/frontend/web/records/toolx/20220707_153618_f1c38e513b194ad786e8391063a3d483.wav'))
?>