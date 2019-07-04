<?php

namespace terabytesoft\assets\fontawesome\cdn;

use yii\web\AssetBundle;

/**
 * CdnBrandJsAsset
 *
 * The asset font awesome free brands js svgfont content delivery network
 **/
class CdnBrandJsAsset extends AssetBundle
{
    /**
     * @var array $depends
     */
    public $depends = [
        \terabytesoft\assets\fontawesome\cdn\CdnFontAwesomeJsAsset::class,
        \terabytesoft\assets\fontawesome\cdn\CdnUtilitiesJsAsset::class,
    ];

    /**
     * @var array $js
     */
    public $js = [];

    /**
     * init
     */
    public function init()
    {
        parent::init();
        $this->js[] = [
            \Yii::$app->params['asset.fontawesome.cdn.js.brand'],
        ];
    }
}
