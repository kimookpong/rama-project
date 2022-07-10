<?php

use yii\helpers\Url;

$this->title = 'คุณผ่านแบบคัดกรอง';
?>

<div class="ad8-create text-center h-100">
	<div class="row h-100">
		<div class="circlesuccess">
			<h3 class="title1 font-inter-bold">คุณทำแบบคัดกรอง<br>ชุดแรกจบแล้ว</h3>
		</div>
	</div>
	<div class="container fixed-bottom">
		<div class="row">
			<div class="col py-5 mx-4">
				<a class=" w-100 btn btn-lg rounded-pill btn-brain" href="<?= Url::toRoute(['test-the-limit/index', 'id' => $model->register_id]); ?>">หน้าถัดไป <i class="fa fa-arrow-circle-right float-end py-1" aria-hidden="true"></i></a>
			</div>
		</div>
	</div>
</div>