<?php

return [
    'id' => 'adcombo',
    'basePath' => realpath(__DIR__ . '/../'),
    'components' => [
        'db' => require(__DIR__ . '/db.php'),
        'request' => [
            'cookieValidationKey' => 'jfhdyh7346rghstgr576490gf',
        ],
        'urlManager' => [
            'enablePrettyUrl' =>true,
            'showScriptName' => false,
        ],
    ],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
    ]
];