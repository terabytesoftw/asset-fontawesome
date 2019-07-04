<?php

namespace terabytesoft\assets\fontawesome\dev;

use yii\web\AssetBundle;

/**
 * NpmBrandCssAsset
 *
 * The asset font awesome free brand css webfont developer
 **/
class NpmBrandCssAsset extends AssetBundle
{
    /**
     * @var array $css
     */
    public $css = [
        'css/brands.css',
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
            'css/brands.css',
            'webfonts/fa-brands*',
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
