var final_transcript = '';  // ตัวแปร สำหรับเก็บข้อความที่แปลงจากเสียง
var recognizing = false;  // กำหนดค่าเริ่มต้นการจดจำเสียง เริ่มต้น ให้เป็น false ไม่ทำงาน
var language = 'th-TH';  // กำหนดภาษา th-TH,

const StartTextToSpeech = async (timeRecord,inputFile,inputText,formName) => {
    if (!('webkitSpeechRecognition' in window)) {
        alert("Your Browser does not support the Speech API");
    }else{
        var recognition = new webkitSpeechRecognition(); // สร้าง recognition object 
        recognition.continuous = true;         // กำหนด true ให้รับค่า จากเสียงไปเรื่อยๆ จนกว่าจะกดปุ่มหยุด
        recognition.interimResults = true;     // แสดงข้อความช่วงจังหวะหรือไม่ กรณีพูดยาวๆ
        recognition.lang = language;           // กำหนดภาษา จากตัวแปรด้านบน
        //document.getElementById(inputText).value = 'ตรงนี้แล้ว';
        recognition.start();

        recognition.onstart = function() {
            // เมื่อเกิดการเริ่มทำงานของการจดจำเสียง มาจากคำสั่ง recognition.start();
            //recognizing = true;  // เปลี่ยนค่าให้เริ่มทำการจดสับเสียงเป็น true เริ่มทำงาน
            $('#instructions').html('Speak slowly and clearly'); // แสดงคำแนะนำ 
        };

        recognition.onerror = function(event) {
            // ถ้าเกิดข้อผิดพลาด ทำงานส่วนนี้
            $('#instructions').html("There was a recognition error..."); // แจ้งสถานะถ้าเกิดข้อผิดพลาด
        };

        recognition.onend = function() {
            // ถ้าจบการทำงาน เช่นหยุดด้วยคำสั่ง recognition.stop();
            // หรือไม่ได้พูดเพื่อใช้งาน การจดจำเสียงนาน ก็จะหยุดการทำงานเอง
            //recognizing = false;  // กำหนดให้การจดจำเสียงอยูในสถานะหยุดการทำงาน
            $('#instructions').html('Done'); // แสดงสถานะว่าเสร็จสิ้นแล้ว Done
        };

        recognition.onresult = function(event) {
            // เมื่อแปลงเสียงเป็นข้อความสำเร็จ ส่งผลลัธ์กลับมา
            // ตัวแปรไว้เก็บข้อความในช่วงจังหวะหนึ่งจังหวะใดบางช่วง กรณีพูดยาวๆ
            var interim_transcript = ''; // ปกติค่านี้ไม่ค่อยได้ใช้ จะใช้ค่า final มากกว่า
             
            // ถอดจากข้อความจาก array ผลลัพธ์
            for (var i = event.resultIndex; i < event.results.length; ++i) {
                // ถ้าเป็นค่าสุดท้ายแล้ว หยุดพูด หรือไม่ได้พูดต่อ
                if (event.results[i].isFinal) {
                    // เอาข้อความผลัพธ์ที่ได้ มาต่อๆ กันและกับในตัวแปร final_transcript
                    final_transcript += event.results[i][0].transcript+' ';
                } else { 
                    // ถ้าเป็นค่าข้อความระหว่างช่วงเวลา ในกรณีพูดยาวๆ เก็บในตัวแปร 
                    // เก็บในตัวแปร  interim_transcript
                    interim_transcript += event.results[i][0].transcript+' '; 
                }
            }

            if(final_transcript.length > 0) { // นับความยาวข้อความ ถ้ามากกว่า 0 แสดงว่ามีค่า
                // ตัวแปร final_transcript คือค่าข้อความที่ได้ เอาไปใช้งานต่อได้
                var input = document.getElementById(inputText);
                input.value = final_transcript; // แสดงค่าใน textarea 
            }
        };

        
        //console.log('start speech detect');
        //await sleep(timeRecord*1000);
        //recognition.stop();
        //console.log('stop speech detect');

        //document.getElementById(formName).submit();
    }
  };