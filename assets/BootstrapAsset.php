<?php
namespace benben\assets;

use benben\assets\BenbenAsset;

class BootstrapAsset extends BenbenAsset
{
    /* (non-PHPdoc)
     * @see \yii\web\AssetBundle::init()
     */
    public function init()
    {
        $this->sourcePath .= DIRECTORY_SEPARATOR . 'bootstrap';
    }
    
    public $js = [
        'js/bootstrap.js',
        'js/bootstrap.min.js',
        'js/npm.js',
    ];
    
    public $css = [
        'css/bootstrap.css',
        'css/bootstrap.min.css',
    ];
    
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}