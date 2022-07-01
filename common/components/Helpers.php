<?php

namespace common\components;

use yii;
use yii\base\Component;

class Helpers extends Component
{
    public function decodeUrl($id = null)
    {
        $codes = Yii::$app->request->get();
        $content = array();
        foreach ($codes as $index => $code) {
            $content[] = $index;
        }
        if (empty($content[0])) {
            return null;
        }
        $valueArray = explode("|DODOL|", Yii::$app->encryptUrl->decode($content[0]));
        $value = array();
        for ($i = 0; $i < count($valueArray); $i = $i + 2) {
            $value[$valueArray[$i]] = $valueArray[$i + 1];
        }

        if ($id) {
            if (isset($value[$id])) {
                return  $value[$id];
            } else {
                return  null;
            }
        } else {
            return $value;
        }
    }

    public function wordcut($text)
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.aiforthai.in.th/lextoplus",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "text=" . $text . "&norm=1",
            CURLOPT_HTTPHEADER => array(
                "Content-Type: application/x-www-form-urlencoded",
                "Apikey: qeGgXTNUDgDXZyHAZgH8zLrgjq33ioLe"
            )
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            return json_decode($response, true);
        }
    }
}
