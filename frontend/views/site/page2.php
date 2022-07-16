<?php
use yii\helpers\Url;

/** @var yii\web\View $this */
$this->title = 'ข้อจำกัดความรับผิดชอบ';
?>

<br><br><br>
<div class="row">
    <div class="col-md-10 p-lg-3 mx-auto px-4  text-left" >
        <h1 class="display-5 mb-1 font-inter-bold text-left">ข้อจำกัดความรับผิดชอบ</h1>

        <p class="text-left">"แบบคัดกรองสมองด้านการรู้คิดสำหรับประชาชน
            มีวัตถุประสงค์เพื่อ คัดกรองความผิดปกติเบื้องต้น
            เท่านั้น ส่วนการวินิจฉัย ภาวะสมองเสื่อม ยังจำเป็น
            ต้องพบแพทย์เพื่อซักประวัติ ตรวจร่างกาย และส่ง
            ตรวจเพิ่มเติม เพื่อการวินิจฉัยและรักษาต่อไป"
        </p>
        <br>
        <p class="text-left">ผลการประเมินและคำแนะนำจากแบบคัดกรองนี้
            ไม่สามารถอ้างอิงเป็นการวินิจฉัยโรคที่ถูกต้อง
            ครบถ้วนได้ และไม่สามารถใช้แทนการตัดสินใจ
            หรือการวินิจฉัยของแพทย์ได้
        </p>
        <div class="container fixed-bottom">
        <div class="row">
            <div class="col pb-5 mx-4 text-right">
                <a class="btn btn-circle" href="<?= Url::toRoute(['site/index']); ?>"> <i class="fa fa-times" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>

        </a>
    </div>
</div>



