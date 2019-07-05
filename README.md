<p align="center">
    <a href="https://github.com/terabytesoftw/asset-fontawesome" target="_blank">
        <img src="https://lh3.googleusercontent.com/D9TFw1F6ddPuheDc_tpNptTdvTg-FNNpjLSBN14X6Sc-3JDiOxfE67rEh4OZfygonx1tKei2b2DEOHDLjF6T3xl8e-rkEEPZeGqLTWcS_v2cBRlyo0vcZLDHG5ivSDGIWCsenbol=w2400" height="50px;">
    </a>
    <h1 align="center">Asset FontAwesome Free</h1>
</p>

<p align="center">
    <a href="https://packagist.org/packages/terabytesoftw/asset-fontawesome" target="_blank">
        <img src="https://img.shields.io/packagist/vpre/terabytesoftw/asset-fontawesome.svg" alt="Unstable Version">
    </a>
    <a href="https://travis-ci.org/terabytesoftw/asset-fontawesome" target="_blank">
        <img src="https://travis-ci.org/terabytesoftw/asset-fontawesome.svg?branch=master" alt="Build Status">
    </a>  
    <a href="https://scrutinizer-ci.com/g/terabytesoftw/asset-fontawesome/" target="_blank">
        <img src="https://scrutinizer-ci.com/g/terabytesoftw/asset-fontawesome/badges/build.png?b=master" alt="Build Status">
    </a>
    <a href="https://scrutinizer-ci.com/g/terabytesoftw/asset-fontawesome/" target="_blank">
        <img src="https://scrutinizer-ci.com/g/terabytesoftw/asset-fontawesome/badges/coverage.png?b=master" alt="Build Status">
    </a>    
    <a href="https://scrutinizer-ci.com/g/terabytesoftw/asset-fontawesome/?branch=master" target="_blank">
     	<img src="https://scrutinizer-ci.com/g/terabytesoftw/asset-fontawesome/badges/quality-score.png?b=master" alt="Code Quality">
    </a>
    <a href="https://scrutinizer-ci.com/code-intelligence" target="_blank">
     	<img src="https://scrutinizer-ci.com/g/terabytesoftw/asset-fontawesome/badges/code-intelligence.svg?b=master" alt="Code Intelligence Status">
    </a>
    <a href="https://codeclimate.com/github/terabytesoftw/asset-fontawesome/maintainability" target="_blank">
        <img src="https://api.codeclimate.com/v1/badges/9bbe65b6fda1abd74c2c/maintainability" alt="Maintainability">
    </a>		
</p>

</br>

### **DIRECTORY STRUCTURE:**

```
config/             contains application configurations
node_modules/       contains dependency assets
src/                contains source files
tests/              contains tests codeception for the web application
vendor/             contains dependent 3rd-party packages
```

### **REQUIREMENTS:**

- The minimum requirement by this project template that your Web server supports:
    - PHP 7.2 or higher.

### **INSTALLATION:**

<p align="justify">
If you do not have <a href="http://getcomposer.org/" title="Composer" target="_blank">Composer</a>, you may install it by following the instructions at <a href="http://getcomposer.org/doc/00-intro.md#installation-nix" title="getcomposer.org" target="_blank">getcomposer.org</a>.
</p>

You can then install this extension using the following command composer:

~~~
composer require terabytesoftw/asset-fontawesome '^1.0@dev'
~~~

or add composer.json:

~~~
"terabytesoftw/asset-fontawesome":"^1.0@dev"
~~~

### **ASSETS FONTAWESOME:**

~~~
/** 
  * CONTENT DELIVERY NETWORK CSS
  * NAMESPACE: terabytesoft\assets\fontawesome\cdn
  */
- CdnAllCssAsset, CdnBrandCssAsset, CdnRegularCssAsset, CdnSolidCssAsset

/** 
  * CONTENT DELIVERY NETWORK JS
  * NAMESPACE: terabytesoft\assets\fontawesome\cdn
  */
- CdnAllJsAsset, CdnBrandJsAsset, CdnRegularJsAsset, CdnSolidJsAsset

/** 
  * DEVELOPER CSS
  * NAMESPACE: terabytesoft\assets\fontawesome\dev
  */
- NpmAllCssAsset, NpmBrandCssAsset, NpmRegularCssAsset, NpmSolidCssAsset

/** 
  * DEVELOPER JS
  * NAMESPACE: terabytesoft\assets\fontawesome\dev
  */
- NpmAllJsAsset, NpmBrandJsAsset, NpmRegularJsAsset, NpmSolidJsAsset

/** 
  * PRODUCTION CSS
  * NAMESPACE: terabytesoft\assets\fontawesome\min
  */
