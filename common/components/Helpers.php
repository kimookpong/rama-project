<?php

namespace common\components;

use yii;
use yii\base\Component;
use Google\Cloud\Speech\V1\SpeechClient;
use Google\Cloud\Speech\V1\RecognitionAudio;
use Google\Cloud\Speech\V1\RecognitionConfig;
use Google\Cloud\Speech\V1\RecognitionConfig\AudioEncoding;
use Google\Cloud\Speech\V1\StreamingRecognitionConfig;

use \yii\web\UploadedFile;

class Helpers extends Component
{
    public function uploadFile($param, $folder)
    {
        $path = Yii::getAlias('@webroot') . '/records/' . $folder . '/';
        $file = UploadedFile::getInstanceByName($param);
        if ($file) {
            $fileName = date('Ymd_His_') . md5($file->baseName . time()) . '.wav';
            if ($file->saveAs($path . $fileName)) {
                return 'records/' . $folder . '/' . $fileName;
            } else {
                return null;
            }
        } else {
            return null;
        }
    }


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
    public function googleAPI($audioFile)
    {
        $content = file_get_contents("https://hrmsuat.wu.ac.th/index.php?r=site/google-speech-to-text&url=" . $audioFile);
        return $content;
    }

    public function googleSpeechToTextV2($audioFile)
    {
        putenv('GOOGLE_APPLICATION_CREDENTIALS=rama-project-v2-ed6853bd2092.json');
        // create the speech client
        $client = new SpeechClient();

        $recognitionConfig = new RecognitionConfig();
        $recognitionConfig->setEncoding(AudioEncoding::FLAC);
        $recognitionConfig->setSampleRateHertz(48000);
        $recognitionConfig->setLanguageCode('th-TH');
        $config = new StreamingRecognitionConfig();
        $config->setConfig($recognitionConfig);

        $audioResource = fopen($audioFile, 'r');

        $responses = $client->recognizeAudioStream($config, $audioResource);

        foreach ($responses as $element) {
            // doSomethingWith($element);
        }

        return $responses;
    }


    public function googleSpeechToText($audioFile)
    {
        putenv('GOOGLE_APPLICATION_CREDENTIALS=rama-project-v2-ed6853bd2092.json');

        // change these variables if necessary
        $encoding = AudioEncoding::FLAC;
        $sampleRateHertz = 48000;
        $languageCode = 'th-TH';

        // get contents of a file into a string
        //$file_headers = get_headers($audioFile);
        //if (strpos($file_headers[0], '404') == false) {


        $content = file_get_contents($audioFile);

        // set string as audio content
        $audio = (new RecognitionAudio())
            ->setContent($content);

        // set config
        $config = (new RecognitionConfig())
            ->setEncoding($encoding)
            ->setSampleRateHertz($sampleRateHertz)
            ->setLanguageCode($languageCode);

        // create the speech client
        $client = new SpeechClient();

        // create the asyncronous recognize operation
        $operation = $client->longRunningRecognize($config, $audio);
        $operation->pollUntilComplete();

        if ($operation->operationSucceeded()) {
            $response = $operation->getResult();
            // each result is for a consecutive portion of the audio. iterate
            // through them to get the transcripts for the entire audio file.
            foreach ($response->getResults() as $result) {
                $alternatives = $result->getAlternatives();
                $mostLikely = $alternatives[0];
                $transcript = $mostLikely->getTranscript();
                $confidence = $mostLikely->getConfidence();
                return $transcript;
                //printf('Confidence: %s' . PHP_EOL, $confidence);
            }
        } else {
            //print_r('error');
            return print_r($operation->getError());
        }

        $client->close();
        //} else {
        //    return "File not Exists!";
        //}
    }

    public function Partii($audioFile)
    {
        $audio_file = $audioFile;
        $data = array('wavfile' => new \CURLFile($audio_file, mime_content_type($audio_file), basename($audio_file)), 'outputlevel' => '--uttlevel', 'outputformat' => '--txt',);
        $curl = curl_init();

        //  var_dump($data);
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.aiforthai.in.th/partii-webapi",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $data,
            CURLOPT_HTTPHEADER => array(
                "Content-Type: multipart/form-data",
                "Apikey: qeGgXTNUDgDXZyHAZgH8zLrgjq33ioLe"
            )
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            echo $response;
        }
    }
}
