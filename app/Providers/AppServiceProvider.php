<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (app()->environment('production')) {
            $tmpPath = '/tmp/storage';

            // Rediriger les chemins de cache vers /tmp
            Config::set('view.compiled', $tmpPath . '/framework/views');
            Config::set('cache.stores.file.path', $tmpPath . '/framework/cache/data');
            Config::set('session.files', $tmpPath . '/framework/sessions');
            Config::set('logging.channels.single.path', $tmpPath . '/logs/laravel.log');

            // Créer les dossiers si besoin
            File::makeDirectory($tmpPath . '/framework/views', 0755, true, true);
            File::makeDirectory($tmpPath . '/framework/cache/data', 0755, true, true);
            File::makeDirectory($tmpPath . '/framework/sessions', 0755, true, true);
            File::makeDirectory($tmpPath . '/logs', 0755, true, true);
        }
    }
}
