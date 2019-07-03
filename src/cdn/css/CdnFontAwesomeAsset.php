<?php

namespace terabytesoft\assets\fontawesome\cdn\css;

use yii\web\AssetBundle;

/**
 * CdnFontAwesomeAsset
 *
 * The asset font awesome free css webFont
 **/
class CdnFontAwesomeAsset extends AssetBundle
{
    /**
     * @var array $css
     */
    public $css = [];

    /**
     * init
     */
    public function init(): void
    {
        parent::init();
        $this->css[] = \Yii::$app->params['asset.fontawesome.cdn.css.CdnFontAwesomeAsset'];
    }
}
