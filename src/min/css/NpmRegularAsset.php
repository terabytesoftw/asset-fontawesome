<?php

namespace terabytesoft\assets\fontawesome\min\css;

use yii\web\AssetBundle;

/**
 * NpmRegularAsset
 *
 * The asset font awesome free regular css webFont minified
 **/
class NpmRegularAsset extends AssetBundle
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
        \terabytesoft\assets\fontawesome\min\css\NpmFontAwesomeAsset::class,
    ];

    /**
     * @var array $publishOptions
     */
    public $publishOptions = [
        'only' => [
            'css/fontawesome.css',
            'css/fontawesome.min.css',
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
