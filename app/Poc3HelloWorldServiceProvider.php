<?php

namespace Fuseday\Poc3HelloWorld;

use Illuminate\Support\ServiceProvider;

class Poc3HelloWorldServiceProvider extends ServiceProvider
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
        rescue(fn() => $this->app
            ->make('torque')
            ->registerComponent('fuseday.poc3-hello-world', [
                '<script src="/_torque/lego/fuseday/poc3-hello-world/my-lib.umd.js"></script>',
            ])
        );
    }
}
