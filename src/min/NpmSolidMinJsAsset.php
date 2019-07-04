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
        'js/solid.min.js',
    ];

    /**
     * @var array $publishOptions
     */
    public $publishOptions = [
        'only' => [
            'js/solid.min.js',
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
