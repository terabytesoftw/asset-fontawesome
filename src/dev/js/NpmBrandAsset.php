<?php

namespace terabytesoft\assets\fontawesome\dev\js;

use yii\web\AssetBundle;

/**
 * NpmBrandAsset
 *
 * The asset font awesome free brands css svg
 **/
class NpmBrandAsset extends AssetBundle
{
    /**
     * @var array $depends
     */
    public $depends = [
        \terabytesoft\assets\fontawesome\dev\js\NpmFontAwesomeAsset::class,
    ];

    /**
     * @var array $js
     */
    public $js = [
        'js/brands.js',
    ];

    /**
     * @var array $publishOptions
     */
    public $publishOptions = [
        'only' => [
            'js/brands.js',
            'js/fontawesome.js',
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
