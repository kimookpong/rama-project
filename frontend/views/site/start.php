       <?php
        /** @var yii\web\View $this */
        $this->title = 'นโยบายและแบบขอความยินยอม';
        ?>
       <div class="row">
           <div class="col-md-10 p-lg-3 mx-auto py-4 text-center">
               <h1 class="display-5 font-inter-bold">นโยบายและแบบขอความยินยอม</h1>
               <hr>

               <p class="">นโยบายข้อมูลส่วนบุคคล แบบขอความยินยอมในการเก็บ รวบรวมข้อมูล ใช้เปิดเผย ข้อมูลส่วนตัว xxxxx</p>
           </div>
       </div>

       <div class="container fixed-bottom">
           <div class="row">
               <div class="col py-5 text-center">
                   <a class="btn btn-lg rounded-pill btn-ad8 col-5 font-inter-bold m-2" href="<?= Yii::getAlias('@web') ?>/site/index">ไม่ยินยอม</a>
                   <a class="btn btn-lg rounded-pill btn-ad8  col-5 font-inter-bold  m-2" href="<?= Yii::getAlias('@web') ?>/register/create">ยินยอม</a>

               </div>
           </div>
       </div>