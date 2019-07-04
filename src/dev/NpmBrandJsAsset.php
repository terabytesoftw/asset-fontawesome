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
        'js/brands.js',
    ];

    /**
     * @var array $publishOptions
     */
    public $publishOptions = [
        'only' => [
            'js/brands.js',
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
