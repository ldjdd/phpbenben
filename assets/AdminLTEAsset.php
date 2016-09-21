<?php
/**
 * @link http://www.2ddbb.com/
 * @copyright Copyright (c) 2016 ddbb Software LLC
 * @license http://www.2ddbb.com/license/
 */

namespace benben\assets;

use yii\web\AssetBundle;

/**
 * Asset bundle for the JQuery Form plugin js file.
 *
 * @author ldj <ldjbenben@sina.com>
 */
class AdminLTEAsset extends BenbenAsset
{
    /* (non-PHPdoc)
     * @see \yii\web\AssetBundle::init()
     */
    public function init()
    {
        $this->sourcePath .= DIRECTORY_SEPARATOR. 'AdminLTE' ;
    }
    
    public $js = [
        'AdminLTE.js',
        'AdminLTE.min.js',
    ];
    public $css = [
        'AdminLTE.css',
        'AdminLTE.min.css',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];

}