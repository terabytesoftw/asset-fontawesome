<?php

namespace terabytesoft\assets\fontawesome\min\js;

use yii\web\AssetBundle;

/**
 * NpmRegularAsset
 *
 * The asset font awesome free regular css svg minified
 **/
class NpmRegularAsset extends AssetBundle
{
    /**
     * @var array $js
     */
    public $js = [
        'js/regular.min.js',
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
            'js/fontawesome.min.js',
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
