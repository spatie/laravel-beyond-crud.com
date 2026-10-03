<?php

namespace App\Http\Front\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController
{
    public function __invoke(Request $request): View
    {
        return view('front.home.index', [
            'subscribed' => $request->has('subscribed'),
            'subscriptionFailed' => $request->has('subscription-failed'),
        ]);
    }
}
