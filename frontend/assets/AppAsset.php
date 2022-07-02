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
        'css/site.css',
        'css/modified.css'
    ];
    public $js = [
        //'https://code.jquery.com/jquery-3.6.0.slim.js',
        //'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js',
        'js/record.js',
        'js/text_to_speech.js',
        'js/modified.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
