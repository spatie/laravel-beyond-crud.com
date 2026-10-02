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

        if (! $subscriptionUuid) {
            flash()->error('Subscribing is not possible in this environment.');

            return back();
        }

        $response = Http::post("https://spatie.be/mailcoach/subscribe/{$subscriptionUuid}", [
            'email' => $request->email,
            'tags' => 'laravel-beyond-crud-waiting-list',
        ]);

        if (! $response->successful()) {
            throw new Exception('Could not subscribe');
        }

        flash()->success('Thanks for your interest! We will keep you posted with updates on the course.');

        return back();
    }
}
