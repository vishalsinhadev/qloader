<?php
namespace common\components\loader\assets;

use yii\web\AssetBundle;

class LoaderAssets extends AssetBundle
{

    public static $type;

    public $sourcePath = '@common/components/loader/assets';

    /*
     * public $css = [
     * 'css/spinner.css'
     * ];
     */
    public $js = [
        'js/loader.js'
    ];

    public function init()
    {
        parent::init();
        $this->css = [
            'css/' . static::$type
        ];
    }
}
?>