<?php

namespace terabytesoft\assets\fontawesome\cdn\js;

use yii\web\AssetBundle;

/**
 * CdnRegularAsset
 *
 * The asset font awesome free regular js svg
 **/
class CdnRegularAsset extends AssetBundle
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
        $this->js[] = \Yii::$app->params['asset.fontawesome.cdn.js.CdnRegularAsset'];
    }
}
