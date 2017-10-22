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

    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);

        /*$permissions = Permission::with('roles')->get();

        foreach($permissions as $permission)
        {
            $gate->define($permission->name, function(Admin $user) use ($permission) {
                return $user->hasPermission($permission);
            });
        }

        $gate->before(function(Admin $user) {
            if($user->isSuperAdmin()) true;
        }); */
    }
}
