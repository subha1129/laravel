<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//use Illuminate\Validation\Validator;    
use Validator;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     
      public function rules()
     * {
     *   return [
     *    ...
     *    "alert_email"   => 'email_array',
     *    ...
     *    ];
     * }
     */
    
    public function boot()

        
    {
     Validator::extend("email", function($attribute, $value, $parameters) {
        $rules = [
            'email' => 'required|email|unique:crs_admin_user,email',
        ];
        foreach ($value as $email) {
            $data = [
                'email' => $email
            ];
            $validator = Validator::make($data, $rules);
            if ($validator->fails()) {
                return false;
            }
        }
        return true;
    }); 
    }

    /** 
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
