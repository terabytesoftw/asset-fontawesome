<?php

namespace terabytesoft\assets\fontawesome\dev\css;

use yii\web\AssetBundle;

/**
 * NpmRegularAsset
 *
 * The asset font awesome free regular css webFont
 **/
class NpmRegularAsset extends AssetBundle
{
    /**
     * @var array $css
     */
    public $css = [
        'css/regular.css',
    ];

    /**
     * @var array $depends
     */
    public $depends = [
        \terabytesoft\assets\fontawesome\dev\css\NpmFontAwesomeAsset::class,
    ];

    /**
     * @var array $publishOptions
     */
    public $publishOptions = [
        'only' => [
            'css/fontawesome.css',
            'css/regular.css',
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
