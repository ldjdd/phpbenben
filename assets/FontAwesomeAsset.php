<?php
namespace benben\assets;

use benben\assets\BenbenAsset;

class FontAwesomeAsset extends BenbenAsset
{
    /* (non-PHPdoc)
     * @see \yii\web\AssetBundle::init()
     */
    public function init()
    {
        $this->sourcePath .= DIRECTORY_SEPARATOR . 'font-awesome';
    }
    
    
    
    public $css = [
        'css/font-awesome.min.css',
    ];
    
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}