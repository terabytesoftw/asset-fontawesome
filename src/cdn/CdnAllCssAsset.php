<?php

namespace terabytesoft\assets\fontawesome\cdn;

use yii\web\AssetBundle;

/**
 * CdnAllCssAsset
 *
 * The asset font awesome free all css webfont content delivery network
 **/
class CdnAllCssAsset extends AssetBundle
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
            \Yii::$app->params['asset.fontawesome.cdn.css.all'],
            \Yii::$app->params['asset.fontawesome.cdn.css.svg-with-js'],
            \Yii::$app->params['asset.fontawesome.cdn.css.v4-shims'],
        ];
    }
}
