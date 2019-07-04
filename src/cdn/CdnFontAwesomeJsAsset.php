<?php

namespace terabytesoft\assets\fontawesome\cdn;

use yii\web\AssetBundle;

/**
 * CdnFontAwesomeJsAsset
 *
 * The asset font awesome free js svgfont content delivery network
 **/
class CdnFontAwesomeJsAsset extends AssetBundle
{
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
            \Yii::$app->params['asset.fontawesome.cdn.js.fontawesome'],
        ];
    }
}
