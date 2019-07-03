<?php

namespace terabytesoft\assets\fontawesome\dev\js;

use yii\web\AssetBundle;

/**
 * NpmFontAwesomeAsset
 *
 * The asset font awesome free css svg
 **/
class NpmFontAwesomeAsset extends AssetBundle
{
    /**
     * @var array $js
     */
    public $js = [
        'js/fontawesome.js',
    ];

    /**
     * @var array $publishOptions
     */
    public $publishOptions = [
        'only' => [
            'js/fontawesome.js',
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
