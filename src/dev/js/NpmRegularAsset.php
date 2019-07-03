<?php

namespace terabytesoft\assets\fontawesome\dev\js;

use yii\web\AssetBundle;

/**
 * NpmRegularAsset
 *
 * The asset font awesome free regular css svg
 **/
class NpmRegularAsset extends AssetBundle
{
    /**
     * @var array $depends
     */
    public $depends = [
        \terabytesoft\assets\fontawesome\dev\js\NpmFontAwesomeAsset::class,
    ];

    /**
     * @var array $js
     */
    public $js = [
        'js/regular.js',
    ];

    /**
     * @var array $publishOptions
     */
    public $publishOptions = [
        'only' => [
            'js/fontawesome.js',
            'js/regular.js',
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
