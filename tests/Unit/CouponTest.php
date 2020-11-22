<?php

namespace Tests\Unit;

use App\Support\Coupon;
use PHPUnit\Util\Test;
use Spatie\TestTime\TestTime;
use Tests\TestCase;

class CouponTest extends TestCase
{
    /** @test */
    public function it_can_handle_a_coupon()
    {
        TestTime::freeze('Y-m-d H:i:s', '2019-12-31 23:59:59');

        config()->set('services.paddle.coupon.testCoupon', [
            'code' => 'testCode',
            'percentage' => 20,
            'valid_from' => '2020-01-01 00:00',
            'expires_at' => '2020-01-31 17:00'
        ]);

        $coupon = Coupon::forCouponName('testCoupon');

        $this->assertEquals('testCode', $coupon->code());
        $this->assertEquals(20, $coupon->percentage());

        $this->assertFalse($coupon->active());

        TestTime::addSecond();
        $this->assertTrue($coupon->active());

        TestTime::freeze('Y-m-d H:i:s', '2020-01-31 17:00:00');
        $this->assertTrue($coupon->active());

        TestTime::addSecond();
        $this->assertFalse($coupon->active());
    }
}
