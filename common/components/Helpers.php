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
}
