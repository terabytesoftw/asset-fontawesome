<?php

namespace terabytesoft\assets\fontawesome\dev\js;

use yii\web\AssetBundle;

/**
 * NpmSolidAsset
 *
 * The asset font awesome free solid css svg
 **/
class NpmSolidAsset extends AssetBundle
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
        'js/solid.js',
    ];

    /**
     * @var array $publishOptions
     */
    public $publishOptions = [
        'only' => [
            'js/fontawesome.js',
            'js/solid.js',
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
