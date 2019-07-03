<?php

namespace terabytesoft\assets\fontawesome\min\js;

use yii\web\AssetBundle;

/**
 * NpmBrandAsset
 *
 * The asset font awesome free brands css svg minified
 **/
class NpmBrandAsset extends AssetBundle
{
    /**
     * @var array $js
     */
    public $js = [
        'js/brands.min.js',
    ];

    /**
     * @var array $depends
     */
    public $depends = [
        \terabytesoft\assets\fontawesome\min\js\NpmFontAwesomeAsset::class,
    ];

    /**
     * @var array $publishOptions
     */
    public $publishOptions = [
        'only' => [
            'js/brands.min.js',
            'js/fontawesome.min.js',
            'svgs/brands/*',
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
