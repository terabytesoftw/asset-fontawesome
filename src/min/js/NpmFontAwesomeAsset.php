<?php

namespace terabytesoft\assets\fontawesome\min\js;

use yii\web\AssetBundle;

/**
 * NpmFontAwesomeAsset
 *
 * The asset font awesome free css svg minified
 **/
class NpmFontAwesomeAsset extends AssetBundle
{
    /**
     * @var array $js
     */
    public $js = [
        'js/fontawesome.min.js',
    ];

    /**
     * @var array $publishOptions
     */
    public $publishOptions = [
        'only' => [
            'js/fontawesome.min.js',
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
