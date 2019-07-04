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
     * @var array $depends
     */
    public $depends = [
        \terabytesoft\assets\fontawesome\dev\NpmFontAwesomeJsAsset::class,
        \terabytesoft\assets\fontawesome\dev\NpmUtilitiesJsAsset::class,
    ];

    /**
     * @var array $js
     */
    public $js = [
        'js/all.js',
    ];

    /**
     * @var array $publishOptions
     */
    public $publishOptions = [
        'only' => [
            'js/all.js',
            'svgs/*',
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
