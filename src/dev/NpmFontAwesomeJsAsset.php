<?php

namespace terabytesoft\assets\fontawesome\dev;

use yii\web\AssetBundle;

/**
 * NpmFontAwesomeJsAsset
 *
 * The asset font awesome free js svgfont developer
 **/
class NpmFontAwesomeJsAsset extends AssetBundle
{
    /**
     * @var array $js
     */
    public $js = [
        'js/fontawesome.js',
    ];

    /**
     * @var array $publishOptions
     */
    public $publishOptions = [
        'only' => [
            'js/fontawesome.js',
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
