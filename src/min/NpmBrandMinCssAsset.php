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
        'css/fontawesome.min.css',
        'css/svg-with-js.min.css',
        'css/v4-shims.min.css',
    ];

    /**
     * @var array $publishOptions
     */
    public $publishOptions = [
        'only' => [
            'css/brands.min.css',
            'css/fontawesome.min.css',
            'css/svg-with-js.min.css',
            'css/v4-shims.min.css',
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
