<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
    'modules' => [
          'redactor' => 'yii\redactor\RedactorModule',
          'class' => 'yii\redactor\RedactorModule',
          'uploadDir' => '@webroot/uploads',
          'uploadUrl' => '@web/uploads',
          'imageAllowExtensions'=>['jpg','png','gif']
    ],
];
