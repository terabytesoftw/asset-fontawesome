<?php

namespace terabytesoft\assets\fontawesome\min;

use yii\web\AssetBundle;

/**
 * NpmRegularMinCssAsset
 *
 * The asset font awesome free regular css webfont minified
 **/
class NpmRegularMinCssAsset extends AssetBundle
{
    /**
     * @var array $css
     */
    public $css = [
        'css/regular.min.css',
        'css/fontawesome.min.css',
        'css/svg-with-js.min.css',
        'css/v4-shims.min.css',
    ];

    /**
     * @var array $publishOptions
     */
    public $publishOptions = [
        'only' => [
            'css/regular.min.css',
            'css/fontawesome.min.css',
            'css/svg-with-js.min.css',
            'css/v4-shims.min.css',
            'webfonts/fa-regular*',
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
