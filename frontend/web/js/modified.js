var counter = 0;
const startAction = async (timeRecord) => {
    handleAction(timeRecord,'file_audio','speech_text','form_voice');
    StartTextToSpeech(timeRecord,'file_audio','speech_text','form_voice');

    // counter time
    var timeDisplay = document.getElementById("start_button");
    function refreshTime() {
       counter = counter + 1 ;
       timeDisplay.innerHTML = 'countdown in '+(timeRecord-counter)+' sec.';
    }
    setInterval(refreshTime, 1000);
};