- NpmAllMinCssAsset, NpmBrandMinCssAsset, NpmRegularMinCssAsset, NpmSolidMinCssAsset

/** 
  * PRODUCTION JS
  * NAMESPACE: terabytesoft\assets\fontawesome\min
  */
- NpmAllMinJsAsset, NpmBrandMinJsAsset, NpmRegularMinJsAsset, NpmSolidMinJsAsset
~~~

### **USAGE:**

~~~
<?php

// content delivery network
use terabytesoft\assets\fontawesome\cdn\CdnAllCssAsset;

CdnAllCssAsset::register($this);

echo \yii\helpers\Html::tag('i', '', ['class' => 'fas fa-user-alt fa-2x']);
~~~

~~~
<?php

// developer version
use terabytesoft\assets\fontawesome\dev\NpmAllJsAsset;

NpmAllJsAsset::register($this);

echo \yii\helpers\Html::tag('i', '', ['class' => 'fas fa-user-alt fa-2x']);
~~~

~~~
<?php

// minified version
use terabytesoft\assets\fontawesome\min\NpmAllMinCssAsset;

NpmAllMinCssAsset::register($this);

echo \yii\helpers\Html::tag('i', '', ['class' => 'fas fa-user-alt fa-2x']);
~~~

### **CHANGE VERSION CDN FONTAWESOME:**

<p align="justify">
This extension uses <a href="https://github.com/hiqdev/composer-config-plugin" title="composer-config-plugin" target="_blank">composer-config-plugin</a>, with which you can overwrite the original configuration of cdn asset fontawesome, and place your version of preference, for the changes to take effect remember to run composer du.
</p>

~~~
params.php

return [
    // cdn css urls
    'asset.fontawesome.cdn.css.all' => 'https://use.fontawesome.com/releases/v5.10.0-11/css/all.css',
    'asset.fontawesome.cdn.css.brand' => 'https://use.fontawesome.com/releases/v5.10.0-11/css/brands.css',
    'asset.fontawesome.cdn.css.fontawesome' => 'https://use.fontawesome.com/releases/v5.10.0-11/css/fontawesome.css',
    'asset.fontawesome.cdn.css.regular' => 'https://use.fontawesome.com/releases/v5.10.0-11/css/regular.css',
    'asset.fontawesome.cdn.css.solid' => 'https://use.fontawesome.com/releases/v5.10.0-11/css/solid.css',

    // cdn js urls
    'asset.fontawesome.cdn.js.all' => 'https://use.fontawesome.com/releases/v5.10.0-11/js/all.js',
    'asset.fontawesome.cdn.js.brand' => 'https://use.fontawesome.com/releases/v5.10.0-11/js/brands.js',
    'asset.fontawesome.cdn.js.fontawesome' => 'https://use.fontawesome.com/releases/v5.10.0-11/js/fontawesome.js',
    'asset.fontawesome.cdn.js.regular' => 'https://use.fontawesome.com/releases/v5.10.0-11/js/regular.js',
    'asset.fontawesome.cdn.js.solid' => 'https://use.fontawesome.com/releases/v5.10.0-11/js/solid.js',

    // cdn css utilities
    'asset.fontawesome.cdn.css.svg-with-js' => 'https://use.fontawesome.com/releases/v5.10.0-11/css/svg-with-js.css',
    'asset.fontawesome.cdn.css.v4-shims' => 'https://use.fontawesome.com/releases/v5.10.0-11/css/v4-shims.css',

    // cdn js utilities
    'asset.fontawesome.cdn.js.v4-shims' => 'https://use.fontawesome.com/releases/v5.10.0-11/js/v4-shims.js',
];
~~~

### **RUN TESTS CODECEPTION:**

~~~
// download all composer dependencies root project
$ composer update --prefer-dist -vvv

// run all tests with code coverage
$ vendor/bin/codecept run unit --coverage-xml
~~~

### **WEB SERVER SUPPORT:**

- Apache.
- Nginx.
- OpenLiteSpeed.

### **DOCUMENTATION STYLE GUIDE:**

[Style CI Documentation PSR2.](https://docs.styleci.io/presets#psr2)

### **LICENCE:**

[![License](https://img.shields.io/packagist/l/terabytesoftw/asset-fontawesome.svg?color=129BB3)](LICENSE.md)
[![YiiFramework](https://img.shields.io/badge/Powered_by-Yii_Framework-green.svg?style=flat)](https://www.yiiframework.com/)
[![Styleci](https://github.styleci.io/repos/194880330/shield?branch=master)](https://github.styleci.io/repos/194880330)
[![Total Downloads](https://img.shields.io/packagist/dt/terabytesoftw/asset-fontawesome.svg?color=blue)](https://packagist.org/packages/terabytesoftw/asset-fontawesome)
