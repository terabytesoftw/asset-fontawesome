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
     * @var array $depends
     */
    public $depends = [
        \terabytesoft\assets\fontawesome\cdn\CdnFontAwesomeCssAsset::class,
        \terabytesoft\assets\fontawesome\cdn\CdnUtilitiesCssAsset::class,
    ];

    /**
     * init
     */
    public function init(): void
    {
        parent::init();
        $this->css[] = [
            \Yii::$app->params['asset.fontawesome.cdn.css.solid'],
        ];
    }
}
