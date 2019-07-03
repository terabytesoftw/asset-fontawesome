<?php

namespace terabytesoft\assets\fontawesome\cdn\css;

use yii\web\AssetBundle;

/**
 * CdnRegularAsset
 *
 * The asset font awesome free regular css webFont
 **/
class CdnRegularAsset extends AssetBundle
{
    /**
     * @var array $css
     */
    public $css = [];

    /**
     * @var array $depends
     */
    public $depends = [
        \terabytesoft\assets\fontawesome\cdn\css\CdnFontAwesomeAsset::class,
    ];

    /**
     * init
     */
    public function init(): void
    {
        parent::init();
        $this->css[] = \Yii::$app->params['asset.fontawesome.cdn.css.CdnRegularAsset'];
    }
}
