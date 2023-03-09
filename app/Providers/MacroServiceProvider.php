<?php

namespace App\Providers;

use Aws\S3\S3Client;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\File;
use League\Flysystem\AwsS3V3\AwsS3V3Adapter;
use League\Flysystem\Filesystem;

class MacroServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        File::macro('streamUpload', function($path, $fileName, $file) {

            // Set up S3 connection.
            $resource = fopen($file->getRealPath(), 'r+');
            $config = Config::get('filesystems.disks.s3');
            $client = new S3Client([
                'credentials' => [
                    'key'    => $config['key'],
                    'secret' => $config['secret'],
                ],
                'endpoint' => $config['url'],
                'region' => $config['region'],
                'version' => 'latest',
            ]);

            $adapter = new AwsS3V3Adapter($client, $config['bucket'], $path);
            $filesystem = new Filesystem($adapter);
            $filesystem->writeStream($fileName, $resource);
            return $adapter;
        });

    }
}
