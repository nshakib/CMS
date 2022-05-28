<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('manage_posts',function($user){
            return $user->hasAnyPermission([
                'post_show',
                'post_create',
                'post_update',
                'post_detail',
                'post_delete',
            ]);
        });

        Gate::define('manage_categories',function($user){
            return $user->hasAnyPermission([
                'category_show',
                'category_create',
                'category_update',
                'category_detail',
                'category_delete',
            ]);
        });

        // Gate::define('manage_categories',function($user){
        //     return $user->hasAnyPermission([
        //         'category_show',
        //         'category_create',
        //         'category_update',
        //         'category_detail',
        //         'category_delete',
        //     ]);
        // });
    }
}
