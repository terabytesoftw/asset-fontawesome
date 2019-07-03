<?php

namespace terabytesoft\assets\fontawesome\min\css;

use yii\web\AssetBundle;

/**
 * NpmBrandAsset
 *
 * The asset font awesome free brands css webFont minified
 **/
class NpmBrandAsset extends AssetBundle
{
    /**
     * @var array $css
     */
    public $css = [
        'css/brands.min.css',
    ];

    /**
     * @var array $depends
     */
    public $depends = [
        \terabytesoft\assets\fontawesome\min\css\NpmFontAwesomeAsset::class,
    ];

    /**
     * @var array $publishOptions
     */
    public $publishOptions = [
        'only' => [
            'css/brands.min.css',
            'css/fontawesome.min.css',
            'webfonts/fa-brands*',
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
