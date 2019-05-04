<?php
namespace common\components\loader;

use common\components\loader\assets\LoaderAssets;
use yii\base\Widget;

class Loader extends Widget
{

    const TYPE_LINEAR = 1;

    const TYPE_SPINNER = 2;

    const TYPE_DONUT = 3;

    public $type = self::TYPE_SPINNER;

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        switch ($this->type) {
            case self::TYPE_LINEAR:
                LoaderAssets::$type = 'loader.css';
                echo '<div class="lds-ellipsis" id="qloader" style="display:none"><div></div><div></div><div></div><div></div></div>';
                break;
            case self::TYPE_SPINNER:
                LoaderAssets::$type = 'spinner.css';
                echo '<div class="lds-roller" id="qloader" style="display:none"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>';
                break;
            case self::TYPE_DONUT:
                LoaderAssets::$type = 'donut.css';
                echo '<div class="donut"></div>';
                break;
        }
        LoaderAssets::register($this->view);
    }
}
?>