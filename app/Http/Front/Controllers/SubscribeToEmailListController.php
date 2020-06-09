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

        $response = Http::post('https://spatie.be/mailcoach/subscribe/4af46b59-3784-41a5-9272-6da31afa3a02', [
            'email' => $request->email,
            'tags' => 'laravel-beyond-crud-waiting-list',
        ]);

        if (! $response->successful()) {
            ld()->error('Something went wrong', $response, $response);

            throw new Exception('Could not subscribe');
        }

        flash()->success('Thank you for subscribing');

        return back();
    }
}
