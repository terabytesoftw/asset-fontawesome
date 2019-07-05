<?php

namespace terabytesoft\assets\fontawesome\cdn;

use yii\web\AssetBundle;

/**
 * CdnSolidCssAsset
 *
 * The asset font awesome free solid css webfont content delivery network
 **/
class CdnSolidCssAsset extends AssetBundle
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
            \Yii::$app->params['asset.fontawesome.cdn.css.solid'],
            \Yii::$app->params['asset.fontawesome.cdn.css.fontawesome'],
            \Yii::$app->params['asset.fontawesome.cdn.css.svg-with-js'],
            \Yii::$app->params['asset.fontawesome.cdn.css.v4-shims'],
        ];
    }
}
