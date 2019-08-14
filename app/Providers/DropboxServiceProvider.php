<?php

namespace App\Providers;

use Storage;
use League\Flysystem\Filesystem;
use Illuminate\Support\ServiceProvider;
use Spatie\Dropbox\Client as DropboxClient;
use Spatie\FlysystemDropbox\DropboxAdapter;


class DropboxServiceProvider extends ServiceProvider
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
        

        Storage::extend('dropbox', function ($app, $config) {
            $client = new DropboxClient(
                 $config['wZIjTJnVzdAAAAAAAAAAV6dEp0rAWt9iRhdKifj_C1uU5y9eJd3z6X-fY3y5LcPM']
                
            );

            return new Filesystem(new DropboxAdapter($client));
        });


        //
    }
}
