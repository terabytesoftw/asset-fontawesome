<?php

namespace terabytesoft\assets\fontawesome\dev;

use yii\web\AssetBundle;

/**
 * NpmSolidJsAsset
 *
 * The asset font awesome free solid js svgfont developer
 **/
class NpmSolidJsAsset extends AssetBundle
{
    /**
     * @var array $js
     */
    public $js = [
        'js/solid.js',
        'js/fontawesome.js',
        'js/v4-shims.js',
    ];

    /**
     * @var array $publishOptions
     */
    public $publishOptions = [
        'only' => [
            'js/solid.js',
            'js/fontawesome.js',
            'js/v4-shims.js',
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
