<?php

namespace terabytesoft\assets\fontawesome\dev;

use yii\web\AssetBundle;

/**
 * NpmAllCssAsset
 *
 * The asset font awesome free all css webfont developer
 **/
class NpmAllCssAsset extends AssetBundle
{
    /**
     * @var array $css
     */
    public $css = [
        'css/all.css',
    ];

    /**
     * @var array $depends
     */
    public $depends = [
        \terabytesoft\assets\fontawesome\dev\NpmFontAwesomeCssAsset::class,
        \terabytesoft\assets\fontawesome\dev\NpmUtilitiesCssAsset::class,

    ];

    /**
     * @var array $publishOptions
     */
    public $publishOptions = [
        'only' => [
            'css/all.css',
            'webfonts/*',
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
