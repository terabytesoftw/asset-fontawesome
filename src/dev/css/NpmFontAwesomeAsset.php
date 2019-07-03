<?php

namespace terabytesoft\assets\fontawesome\dev\css;

use yii\web\AssetBundle;

/**
 * NpmFontAwesomeAsset
 *
 * The asset font awesome free css webFont
 **/
class NpmFontAwesomeAsset extends AssetBundle
{
    /**
     * @var array $css
     */
    public $css = [
        'css/fontawesome.css',
    ];

    /**
     * @var array $publishOptions
     */
    public $publishOptions = [
        'only' => [
            'css/fontawesome.css',
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
