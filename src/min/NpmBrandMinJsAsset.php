<?php

namespace terabytesoft\assets\fontawesome\min;

use yii\web\AssetBundle;

/**
 * NpmBrandMinJsAsset
 *
 * The asset font awesome free brands css svgfont minified
 **/
class NpmBrandMinJsAsset extends AssetBundle
{
    /**
     * @var array $js
     */
    public $js = [
        'js/brands.min.js',
        'js/fontawesome.min.js',
        'js/v4-shims.min.js',
    ];

    /**
     * @var array $publishOptions
     */
    public $publishOptions = [
        'only' => [
            'js/brands.min.js',
            'js/fontawesome.min.js',
            'js/v4-shims.min.js',
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
