var final_transcript = '';  // ตัวแปร สำหรับเก็บข้อความที่แปลงจากเสียง
var recognizing = false;  // กำหนดค่าเริ่มต้นการจดจำเสียง เริ่มต้น ให้เป็น false ไม่ทำงาน
var language = 'th-TH';  // กำหนดภาษา th-TH,
var text_audio = '';

const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition

const StartTextToSpeech = async (inputText,inputTextFinal) => {
    if (!('webkitSpeechRecognition' in window)) {
        alert("Your Browser does not support the Speech API");
    }else{
        var recognition = new SpeechRecognition(); // สร้าง recognition object 
        recognition.continuous = true;         // กำหนด true ให้รับค่า จากเสียงไปเรื่อยๆ จนกว่าจะกดปุ่มหยุด
        recognition.interimResults = true;     // แสดงข้อความช่วงจังหวะหรือไม่ กรณีพูดยาวๆ
        recognition.lang = language;           // กำหนดภาษา จากตัวแปรด้านบน


        recognition.onstart = function() {
            console.log('start recognition');
           // $('#instructions').html('กรุณาพูดช้าๆและชัดเจน'); // แสดงคำแนะนำ 
        };

        recognition.onerror = function(event) {
            // ถ้าเกิดข้อผิดพลาด ทำงานส่วนนี้
           // $('#instructions').html("There was a recognition error..."); // แจ้งสถานะถ้าเกิดข้อผิดพลาด
        };

        recognition.onend = function() {
            document.getElementById(inputTextFinal).value = document.getElementById(inputTextFinal).value + text_audio;
            //recognition.start();
  
            
           //$('#instructions').html('เรียบร้อย'); // แสดงสถานะว่าเสร็จสิ้นแล้ว Done
        };

        recognition.onresult = function(event) {
            const text = Array.from(event.results)
            .map(result => result[0])
            .map(result => result.transcript)
            .join(' ');
            text_audio = text; // แสดงค่าใน textarea 
            document.getElementById(inputText).value = text;
        };
        
        
        recognition.start();
        //
    }
  };

  