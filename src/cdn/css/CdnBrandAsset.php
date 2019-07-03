<?php

namespace terabytesoft\assets\fontawesome\cdn\css;

use yii\web\AssetBundle;

/**
 * CdnBrandAsset
 *
 * The asset font awesome free brands css webFont
 **/
class CdnBrandAsset extends AssetBundle
{
    /**
     * @var array $css
     */
    public $css = [];

    /**
     * @var array $depends
     */
    public $depends = [
        \terabytesoft\assets\fontawesome\cdn\css\CdnFontAwesomeAsset::class,
    ];

    /**
     * init
     */
    public function init()
    {
        parent::init();
        $this->css[] = \Yii::$app->params['asset.fontawesome.cdn.css.CdnBrandAsset'];
    }
}
