<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Content-Type, x-xsrf-token');
header('Content-Type: application/json');

$url = Yii::$app->request->get('url');
echo Yii::$app->helpers->googleSpeechToText($url);

//$output = $url;
//echo json_encode($output);
