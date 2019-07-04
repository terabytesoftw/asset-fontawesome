<?php

namespace terabytesoft\assets\fontawesome\dev;

use yii\web\AssetBundle;

/**
 * NpmFontAwesomeCssAsset
 *
 * The asset font awesome free css webfont developer
 **/
class NpmFontAwesomeCssAsset extends AssetBundle
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
