click_to_convert.addEventListener('click',function(){
    var speech = true;
    window.SpeechRecognition = window.webkitSpeechRecognition;
    const recognition = new  SpeechRecognition();
    //recognition.interimResults = true;

    if(speech == true){
        alert('ignore_on_end');
        recognition.start();
    }
})
