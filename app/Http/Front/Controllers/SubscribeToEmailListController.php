<?php

namespace App\Http\Front\Controllers;

use App\Http\Front\Requests\SubscribeToEmailListRequest;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Http;

class SubscribeToEmailListController
{
    public function __invoke(SubscribeToEmailListRequest $request): RedirectResponse
    {
        $subscriptionUuid = config('services.mailcoach.subscription_uuid');

        if (! app()->environment('production') || ! $subscriptionUuid) {
            return redirect()->action(HomeController::class, ['subscription-failed' => 1]);
        }

        $response = Http::post("https://spatie.be/mailcoach/subscribe/{$subscriptionUuid}", [
            'email' => $request->email,
            'tags' => 'laravel-beyond-crud-waiting-list',
        ]);

        if (! $response->successful()) {
            throw new Exception('Could not subscribe');
        }

        return redirect()->action(HomeController::class, ['subscribed' => 1]);
    }
}
