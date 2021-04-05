<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

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

        // VerifyEmail::toMailUsing(function ($notifiable, $url) {
        //     return (new MailMessage)
        //         ->from('info@petrograteinvest.com', 'Petrograte Invest')
        //         ->greeting('Salut')
        //         ->subject('Vérifier l\'adresse e-mail')
        //         ->line('Cliquez sur le bouton ci-dessous pour vérifier votre adresse e-mail.')
        //         ->action("Vérifier l'adresse e-mail", $url)
        //         ->line('Merci d\'utiliser notre application!');
        // });
    }
}
