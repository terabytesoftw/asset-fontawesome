<?php

/**
 * Web application configuration shared by all test types
 */

$assetfontawesome = require __DIR__ . '/assetfontawesome.php';

$params = array_merge($assetfontawesome, $params ?? []);

$config = [
    'id' => 'asset-fontawesome',
    'aliases' => [
        '@npm'   => '@root/node_modules',
        '@public' => '@root/tests/public',
        '@runtime' => '@root/tests/public/@runtime',
    ],
    'basePath' => '@root/src',
    'bootstrap' => ['log'],
    'components' => [
        'assetManager' => [
            'appendTimestamp' => true,
            'basePath' => '@public/assets',
            'forceCopy' => true,
        ],
        'log' => [
            'traceLevel' => 'YII_DEBUG' ? 3 : 0,
            'targets' => [
                [
                    'class' => \yii\log\FileTarget::class,
                    'levels' => ['error', 'warning', 'info'],
                    'logFile' => '@runtime/logs/app.log',
                ],
            ],
        ],
        'request' => [
            'cookieValidationKey' => 'testme-codeception',
            'enableCsrfValidation' => true,
        ],
    ],
    'params' => $params,
];

return $config;
