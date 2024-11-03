<?php

namespace App\Providers;

use App\Repositories\Contracts\ERPCustomerInterface;
use App\Repositories\Yell\YellCustomerRepository;
use App\Entities\Yell\YellCustomerEntity;
use App\Entities\Contracts\CustomerEntityInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(ERPCustomerInterface::class, YellCustomerRepository::class);
        $this->app->bind(CustomerEntityInterface::class, YellCustomerEntity::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
