<?php

namespace terabytesoft\assets\fontawesome\dev;

use yii\web\AssetBundle;

/**
 * NpmRegularCssAsset
 *
 * The asset font awesome free regular css webfont developer
 **/
class NpmRegularCssAsset extends AssetBundle
{
    /**
     * @var array $css
     */
    public $css = [
        'css/regular.css',
        'css/fontawesome.css',
        'css/svg-with-js.css',
        'css/v4-shims.css',
    ];

    /**
     * @var array $publishOptions
     */
    public $publishOptions = [
        'only' => [
            'css/regular.css',
            'css/fontawesome.css',
            'css/svg-with-js.css',
            'css/v4-shims.css',
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
