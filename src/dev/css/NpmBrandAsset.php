<?php

namespace terabytesoft\assets\fontawesome\dev\css;

use yii\web\AssetBundle;

/**
 * NpmBrandAsset
 *
 * The asset font awesome free brands css webFont
 **/
class NpmBrandAsset extends AssetBundle
{
    /**
     * @var array $css
     */
    public $css = [
        'css/brands.css',
    ];

    /**
     * @var array $depends
     */
    public $depends = [
        \terabytesoft\assets\fontawesome\dev\css\NpmFontAwesomeAsset::class,
    ];

    /**
     * @var array $publishOptions
     */
    public $publishOptions = [
        'only' => [
            'css/brands.css',
            'css/fontawesome.css',
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
