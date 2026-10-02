<?php

namespace App\View\Components;

use DateInterval;
use DateTimeInterface;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Countdown extends Component
{
    public function __construct(public DateTimeInterface $expires)
    {
    }

    public function render(): View
    {
        return view('components.countdown');
    }

    public function days(): string
    {
        return sprintf('%02d', $this->difference()->d);
    }

    public function hours(): string
    {
        return sprintf('%02d', $this->difference()->h);
    }

    public function minutes(): string
    {
        return sprintf('%02d', $this->difference()->i);
    }

    public function seconds(): string
    {
        return sprintf('%02d', $this->difference()->s);
    }

    protected function difference(): DateInterval
    {
        return $this->expires->diff(now($this->expires->getTimezone()));
    }
}
