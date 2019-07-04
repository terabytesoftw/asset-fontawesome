<?php

namespace terabytesoft\assets\fontawesome\cdn;

use yii\web\AssetBundle;

/**
 * CdnRegularJsAsset
 *
 * The asset font awesome free regular js svgfont content delivery network
 **/
class CdnRegularJsAsset extends AssetBundle
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
    public function init(): void
    {
        parent::init();
        $this->js[] = [
            \Yii::$app->params['asset.fontawesome.cdn.js.regular'],
        ];
    }
}
