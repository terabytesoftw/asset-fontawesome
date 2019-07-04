<?php

namespace terabytesoft\assets\fontawesome\min;

use yii\web\AssetBundle;

/**
 * NpmUtilitiesMinCssAsset
 *
 * The asset utilities font awesome free css webfont minified
 **/
class NpmUtilitiesMinCssAsset extends AssetBundle
{
    /**
     * @var array $css
     */
    public $css = [
        'css/svg-with-js.min.css',
        'css/v4-shims.min.css',
    ];

    /**
     * @var array $publishOptions
     */
    public $publishOptions = [
        'only' => [
            'css/svg-with-js.min.css',
            'css/v4-shims.min.css',
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
