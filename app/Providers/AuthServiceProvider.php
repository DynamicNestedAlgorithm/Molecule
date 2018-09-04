<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);

        $gate->define( 'isBusiness',function($user){
            return $user->user_type == 'business';
        });

        $gate->define( 'isDeveloper',function($user){
            return $user->user_type == 'developer';
        });

        $gate->define( 'isLabCoder',function($user){
            return $user->user_type == 'labcoder';
        });

        $gate->define( 'isMentee',function($user){
            return $user->user_type == 'mentee';
        });
        //
    }
}
