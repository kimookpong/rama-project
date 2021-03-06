<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css',
        'https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap',
        'https://fonts.googleapis.com/css2?family=Sarabun&display=swap',
        'https://fonts.googleapis.com/css2?family=Inter:wght@500;700&display=swap',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css',
        'https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@500;700&display=swap',
        'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0',

        'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css',

        'css/site.css',
        'css/modified.css'
    ];
    public $js = [
        //'https://code.jquery.com/jquery-3.6.0.slim.js',
        //'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js',
        'https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.16/d3.min.js',

        'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js',

        'js/record.js',
        'js/text_to_speech.js',
        'js/modified.js',
        'js/countdown.js',
        //'js/test.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
