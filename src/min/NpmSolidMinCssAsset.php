<?php

namespace terabytesoft\assets\fontawesome\min;

use yii\web\AssetBundle;

/**
 * NpmSolidMinCssAsset
 *
 * The asset font awesome free solid css webfont minified
 **/
class NpmSolidMinCssAsset extends AssetBundle
{
    /**
     * @var array $css
     */
    public $css = [
        'css/solid.min.css',
    ];

    /**
     * @var array $depends
     */
    public $depends = [
        \terabytesoft\assets\fontawesome\min\NpmFontAwesomeMinCssAsset::class,
        \terabytesoft\assets\fontawesome\min\NpmUtilitiesMinCssAsset::class,
    ];

    /**
     * @var array $publishOptions
     */
    public $publishOptions = [
        'only' => [
            'css/solid.min.css',
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
