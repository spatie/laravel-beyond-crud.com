<?php

namespace App\Support;

use Carbon\Carbon;

class Coupon
{
    private array $couponConfig;

    public static function forCouponName(string $name): self
    {
        $couponConfig = config("services.paddle.coupon.{$name}");

        return new static($couponConfig);
    }

    protected function __construct(array $couponConfig)
    {
        $this->couponConfig = $couponConfig;
    }

    public function active(): bool
    {
        if (empty($this->couponConfig['code'])) {
            return false;
        }

        if (empty($this->couponConfig['percentage'])) {
            return false;
        }

        return now()->isBetween($this->validFrom(), $this->expiresAt());
    }

    public function code(): string
    {
        return $this->couponConfig['code'] ?? '';
    }

    public function label(): string
    {
        return $this->couponConfig['label'] ?? '';
    }

    public function percentage(): int
    {
        return $this->couponConfig['percentage'] ?? 0;
    }

    public function validFrom(): Carbon
    {
        if (empty($this->couponConfig['valid_from'])) {
            return now()->subDay();
        }

        return Carbon::createFromFormat('Y-m-d H:i', $this->couponConfig['valid_from'])->startOfMinute();
    }

    public function expiresAt(): Carbon
    {
        if (empty($this->couponConfig['expires_at'])) {
            return now()->subDay();
        }

        return Carbon::createFromFormat('Y-m-d H:i', $this->couponConfig['expires_at'])->startOfMinute();
    }
}
