<?php

namespace terabytesoft\assets\fontawesome\min\css;

use yii\web\AssetBundle;

/**
 * NpmAllAsset
 *
 * The asset font awesome free all css webFont minified
 **/
class NpmAllAsset extends AssetBundle
{
    /**
     * @var array $css
     */
    public $css = [
        'css/all.min.css',
    ];

    /**
     * @var array $publishOptions
     */
    public $publishOptions = [
        'only' => [
            'css/all.min.css',
            'css/fontawesome.min.css',
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
