<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use App\Models\Role;
use Illuminate\Auth\Access\Response;

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

        Gate::define('get-things', function (?User $user) {
            $role = Role::where('name', 'administator')->value('id');
            if ($user->role_id == $role) {
                return Response::allow();
            }
            return Response::deny('Access denied');
        });

        Gate::define('other-crud-things', function (?User $user) {
            $role_admin = Role::where('name', 'user')->value('id');
            $role_user = Role::where('name', 'administator')->value('id');
            if ($user->role_id == $role_admin || $user->role_id == $role_user) {
                return Response::deny('Access denied');
            }
            return Response::allow();
        });

        Gate::define('crud-places', function (?User $user) {
            $role = Role::where('name', 'administator')->value('id');
            if ($user->role_id == $role) {
                return Response::allow();
            }
            return Response::deny('Access denied');
        });
    }
}
