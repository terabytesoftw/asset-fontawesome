<?php

namespace terabytesoft\assets\fontawesome\cdn;

use yii\web\AssetBundle;

/**
 * CdnUtilitiesCssAsset
 *
 * The asset utilities font awesome free css webfont content delivery network
 **/
class CdnUtilitiesCssAsset extends AssetBundle
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
        $this->css[] = [
            \Yii::$app->params['asset.fontawesome.cdn.css.svg-with-js'],
            \Yii::$app->params['asset.fontawesome.cdn.css.v4-shims'],
        ];
    }
}
