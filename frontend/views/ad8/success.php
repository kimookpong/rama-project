<?php

use yii\helpers\Url;
?>
<div class="ad8-create text-center h-100">
	<div class="row h-100">
		<div class="col-sm-12 col-md-6 mx-auto">
			<div class="circlesuccess">
				<h3>คุณทำแบบคัดกรองชุดแรกจบแล้ว</h3>
			</div>
		</div>
	</div>
	<div class="container fixed-bottom">
		<div class="row">
			<div class="col py-4 mx-auto">
				<a class=" w-100 btn btn-lg rounded-pill btn-brain" href="<?= Url::toRoute(['test-the-limit/index', 'id' => $model->register_id]); ?>">หน้าถัดไป <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
			</div>
		</div>
	</div>
</div>