<?php

namespace terabytesoft\assets\fontawesome\min;

use yii\web\AssetBundle;

/**
 * NpmUtilitiesMinJsAsset
 *
 * The asset utilities font awesome free js svgfont minified
 **/
class NpmUtilitiesMinJsAsset extends AssetBundle
{
    /**
     * @var array $js
     */
    public $js = [
        'css/v4-shims.min.js',
    ];

    /**
     * @var array $publishOptions
     */
    public $publishOptions = [
        'only' => [
            'css/v4-shims.min.js',
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
