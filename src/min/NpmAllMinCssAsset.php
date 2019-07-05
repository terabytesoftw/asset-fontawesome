<?php

namespace terabytesoft\assets\fontawesome\min;

use yii\web\AssetBundle;

/**
 * NpmAllMinCssAsset
 *
 * The asset font awesome free all css webfont minified
 **/
class NpmAllMinCssAsset extends AssetBundle
{
    /**
     * @var array $css
     */
    public $css = [
        'css/all.min.css',
        'css/fontawesome.min.css',
        'css/svg-with-js.min.css',
        'css/v4-shims.min.css',
    ];

    /**
     * @var array $publishOptions
     */
    public $publishOptions = [
        'only' => [
            'css/all.min.css',
            'css/fontawesome.min.css',
            'css/svg-with-js.min.css',
            'css/v4-shims.min.css',
            'webfonts/*',
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
