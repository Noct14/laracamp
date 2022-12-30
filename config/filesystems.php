<?php

return [
<<<<<<< HEAD

=======
    
>>>>>>> 9782f5b35f6fd799d5a31674d9bba28fe7a6238b
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
<<<<<<< HEAD

    'default' => env('FILESYSTEM_DRIVER', 'local'),

=======
    
    'default' => env('FILESYSTEM_DISK', 'local'),
    
>>>>>>> 9782f5b35f6fd799d5a31674d9bba28fe7a6238b
    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    | Here you may configure as many filesystem "disks" as you wish, and you
    | may even configure multiple disks of the same driver. Defaults have
<<<<<<< HEAD
    | been setup for each driver as an example of the required options.
=======
    | been set up for each driver as an example of the required values.
>>>>>>> 9782f5b35f6fd799d5a31674d9bba28fe7a6238b
    |
    | Supported Drivers: "local", "ftp", "sftp", "s3"
    |
    */
<<<<<<< HEAD

    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
        ],

=======
    
    'disks' => [
        
        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
            'throw' => false,
        ],
        
>>>>>>> 9782f5b35f6fd799d5a31674d9bba28fe7a6238b
        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
<<<<<<< HEAD
        ],

=======
            'throw' => false,
        ],
        
>>>>>>> 9782f5b35f6fd799d5a31674d9bba28fe7a6238b
        's3' => [
            'driver' => 's3',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET'),
            'url' => env('AWS_URL'),
            'endpoint' => env('AWS_ENDPOINT'),
            'use_path_style_endpoint' => env('AWS_USE_PATH_STYLE_ENDPOINT', false),
<<<<<<< HEAD
        ],

=======
            'throw' => false,
        ],
        
>>>>>>> 9782f5b35f6fd799d5a31674d9bba28fe7a6238b
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
<<<<<<< HEAD

=======
>>>>>>> 9782f5b35f6fd799d5a31674d9bba28fe7a6238b
];
