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
        'js/regular.js',
    ];

    /**
     * @var array $publishOptions
     */
    public $publishOptions = [
        'only' => [
            'js/regular.js',
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
