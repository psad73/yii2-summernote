<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
namespace psad73\summernote;

use yii\web\AssetBundle;

class SummernoteNodeAsset extends AssetBundle
{

    public $sourcePath = '@vendor/psad73/yii2-summernote/node_modules/summernote/dist/';
    public $css = [
        'summernote.min.css',
    ];
    public $js = [
        'summernote.min.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',        
    ];

}
