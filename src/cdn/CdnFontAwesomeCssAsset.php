<?php

namespace terabytesoft\assets\fontawesome\cdn;

use yii\web\AssetBundle;

/**
 * CdnFontAwesomeCssAsset
 *
 * The asset font awesome free css webfont content delivery network
 **/
class CdnFontAwesomeCssAsset extends AssetBundle
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
            \Yii::$app->params['asset.fontawesome.cdn.css.fontawesome'],
        ];
    }
}
