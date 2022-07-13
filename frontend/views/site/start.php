       <?php
        /** @var yii\web\View $this */

        use yii\helpers\Url;

        $this->title = 'ทดสอบลำโพงและไมโครโฟน';
        ?><br><br><br>
       <div class="row">
           <div class="col-md-12 p-lg-3  text-center bg-braintest">
               <br><br><br>
               <p class="title2 font-inter-bold mb-4 text-muted text-center">กรุณาทดสอบไมโครโฟน<br>และลำโพงให้พร้อม<br>และอยู่ในห้องที่ไม่มี<br>เสียงรบกวน</p>
           </div>

           <audio id="questionAudio" autoplay="">
               <source src="<?= Yii::getAlias('@web') ?>/sounds/intromain.mp3" type="audio/mp3">
               Your browser does not support the audio element.
           </audio>
       </div>
       <div class="row pb-5 bg-braintest text-center">
           <div class="col-lg-6 col-md-10 mx-auto text-center pb-5">
               <div class="text-muted pt-3 text-center fs-3">
                   <button onclick="TestVolume();" class="font-inter font-24 fw-bold btn rounded-pill btn-outline-brain px-4" style="min-width: 70%;">
                       <i class="material-symbols-outlined my-auto float-start" style="width:50px;font-size: larger;padding: 17px 0;">
                           volume_up
                       </i>
                       <span class="my-auto">ทดสอบ<br />ลำโพง</span>
                   </button>
               </div>
               <div class="text-muted pt-3 text-center fs-3">
                   <button onclick="testMicrophone(5,'testMicro');" class="font-inter font-24  fw-bold btn rounded-pill btn-outline-brain px-4" style="min-width: 70%;">
                       <i class="material-symbols-outlined my-auto float-start" style="width:50px;font-size: larger;padding: 17px 0;">
                           mic
                       </i>
                       <span class="my-auto" id="testMicro">
                           ทดสอบ<br />ไมโครโฟน
                       </span>
                   </button>
               </div>
           </div>
       </div>

       </div>

       <div class="container fixed-bottom p-0">
           <div class="row">
               <div class="col pb-5 mx-4 text-center">
                   <a class="btn btn-lg rounded-pill btn-brain font-inter-bold  btn-block " href="<?= Url::toRoute(['site/start2']); ?>">เริ่มการทดสอบ</a>

               </div>
           </div>
       </div>

       <script type="text/javascript">
           window.onload = function() {
               document.getElementById("questionAudio").autoplay;
           };
       </script>