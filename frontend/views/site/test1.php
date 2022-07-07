<button onclick="StartTextToSpeech('speech_text','speech_text_final')">Click</button>

<input class="form-control" type="text" id="speech_text" name="speech_text" />
<input class="form-control" type="text" id="speech_text_final" name="speech_text_final" />


<audio id="questionAudio" autoplay="">
    <source src="<?= Yii::getAlias('@web') ?>/sounds/test-the-limit/q_1.mp3" type="audio/mpeg">
    Your browser does not support the audio element.
</audio>
<script type="text/javascript">
    questionAudio.onended = function() {
        // start beep sounds
        testMicrophone;
        var audio = new Audio();
        audio.src = '<?= Yii::getAlias('@web') ?>/sounds/beep.mp3';
        audio.play();
        audio.onended = function() {
            StartTextToSpeech('speech_text', 'speech_text_final');
        }
    }
    window.onload = function() {
        document.getElementById("questionAudio").autoplay;
    };
</script>