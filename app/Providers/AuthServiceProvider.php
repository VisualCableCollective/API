<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Laravel\Passport\Passport;
use App\Models\Passport\Client;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
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

        Passport::hashClientSecrets();
        Passport::tokensCan([
            'get-vcc-id' => 'Get your VCC account ID and username',
        ]);
        Passport::setDefaultScope([
            'get-vcc-id',
        ]);
        Passport::useClientModel(Client::class);
    }
}
