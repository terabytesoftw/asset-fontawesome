<?php

namespace terabytesoft\assets\fontawesome\min;

use yii\web\AssetBundle;

/**
 * NpmRegularMinCssAsset
 *
 * The asset font awesome free regular css webfont minified
 **/
class NpmRegularMinCssAsset extends AssetBundle
{
    /**
     * @var array $css
     */
    public $css = [
        'css/regular.min.css',
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
            'css/regular.min.css',
            'svgs/regular/*',
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
