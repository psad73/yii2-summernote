<?php
/**
 * 
 */

namespace psad73\summernote;

use yii\web\AssetBundle;

class SummernoteAsset extends AssetBundle
{
    public $sourcePath = '@vendor/psad73/yii2-summernote/assets/';
    public $css = [
        'summernote.min.css',
        'codemirror.css',
        'monokai.css'
    ];
    public $js = [
        'codemirror.js',
        'xml.js',
        'summernote.conf.js',
        'summernote.min.js',
        'summernote-image-title.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}