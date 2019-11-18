<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('admin',function($users){
            return $users->level==='Quản trị viên';
        });
        Gate::define('editor',function($admins){
            return $users->level==='Biên tập viên';
        });
        Gate::define('user',function($admins){
            return $users->level==='Cộng tác viên';
        });
    }
}
