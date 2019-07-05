<?php

namespace terabytesoft\assets\fontawesome\cdn;

use yii\web\AssetBundle;

/**
 * CdnRegularCssAsset
 *
 * The asset font awesome free regular css webfont content delivery network
 **/
class CdnRegularCssAsset extends AssetBundle
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
            \Yii::$app->params['asset.fontawesome.cdn.css.regular'],
            \Yii::$app->params['asset.fontawesome.cdn.css.fontawesome'],
            \Yii::$app->params['asset.fontawesome.cdn.css.svg-with-js'],
            \Yii::$app->params['asset.fontawesome.cdn.css.v4-shims'],
        ];
    }
}
