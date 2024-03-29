<?php

namespace terabytesoft\assets\fontawesome\cdn;

use yii\web\AssetBundle;

/**
 * CdnAllJsAsset
 *
 * The asset font awesome free all js svgfont content delivery network
 **/
class CdnAllJsAsset extends AssetBundle
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
            \Yii::$app->params['asset.fontawesome.cdn.js.all'],
            \Yii::$app->params['asset.fontawesome.cdn.js.v4-shims'],
        ];
    }
}
