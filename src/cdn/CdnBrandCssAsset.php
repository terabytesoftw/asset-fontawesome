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
     * @var array $depends
     */
    public $depends = [
        \terabytesoft\assets\fontawesome\cdn\CdnFontAwesomeCssAsset::class,
        \terabytesoft\assets\fontawesome\cdn\CdnUtilitiesCssAsset::class,
    ];

    /**
     * init
     */
    public function init()
    {
        parent::init();
        $this->css[] = [
            \Yii::$app->params['asset.fontawesome.cdn.css.brand'],
        ];
    }
}
