<?php

namespace terabytesoft\assets\fontawesome\cdn\js;

use yii\web\AssetBundle;

/**
 * CdnBrandAsset
 *
 * The asset font awesome free brands js svg
 **/
class CdnBrandAsset extends AssetBundle
{
    /**
     * @var array $depends
     */
    public $depends = [
        \terabytesoft\assets\fontawesome\cdn\js\CdnFontAwesomeAsset::class,
    ];

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
        $this->js[] = \Yii::$app->params['asset.fontawesome.cdn.js.CdnBrandAsset'];
    }
}
