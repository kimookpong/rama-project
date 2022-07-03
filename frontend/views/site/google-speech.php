<?php

$audioFile = 'https://waijaipos.com/rama-project/frontend/web/records/20220703_063858_ed7ecd11f6d6074c22896ba3d391b66e.wav';

echo 'Start:' . Yii::$app->helpers->googleSpeechToText($audioFile);
?>
<audio controls>
    <source src="<?= $audioFile ?>" type="audio/wav">
    Your browser does not support the audio element.
</audio>