<?php

namespace terabytesoft\assets\fontawesome\cdn;

use yii\web\AssetBundle;

/**
 * CdnSolidJsAsset
 *
 * The asset font awesome free solid js svgfont content delivery network
 **/
class CdnSolidJsAsset extends AssetBundle
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
            \Yii::$app->params['asset.fontawesome.cdn.js.solid'],
            \Yii::$app->params['asset.fontawesome.cdn.js.fontawesome'],
            \Yii::$app->params['asset.fontawesome.cdn.js.v4-shims'],
        ];
    }
}
