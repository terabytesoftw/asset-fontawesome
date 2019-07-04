<?php

namespace terabytesoft\assets\fontawesome\dev;

use yii\web\AssetBundle;

/**
 * NpmRegularCssAsset
 *
 * The asset font awesome free regular css webfont developer
 **/
class NpmRegularCssAsset extends AssetBundle
{
    /**
     * @var array $css
     */
    public $css = [
        'css/regular.css',
    ];

    /**
     * @var array $depends
     */
    public $depends = [
        \terabytesoft\assets\fontawesome\dev\NpmFontAwesomeCssAsset::class,
        \terabytesoft\assets\fontawesome\dev\NpmUtilitiesCssAsset::class,
    ];

    /**
     * @var array $publishOptions
     */
    public $publishOptions = [
        'only' => [
            'css/regular.css',
            'webfonts/fa-regular*',
        ],
    ];

    /**
     * @var string $sourcePath
     */
    public $sourcePath = '@npm/fortawesome--fontawesome-free/';

    /**
     * init
     */
    public function init(): void
    {
        parent::init();
    }
}
