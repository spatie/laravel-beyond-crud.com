<?php

namespace App\Providers;

use App\Models\License;
use App\Policies\LicensePolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        License::class => LicensePolicy::class,
    ];

    public function boot()
    {
        $this->registerPolicies();

        Auth::viaRequest('license-api-key', function ($request) {
            $license = License::where('key', $request->getPassword())->first();

            if (! $license) {
                info('Request with invalid license');
                abort(401, 'License key invalid');
            }

            if ($license->isExpired()) {
                info('Request with expired license');
                abort(401, 'This license is expired');
            }

            $license->increment('composer_auth_count');

            return $license;
        });
    }
}
