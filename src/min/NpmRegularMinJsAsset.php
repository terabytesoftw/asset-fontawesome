<?php

namespace terabytesoft\assets\fontawesome\min;

use yii\web\AssetBundle;

/**
 * NpmRegularMinJsAsset
 *
 * The asset font awesome free regular css svg minified
 **/
class NpmRegularMinJsAsset extends AssetBundle
{
    /**
     * @var array $js
     */
    public $js = [
        'js/regular.min.js',
        'js/fontawesome.min.js',
        'js/v4-shims.min.js',
    ];

    /**
     * @var array $publishOptions
     */
    public $publishOptions = [
        'only' => [
            'js/regular.min.js',
            'js/fontawesome.min.js',
            'js/v4-shims.min.js',
            'svgs/regular/*',
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
