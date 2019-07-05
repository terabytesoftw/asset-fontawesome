<?php

namespace terabytesoft\assets\fontawesome\min;

use yii\web\AssetBundle;

/**
 * NpmSolidMinJsAsset
 *
 * The asset font awesome free solid css svgfont minified
 **/
class NpmSolidMinJsAsset extends AssetBundle
{
    /**
     * @var array $js
     */
    public $js = [
        'js/solid.min.js',
        'js/fontawesome.min.js',
        'js/v4-shims.min.js',
    ];

    /**
     * @var array $publishOptions
     */
    public $publishOptions = [
        'only' => [
            'js/solid.min.js',
            'js/fontawesome.min.js',
            'js/v4-shims.min.js',
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
