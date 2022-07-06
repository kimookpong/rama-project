<?php

$audioFile = 'https://waijaipos.com/rama-project/frontend/web/records/20220702_103801_1073a02142dfe2280c2aeb74c0388bc9.wav';
$audioFile2 = 'https://waijaipos.com/rama-project/frontend/web/records/20220702_104010_490d72b8a711c2f2772c61ce893e99d4.wav';

//echo 'Start:' . Yii::$app->helpers->googleSpeechToText($audioFile);
?>
<div class="jumbotron text-center bg-transparent">
    <h2>test sound 1</h2>
    <p>
        <audio controls>
            <source src="<?= $audioFile ?>" type="audio/wav">
            Your browser does not support the audio element.
        </audio>
    </p>
    <p>
        <button class="btn rounded-pill btn-brain" onclick="googleSpeech('<?= $audioFile ?>','convert')">ทดสอบใช้ฟังก์ชั่น Google Speech-to-text API</button>
    </p>
    <p id="convert"></p>
</div>

<div class="jumbotron text-center bg-transparent">
    <h2>test sound 2</h2>
    <p>
        <audio controls>
            <source src="<?= $audioFile2 ?>" type="audio/wav">
            Your browser does not support the audio element.
        </audio>
    </p>
    <p>
        <button class="btn rounded-pill btn-brain" onclick="googleSpeech('<?= $audioFile2 ?>','convert2')">ทดสอบใช้ฟังก์ชั่น Google Speech-to-text API</button>
    </p>
    <p id="convert2"></p>

    <?php echo Yii::$app->helpers->Partii('records/20220706_074854_29e9f5fab5c82a5c75728ab6cf9f853a.wav');?>
</div>