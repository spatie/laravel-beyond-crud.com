<?php

namespace App\Http\Front\Controllers;

use App\Http\Front\Requests\SubscribeToEmailListRequest;
use Exception;
use Illuminate\Support\Facades\Http;

class SubscribeToEmailListController
{
    public function __invoke(SubscribeToEmailListRequest $request)
    {
        if (! app()->environment('production')) {
            flash()->error('Subscribing is only possible in production');
        }

        $response = Http::post("https://spatie.be/mailcoach/subscribe/" .config('services.mailcoach.subscription_uuid'), [
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
