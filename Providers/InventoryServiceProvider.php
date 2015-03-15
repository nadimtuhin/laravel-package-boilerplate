<?php namespace NT\Inventory\Providers;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;

class InventoryServiceProvider extends ServiceProvider {
    
    protected $namespace = 'NT\Inventory\Http\Controllers';

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Router $router)
    {
        $this->loadViewsFrom(dirname(__DIR__)."/resources/views", 'inventory');
        
        //todo: understand route cache
        $router->group(['namespace' => $this->namespace], function($router)
        {
            require dirname(__DIR__) .'/Http/routes.php';
        });
    }

    public function register() {}
}