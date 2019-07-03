<?php

namespace terabytesoft\assets\fontawesome\min\js;

use yii\web\AssetBundle;

/**
 * NpmAllAsset
 *
 * The asset font awesome free all css svg minified
 **/
class NpmAllAsset extends AssetBundle
{
    /**
     * @var array $js
     */
    public $js = [
        'js/all.min.js',
    ];

    /**
     * @var array $publishOptions
     */
    public $publishOptions = [
        'only' => [
            'js/all.min.js',
            'js/fontawesome.min.js',
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
