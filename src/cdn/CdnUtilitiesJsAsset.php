<?php

namespace terabytesoft\assets\fontawesome\cdn;

use yii\web\AssetBundle;

/**
 * CdnUtilitiesAsset
 *
 * The asset utilities font awesome free js svgfont content delivery network
 **/
class CdnUtilitiesJsAsset extends AssetBundle
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
            \Yii::$app->params['asset.fontawesome.cdn.js.v4-shims'],
        ];
    }
}
