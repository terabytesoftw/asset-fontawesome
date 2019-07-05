<?php

namespace terabytesoft\assets\fontawesome\dev;

use yii\web\AssetBundle;

/**
 * NpmRegularJsAsset
 *
 * The asset font awesome free regular dev js svgfont developer
 **/
class NpmRegularJsAsset extends AssetBundle
{
    /**
     * @var array $js
     */
    public $js = [
        'js/regular.js',
        'js/fontawesome.js',
        'js/v4-shims.js',
    ];

    /**
     * @var array $publishOptions
     */
    public $publishOptions = [
        'only' => [
            'js/regular.js',
            'js/fontawesome.js',
            'js/v4-shims.js',
            'svgs/regular/*',
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
