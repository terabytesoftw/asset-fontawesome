<?php

namespace terabytesoft\assets\fontawesome\min\css;

use yii\web\AssetBundle;

/**
 * NpmSolidAsset
 *
 * The asset font awesome free solid css webFont minified
 **/
class NpmSolidAsset extends AssetBundle
{
    /**
     * @var array $css
     */
    public $css = [
        'css/solid.min.css',
    ];

    /**
     * @var array $depends
     */
    public $depends = [
        \terabytesoft\assets\fontawesome\min\css\NpmFontAwesomeAsset::class,
    ];

    /**
     * @var array $publishOptions
     */
    public $publishOptions = [
        'only' => [
            'css/fontawesome.min.css',
            'css/solid.min.css',
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
