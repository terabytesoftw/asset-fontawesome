<?php

namespace terabytesoft\assets\fontawesome\min\css;

use yii\web\AssetBundle;

/**
 * NpmFontAwesomeAsset
 *
 * The asset font awesome free css webFont minified
 **/
class NpmFontAwesomeAsset extends AssetBundle
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
