<?php

namespace terabytesoft\assets\fontawesome\cdn\js;

use yii\web\AssetBundle;

/**
 * CdnAllAsset
 *
 * The asset font awesome free all js svg
 **/
class CdnAllAsset extends AssetBundle
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
        $this->js[] = \Yii::$app->params['asset.fontawesome.cdn.js.CdnAllAsset'];
    }
}
