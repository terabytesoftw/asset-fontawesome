<?php

namespace terabytesoft\assets\fontawesome\min;

use yii\web\AssetBundle;

/**
 * NpmRegularMinJsAsset
 *
 * The asset font awesome free regular css svg minified
 **/
class NpmRegularMinJsAsset extends AssetBundle
{
    /**
     * @var array $depends
     */
    public $depends = [
        \terabytesoft\assets\fontawesome\min\NpmFontAwesomeMinJsAsset::class,
        \terabytesoft\assets\fontawesome\min\NpmUtilitiesMinJsAsset::class,
    ];

    /**
     * @var array $js
     */
    public $js = [
        'js/regular.min.js',
    ];

    /**
     * @var array $publishOptions
     */
    public $publishOptions = [
        'only' => [
            'js/regular.min.js',
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
