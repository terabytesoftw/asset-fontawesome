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
            \Yii::$app->params['asset.fontawesome.cdn.js.fontawesome'],
            \Yii::$app->params['asset.fontawesome.cdn.js.v4-shims'],
        ];
    }
}
