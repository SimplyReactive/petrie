<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the connections below you wish to use as
    | your default connection for all work. Of course, you may use many
    | connections at once using the manager class.
    |
    */

    'default' => 'petrie',

    /*
    |--------------------------------------------------------------------------
    | Hashids Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the connections setup for your application. Example
    | configuration has been included, but you may add as many connections as
    | you would like.
    |
    */

    'connections' => [

        'petrie' => [
            'salt' => 'F28F86043514AEB269SF3SE45OLI2H2SFE5HI23R94251201F322199855F1DF1B982E3CF7C92',
            'length' => 6,
            'alphabet' => 'abcdefghijklmnopqrstuvwxyz1234567890'
        ],
    ]

];
