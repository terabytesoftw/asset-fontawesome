<?php

namespace terabytesoft\assets\fontawesome\dev;

use yii\web\AssetBundle;

/**
 * NpmUtilitiesCssAsset
 *
 * The asset utilities font awesome free css webfont developer
 **/
class NpmUtilitiesCssAsset extends AssetBundle
{
    /**
     * @var array $css
     */
    public $css = [
        'css/svg-with-js.css',
        'css/v4-shims.css',
    ];

    /**
     * @var array $publishOptions
     */
    public $publishOptions = [
        'only' => [
            'css/svg-with-js.css',
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
