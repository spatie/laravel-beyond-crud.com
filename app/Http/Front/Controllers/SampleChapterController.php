<?php

namespace App\Http\Front\Controllers;

use Illuminate\Contracts\View\View;

class SampleChapterController
{
    public function __invoke(): View
    {
        return view('front.home.sample-chapter');
    }
}
