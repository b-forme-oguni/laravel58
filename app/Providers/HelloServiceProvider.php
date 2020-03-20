<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Validator;
use App\Http\Validators\HelloValidator;

class HelloServiceProvider extends ServiceProvider
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
        // $validator  = $this->app['validator'];
        // $validator->resolver(function ($translator, $data, $rules, $messages) {
        //     return new HelloValidator($translator, $data, $rules, $messages);
        // });

        View::composer(
            'hello.index' ,'App\Http\Composers\HelloComposer'
        );


        Validator::extend('hello', function ($attribute, $value, $parameters, $validator) {
            if (is_numeric($value)) {
                return $value % 2 == 0;
            }
        });
    }
}
