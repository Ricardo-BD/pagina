<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default filesystem disk that should be used
    | by the framework. The "local" disk, as well as a variety of cloud
    | based disks are available to your application. Just store away!
    |
    */

    'default' => env('FILESYSTEM_DRIVER', 'local'),

    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    | Here you may configure as many filesystem "disks" as you wish, and you
    | may even configure multiple disks of the same driver. Defaults have
    | been setup for each driver as an example of the required options.
    |
    | Supported Drivers: "local", "ftp", "sftp", "s3"
    |
    */

    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
        ],

        'public' => [
            'driver' => 'local',
            'root' => storage_path('/'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
        ],

        's3' => [
            'driver' => 's3',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET'),
            'url' => env('AWS_URL'),
            'endpoint' => env('AWS_ENDPOINT'),
        ],
        
        'sftp' => [
            'driver' => 'sftp',
            'host' => 'pagina@178.62.93.197',
            'username' => 'pagina',
            'password' => 'Rb26570887',
            // Settings for SSH key based authentication...
            'privateKey' => 'ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAABAQDRuGuez9cnv17dE9vZCwh178oU2XMoalfEtFF+goy0CQ8Uq+JJy1NElNl/SEloJwDAG6smhER7WSBOWrLn2bqvpQLPhEZ/SH9hcOHbXgBxkj8BmXMLFH8H16KSB6wsLXF8zx2dntIVei2zvT8iYf8eB99ugpbFdNI8xZgxoLFuI1v2mcG97SJfaNmi+CoY+D0NO3135o9259SPnQI7f9BjueF2zbL9lf3MRV+VLBtfZSUXQ9esEXVFPNt/IybxILqUKD6CQAHVk49jB6yWVG1LzACq3jmXndClbRNOshUVdFQzYLcTREys1oUOEoeApnS+zCpqcq3ll8NlTpIh8Ltb ricardovirtual2425@gmail.com
',
            'password' => 'Rb26570887',

            // Optional SFTP Settings...
             'port' => 22,
             'root' => storage_path('/'),
            // 'timeout' => 30,
           ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Symbolic Links
    |--------------------------------------------------------------------------
    |
    | Here you may configure the symbolic links that will be created when the
    | `storage:link` Artisan command is executed. The array keys should be
    | the locations of the links and the values should be their targets.
    |
    */

    'links' => [
        public_path('storage') => storage_path('app/public'),
    ],

];
