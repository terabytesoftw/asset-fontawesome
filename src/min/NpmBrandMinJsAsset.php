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
     * @var array $depends
     */
    public $depends = [
        \terabytesoft\assets\fontawesome\min\NpmFontAwesomeMinJsAsset::class,
        \terabytesoft\assets\fontawesome\min\NpmUtilitiesMinJsAsset::class,
    ];

    /**
     * @var array $js
     */
    public $js = [
        'js/brands.min.js',
    ];

    /**
     * @var array $publishOptions
     */
    public $publishOptions = [
        'only' => [
            'js/brands.min.js',
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
