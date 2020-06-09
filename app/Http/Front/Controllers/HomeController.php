<?php

namespace App\Http\Front\Controllers;

class HomeController
{
    public function __invoke()
    {
        return view('front.home.index');
    }
}
