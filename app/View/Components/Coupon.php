<?php

namespace App\View\Components;

use Carbon\Carbon;
use Illuminate\View\Component;

class Coupon extends Component
{
    protected array $couponConfig;

    public function __construct(array $config)
    {
        $this->couponConfig = $config;
    }


    public function couponActive(): bool
    {
        if (empty($this->couponConfig['code'])) {
            return false;
        }

        if (empty($this->couponConfig['percentage'])) {
            return false;
        }

        return now()->isBetween($this->couponValidFrom(), $this->couponExpiresAt());
    }

    public function couponCode(): string
    {
        return $this->couponConfig['code'] ?? '';
    }

    public function couponPercentage(): int
    {
        return $this->couponConfig['percentage'] ?? 0;
    }

    public function couponValidFrom(): Carbon
    {
        if (empty($this->couponConfig['valid_from'])) {
            return now()->subDay();
        }

        return Carbon::createFromFormat('Y-m-d H:i', $this->couponConfig['valid_from']);
    }

    public function couponExpiresAt(): Carbon
    {
        if (empty($this->couponConfig['expires_at'])) {
            return now()->subDay();
        }

        return Carbon::createFromFormat('Y-m-d H:i', $this->couponConfig['expires_at']);
    }

    public function render()
    {
        return view('components.coupon');
    }
}
