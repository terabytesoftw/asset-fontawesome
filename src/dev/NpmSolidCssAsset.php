<?php

namespace terabytesoft\assets\fontawesome\dev;

use yii\web\AssetBundle;

/**
 * NpmSolidCssAsset
 *
 * The asset font awesome free solid css webfont developer
 **/
class NpmSolidCssAsset extends AssetBundle
{
    /**
     * @var array $css
     */
    public $css = [
        'css/solid.css',
        'css/fontawesome.css',
        'css/svg-with-js.css',
        'css/v4-shims.css',
    ];

    /**
     * @var array $publishOptions
     */
    public $publishOptions = [
        'only' => [
            'css/solid.css',
            'css/fontawesome.css',
            'css/svg-with-js.css',
            'css/v4-shims.css',
            'webfonts/fa-solid*',
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
