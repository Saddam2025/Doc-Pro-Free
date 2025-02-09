<?php

namespace App\Providers;

use Laravel\Fortify\Fortify;
use Illuminate\Support\ServiceProvider;
use App\Models\User;

class FortifyServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        // Define login view
        Fortify::loginView(function () {
            return view('auth.login');
        });

        // Define register view
        Fortify::registerView(function () {
            return view('auth.register');
        });

        // Define password reset request view
        Fortify::requestPasswordResetLinkView(function () {
            return view('auth.forgot-password');
        });

        // Define password reset view
        Fortify::resetPasswordView(function ($request) {
            return view('auth.reset-password', ['request' => $request]);
        });

        // Define email verification view
        Fortify::verifyEmailView(function () {
            return view('auth.verify-email');
        });

        // Define user authentication logic
        Fortify::authenticateUsing(function ($request) {
            $user = User::where('email', $request->email)->first();

            if ($user && \Hash::check($request->password, $user->password)) {
                return $user;
            }
        });
    }
}
