<?php

namespace terabytesoft\assets\fontawesome\dev;

use yii\web\AssetBundle;

/**
 * NpmBrandJsAsset
 *
 * The asset font awesome free brand js svgfont developer
 **/
class NpmBrandJsAsset extends AssetBundle
{
    /**
     * @var array $js
     */
    public $js = [
        'js/brands.js',
        'js/fontawesome.js',
        'js/v4-shims.js',
    ];

    /**
     * @var array $publishOptions
     */
    public $publishOptions = [
        'only' => [
            'js/brands.js',
            'js/fontawesome.js',
            'js/v4-shims.js',
            'svgs/brands/*',
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
