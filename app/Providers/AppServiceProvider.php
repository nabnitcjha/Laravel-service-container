<?php

namespace App\Providers;

use App\Billing\BankPaymentGateway;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(BankPaymentGateway::class, function ($currency) {
            return new BankPaymentGateway($currency='INR');
        });

        // $this->app->bind(PaymentGateway::class, function ($currency) {
        //     return new PaymentGateway($currency='INR');
        // });

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
