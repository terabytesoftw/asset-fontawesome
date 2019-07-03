<?php

namespace terabytesoft\assets\fontawesome\cdn\js;

use yii\web\AssetBundle;

/**
 * CdnFontAwesomeAsset
 *
 * The asset font awesome free js svg
 **/
class CdnFontAwesomeAsset extends AssetBundle
{
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
        $this->js[] = \Yii::$app->params['asset.fontawesome.cdn.js.CdnFontAwesomeAsset'];
    }
}
