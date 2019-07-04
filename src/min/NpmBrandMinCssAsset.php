<?php

namespace terabytesoft\assets\fontawesome\min;

use yii\web\AssetBundle;

/**
 * NpmBrandMinCssAsset
 *
 * The asset font awesome free brand css webfont minified
 **/
class NpmBrandMinCssAsset extends AssetBundle
{
    /**
     * @var array $css
     */
    public $css = [
        'css/brands.min.css',
    ];

    /**
     * @var array $depends
     */
    public $depends = [
        \terabytesoft\assets\fontawesome\min\NpmFontAwesomeMinCssAsset::class,
        \terabytesoft\assets\fontawesome\min\NpmUtilitiesMinCssAsset::class,
    ];

    /**
     * @var array $publishOptions
     */
    public $publishOptions = [
        'only' => [
            'css/brands.min.css',
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
