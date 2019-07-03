<?php

namespace terabytesoft\assets\fontawesome\min\js;

use yii\web\AssetBundle;

/**
 * NpmSolidAsset
 *
 * The asset font awesome free solid css svg
 **/
class NpmSolidAsset extends AssetBundle
{
    /**
     * @var array $js
     */
    public $js = [
        'js/solid.min.js',
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
            'js/solid.min.js',
            'js/regular.min.js',
            'svgs/solid/*',
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
