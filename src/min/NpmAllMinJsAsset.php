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
        'js/all.min.js',
    ];

    /**
     * @var array $publishOptions
     */
    public $publishOptions = [
        'only' => [
            'js/all.min.js',
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
