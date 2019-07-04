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
        'js/solid.js',
    ];

    /**
     * @var array $publishOptions
     */
    public $publishOptions = [
        'only' => [
            'js/solid.js',
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
