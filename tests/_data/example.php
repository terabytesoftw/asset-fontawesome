<?php

/* @var $this \yii\web\View */

use terabytesoft\assets\fontawesome\cdn\css\CdnAllAsset;
use yii\helpers\html;

CdnAllAsset::register($this);

Html::tag(
    'span',
    Html::tag('i', '', [
        'class' => 'fas fa-user-check fa-2x'
    ]),
    [
        'class' => 'text-success',
        'title' => 'Confirmed'
    ]
);
