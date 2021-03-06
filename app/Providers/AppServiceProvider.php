<?php

namespace App\Providers;

use App\Models\Menu;
use App\Models\Order;
use Illuminate\Support\Facades\Schema;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('backend.*', function ($view) {
            if (Schema::hasTable('orders')) {
                $orders = Order::where('status', 'pending')->get();
                $view->with('ordercount', count($orders));
            }
        });

        Menu::deleting(function ($menu) {
            $menu->items()->delete();
        });
    }
}
