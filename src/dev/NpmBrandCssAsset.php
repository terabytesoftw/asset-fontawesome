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
        'css/fontawesome.css',
        'css/svg-with-js.css',
        'css/v4-shims.css',
    ];

    /**
     * @var array $publishOptions
     */
    public $publishOptions = [
        'only' => [
            'css/brands.css',
            'css/fontawesome.css',
            'css/svg-with-js.css',
            'css/v4-shims.css',
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
