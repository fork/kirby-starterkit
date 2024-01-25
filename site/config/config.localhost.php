<?php

return [
    'debug' => true,
    'cache' => [
        'pages' => [
            'active' => false,
            'type'   => 'static',
        ],
    ],
    'email' => [
        'transport' => [
            'type' => 'smtp',
            'host' => 'mailpit',
            'port' => 1025,
            'security' => false,
        ],
    ],
];
