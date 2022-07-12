
// Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()


function TestVolume() {
    var audio = new Audio();
    audio.src = '../sounds/test_speaker.mp3';
    audio.play();
}

function googleSpeech(audioUrl,returnID) {
    document.getElementById(returnID).innerHTML = '<div class="spinner-border" role="status"><span class="visually-hidden">Loading...</span></div>';
    $.ajax({
        url: "json-google-speech?url=" + audioUrl,
        method: "GET",
        success: function(data) {
            document.getElementById(returnID).innerHTML = data;
        }
    });

}

var counter = 0;
const startAction = async (timeRecord) => {
    handleAction(timeRecord,'file_audio','speech_text','form_voice');
    //StartTextToSpeech('speech_text','speech_text_final');

    // counter time
    /*
    var timeDisplay = document.getElementById("start_button");
    function refreshTime() {
       counter = counter + 1 ;
       timeDisplay.innerHTML = 'countdown in '+(timeRecord-counter)+' sec.';
    }
    setInterval(refreshTime, 1000);
    */
};





