<?php

namespace terabytesoft\assets\fontawesome\dev;

use yii\web\AssetBundle;

/**
 * NpmSolidCssAsset
 *
 * The asset font awesome free solid css webfont developer
 **/
class NpmSolidCssAsset extends AssetBundle
{
    /**
     * @var array $css
     */
    public $css = [
        'css/solid.css',
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
            'css/solid.css',
            'webfonts/fa-solid*',
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
