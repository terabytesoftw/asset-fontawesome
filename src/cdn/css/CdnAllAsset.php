<?php

namespace terabytesoft\assets\fontawesome\cdn\css;

use yii\web\AssetBundle;

/**
 * CdnAllAsset
 *
 * The asset font awesome free all css webFont
 **/
class CdnAllAsset extends AssetBundle
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
        $this->css[] = \Yii::$app->params['asset.fontawesome.cdn.css.CdnAllAsset'];
    }
}
