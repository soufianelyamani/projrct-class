<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        'App\Models\Client' => 'App\Policies\ClientPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();


        // Gate::resource("client", "App\Policies\ClientPolicy");
        // Gate::define("client.update", function($user, $client) {

            //     return $user->id === $client->user_id;
            // });

        // Gate::define("client.delete", function($user, $client) {

        //     return $user->id === $client->user_id;

        // });

        //Pour l'adiminstration
        // Gate::before(function($user, $ability) {
        //     if ($user->is_admin && in_array($ability, ["client.update"])) {
        //         return true;
        //     }
        // });
        //
    }
}
