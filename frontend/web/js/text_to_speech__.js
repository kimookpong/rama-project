

      // REF
      // * https://www.google.com/intl/en/chrome/demos/speech.html
      // * https://mdn.github.io/web-speech-api/speech-color-changer/
      $(function(){
      var final_transcript = '';
      var recognizing = false;
      var ignore_onend;
      var start_timestamp;
      var lastDebounceTranscript;

      // utility tools
      var two_line = /\n\n/g;
      var one_line = /\n/g;
      function linebreak(s) {
        return s.replace(two_line, '<p></p>').replace(one_line, '<br>');
      }

      var first_char = /\S/;
      function capitalize(s) {
        return s.replace(first_char, function(m) { return m.toUpperCase(); });
      }

      function showInfo(msg){
        $('#instructions').html(msg);
      }

      function upgrade(){
        alert('Browser is not support');
      }

      function startButton() {
        if (recognizing) {
          //recognition.stop();
          return;
        }
        final_transcript = '';
        recognition.lang = 'th-TH';
        recognition.start();
        ignore_onend = false;
        speech_text.value = '';
        interim_span.innerHTML = '';
        showInfo('info_allow');
        //start_timestamp = event.timeStamp;
      }

      // initialize recognition
      var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition
      var recognition = new SpeechRecognition();

      recognition.continuous = true;
      recognition.interimResults = true;

      recognition.onstart = function() {
        recognizing = true;
        showInfo('info_speak_now');
      };

      recognition.onerror = function(event) {
        if (event.error == 'no-speech') {
          showInfo('info_no_speech');
          ignore_onend = true;
        }
        if (event.error == 'audio-capture') {
          showInfo('info_no_microphone');
          ignore_onend = true;
        }
        if (event.error == 'not-allowed') {
          ignore_onend = true;
          recognition.start();
        }
      };

      recognition.onend = function() {
        recognizing = false;
        if (ignore_onend) {
            alert('ignore_on_end');
          return;
        }
        if (!final_transcript) {
          showInfo('info_start');
          return;
        }
        showInfo('หลุดไปแล้ววว');
       // return;

      };

      
      recognition.onresult = function(event) {
        var interim_transcript = '';
        if (typeof(event.results) == 'undefined') {
          recognition.onend = null;
          //recognition.stop();
          upgrade();
          return;
        }
        for (var i = event.resultIndex; i < event.results.length; ++i) {

          var transcript = event.results[i][0].transcript;
          var confidence = event.results[i][0].confidence;
          var isFinal = event.results[i].isFinal && (confidence > 0);

          if (isFinal) {
            /*
            // check duplicate result on android
            if(transcript+confidence == lastDebounceTranscript) { return; }
            lastDebounceTranscript = transcript+confidence;
            console.log(lastDebounceTranscript);
            */
            final_transcript += transcript;
          } else {
            interim_transcript += transcript;
          }
        }
        final_transcript = capitalize(final_transcript);
        speech_text.value = linebreak(final_transcript);
        interim_span.innerHTML = linebreak(interim_transcript);
        if (final_transcript || interim_transcript) {
          // do something
        }

        setTimeout(() => {
          recognition.start();
        }, 50);
      };

      // handle transcribe button
      $('#btn-transcribe').click((evt) => {
        let thiz = evt.target;
        let ready_text = 'Transcribe';
        let working_text = 'Working...';
        let working = $(thiz).html() == working_text;

        if(!working){ // press to start
          // ui
          $(thiz).html(working_text);

          // start
          startButton(evt);
        }else { // press to stop
          // ui
          $(thiz).html(ready_text);

          // stop
          recognizing = false;
          //recognition.stop();
        }
      });
    });
