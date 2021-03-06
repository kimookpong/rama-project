
const recordAudio = () =>
  new Promise(async resolve => {
    const stream = await navigator.mediaDevices.getUserMedia({ audio: true });
    const options = {
      audioBitsPerSecond : 8000,
    }

    const mediaRecorder = new MediaRecorder(stream,options);
    const audioChunks = [];
    mediaRecorder.addEventListener("dataavailable", event => {
      audioChunks.push(event.data);
    });
    
    const start = () => mediaRecorder.start();
    const stop = () =>
      new Promise(resolve => {
        mediaRecorder.addEventListener("stop", () => {
          const audioBlob = new Blob(audioChunks, { type: "audio/wav" });
          const audioUrl = URL.createObjectURL(audioBlob);
          const audio = new Audio(audioUrl);
          const play = () => audio.play();
          resolve({ audioBlob, audioUrl, play });
        });
        mediaRecorder.stop();
      });
    resolve({ start, stop });
  });
const sleep = time => new Promise(resolve => setTimeout(resolve, time));
const handleAction = async (timeRecord,inputFile,inputText,formName) => {
  const recorder = await recordAudio();
  recorder.start();

  //StartTextToSpeech(timeRecord,inputText);

  console.log('start record voice');
  await sleep(timeRecord*1000);
  const audio = await recorder.stop();
  console.log('stop record voice');
  createDownloadLink(audio.audioBlob,inputFile);

  document.getElementById(formName).submit();
};
const testMicrophone = async (timeRecord,showStatus) => {
  $('#'+showStatus).html('กรุณาพูด<br/>เพื่อทดสอบ');
  const recorder = await recordAudio();
  recorder.start();
  console.log('start record voice');
  await sleep(timeRecord*1000);
  const audio = await recorder.stop();
  console.log('stop record voice');
  var audioPlay = new Audio();
  audioPlay.src = audio.audioUrl;
  audioPlay.play();
  $('#'+showStatus).html('ทดสอบ<br/>ไมโครโฟน ');
};
function createDownloadLink(audio_blob,inputFile) {
  let file = new File([audio_blob], "filename");
  let container = new DataTransfer();
  container.items.add(file);
  document.getElementById(inputFile).files = container.files;
  
}


