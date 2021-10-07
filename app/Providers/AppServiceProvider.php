<?php

namespace App\Providers;

use App\Models\Catalog;
use App\Models\Link;
use App\Models\Page;
use App\Models\Product;
use App\Models\Setting;
use App\Models\User;
use App\Services\ImageManager\ImageManager;
use App\Services\ImageManager\ImageResizeConfig;
use App\Services\ImageManager\ResizeConfigs;
use App\UseCases\BannerService;
use App\UseCases\ProductService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->isLocal()) {
            $this->app->register(\Laravel\Telescope\TelescopeServiceProvider::class);
            $this->app->register(TelescopeServiceProvider::class);
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();

        Model::preventLazyLoading(!app()->isProduction());
    }
}
