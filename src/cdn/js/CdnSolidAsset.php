<?php

namespace terabytesoft\assets\fontawesome\cdn\js;

use yii\web\AssetBundle;

/**
 * CdnSolidAsset
 *
 * The asset font awesome free solid js svg
 **/
class CdnSolidAsset extends AssetBundle
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
        $this->js[] = \Yii::$app->params['asset.fontawesome.cdn.js.CdnSolidAsset'];
    }
}
