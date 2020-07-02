<?php

return [
    # define additional groups
    'groups' => [
        'cartorioSaude' => [
            '$admin' => false,
            '$vars' => [
                'finder.path' => '/storage/uploads'
            ],
            'cockpit' => [
                'backend' => true,
                'finder' => true
            ],
            'collections' => [
                'manage' => true
            ],
            'forms' => [
                'manage' => true
            ],
            'singletons' => [
                'manage' => true
            ],
        ]
    ],

    # Those are the default values. You don't need to duplicate them all.
    'cors' => [
        'allowedHeaders' => 'X-Requested-With, Content-Type, Origin, Cache-Control, Pragma, Authorization, Accept, Accept-Encoding, Cockpit-Token',
        'allowedMethods' => 'PUT, POST, GET, OPTIONS, DELETE',
        'allowedOrigins' => '*',
        'maxAge' => '1000',
        'allowCredentials' => 'true',
        'exposedHeaders' => 'true',
    ],
];