<?php

namespace terabytesoft\assets\fontawesome\dev;

use yii\web\AssetBundle;

/**
 * NpmAllJsAsset
 *
 * The asset font awesome free all js svgfont developer
 **/
class NpmAllJsAsset extends AssetBundle
{
    /**
     * @var array $js
     */
    public $js = [
        'js/all.js',
        'js/fontawesome.js',
        'js/v4-shims.js',
    ];

    /**
     * @var array $publishOptions
     */
    public $publishOptions = [
        'only' => [
            'js/all.js',
            'js/fontawesome.js',
            'js/v4-shims.js',
            'svgs/brands/*',
            'svgs/regular/*',
            'svgs/solid/*',
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
