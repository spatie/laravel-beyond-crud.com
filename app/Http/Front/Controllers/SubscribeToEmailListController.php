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

        ld("subscribing {$request->email}");

        $response = Http::post('https://spatie.be/mailcoach/subscribe/4af46b59-3784-41a5-9272-6da31afa3a02', [
            'email' => $request->email,
            'tags' => 'laravel-beyond-crud-waiting-list',
        ]);

        if (! $response->successful()) {
            ld()->error('Something went wrong', $response, $response);

            throw new Exception('Could not subscribe');
        }

        flash()->success('You are now subscribed. We will notify you as soon as the full course is available.');

        return back();
    }
}
