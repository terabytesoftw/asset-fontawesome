<?php

namespace terabytesoft\assets\fontawesome\cdn;

use yii\web\AssetBundle;

/**
 * CdnBrandCssAsset
 *
 * The asset font awesome free brand css webfont content delivery network
 **/
class CdnBrandCssAsset extends AssetBundle
{
    /**
     * @var array $css
     */
    public $css = [];

    /**
     * init
     */
    public function init()
    {
        parent::init();
        $this->css[] = [
            \Yii::$app->params['asset.fontawesome.cdn.css.brand'],
            \Yii::$app->params['asset.fontawesome.cdn.css.fontawesome'],
            \Yii::$app->params['asset.fontawesome.cdn.css.svg-with-js'],
            \Yii::$app->params['asset.fontawesome.cdn.css.v4-shims'],
        ];
    }
}
