let texts = document.querySelector('.texts');
$(function(){
    // ตรวจสอบ browser ว่าสนับสนุนการใช้งาน Speech API หรือไม่
    if (!('webkitSpeechRecognition' in window)) {
        alert("Your Browser does not support the Speech API");
    }else{
        const recognition = new webkitSpeechRecognition();
        recognition.continuous = true;
        recognition.interimResults = true;
        recognition.lang = 'th-TH';

        recognition.addEventListener('result',function(event){
        const text = Array.from(event.results)
        .map(result => result[0])
        .map(result => result.transcript)
        .join(' ');

        texts.innerText = text;
        });
        recognition.start();

    }
});




/*--
  recognition.continuous = true;
  recognition.interimResults = true;
  recognition.lang = 'th-TH';
  reset();
  recognition.onend = reset;

  recognition.onresult = function (event) {
    var final = "";
    var interim = "";
    for (var i = 0; i < event.results.length; ++i) {
      if (event.results[i].isFinal) {
        final += event.results[i][0].transcript;
      } else {
        interim += event.results[i][0].transcript;
      }
    }
    final_span.innerHTML = final;
    interim_span.innerHTML = interim;
  }

  function reset() {
    recognizing = false;
    button.innerHTML = "Click to Speak";
  }

  function toggleStartStop() {
    if (recognizing) {
      recognition.stop();
      reset();
    } else {
      recognition.start();
      recognizing = true;
      button.innerHTML = "Click to Stop";
      final_span.innerHTML = "";
      interim_span.innerHTML = "";
    }
  }
  --*/