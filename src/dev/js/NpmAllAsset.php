<?php

namespace terabytesoft\assets\fontawesome\dev\js;

use yii\web\AssetBundle;

/**
 * NpmAllAsset
 *
 * The asset font awesome free all js svg
 **/
class NpmAllAsset extends AssetBundle
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
        'js/all.js',
    ];

    /**
     * @var array $publishOptions
     */
    public $publishOptions = [
        'only' => [
            'js/all.js',
            'js/fontawesome.js',
            'svgs/*',
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
