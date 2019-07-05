<?php

namespace terabytesoft\assets\fontawesome\min;

use yii\web\AssetBundle;

/**
 * NpmAllMinJsAsset
 *
 * The asset font awesome free all css svgfont minified
 **/
class NpmAllMinJsAsset extends AssetBundle
{
    /**
     * @var array $js
     */
    public $js = [
        'js/all.min.js',
        'js/fontawesome.min.js',
        'js/v4-shims.min.js',
    ];

    /**
     * @var array $publishOptions
     */
    public $publishOptions = [
        'only' => [
            'js/all.min.js',
            'js/fontawesome.min.js',
            'js/v4-shims.min.js',
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
