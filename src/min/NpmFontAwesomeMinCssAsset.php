<?php

namespace terabytesoft\assets\fontawesome\min;

use yii\web\AssetBundle;

/**
 * NpmFontAwesomeMinCssAsset
 *
 * The asset font awesome free css webfont minified
 **/
class NpmFontAwesomeMinCssAsset extends AssetBundle
{
    /**
     * @var array $css
     */
    public $css = [
        'css/fontawesome.min.css',
    ];

    /**
     * @var array $publishOptions
     */
    public $publishOptions = [
        'only' => [
            'css/fontawesome.min.css',
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
