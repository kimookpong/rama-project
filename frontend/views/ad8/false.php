<?php

use yii\helpers\Url;

$this->title = 'คุณไม่ผ่านแบบคัดกรอง';
?>

<div class="ad8-create text-center h-100">
	<div class="row h-100">
		<div class="circlefalse">
			<h3 class="font-inter-bold" >คุณมีความบกพร่อง ด้วยการรู้คิดหลายส่วน แนะนำ<br>ให้พบผู้เชี่ยวชาญโดยเร็วไม่ต้องทำแบบทดสอบต่อ</h3>
		</div>
	</div>
	<div class="container fixed-bottom">
		<div class="row">
		<div class="col pb-5 mx-4 text-center">
				<a class=" w-100 btn btn-lg rounded-pill btn-brain" href="<?= Url::toRoute(['site/index', 'id' => $model->register_id]); ?>">ออก</a>
			</div>
		</div>
	</div>
</div>