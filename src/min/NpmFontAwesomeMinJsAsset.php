<?php

namespace terabytesoft\assets\fontawesome\min;

use yii\web\AssetBundle;

/**
 * NpmFontAwesomeMinJsAsset
 *
 * The asset font awesome free css svgfont minified
 **/
class NpmFontAwesomeMinJsAsset extends AssetBundle
{
    /**
     * @var array $js
     */
    public $js = [
        'js/fontawesome.min.js',
    ];

    /**
     * @var array $publishOptions
     */
    public $publishOptions = [
        'only' => [
            'js/fontawesome.min.js',
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
