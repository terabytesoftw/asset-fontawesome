<?php

namespace terabytesoft\assets\fontawesome\dev;

use yii\web\AssetBundle;

/**
 * NpmUtilitiesJsAsset
 *
 * The asset utilities font awesome free js svgfont developer
 **/
class NpmUtilitiesJsAsset extends AssetBundle
{
    /**
     * @var array $js
     */
    public $js = [
        'css/v4-shims.js',
    ];

    /**
     * @var array $publishOptions
     */
    public $publishOptions = [
        'only' => [
            'css/v4-shims.css',
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
