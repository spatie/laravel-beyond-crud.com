<?php

namespace Tests\Factories;

use App\Models\Product;
use App\Models\Purchase;
use App\Models\User;

class UserFactory
{
    private ?string $productType = null;

    public function withPurchase(string $productType): self
    {
        $this->productType = $productType;

        return $this;
    }


    public function create(): User
    {
        $user = User::factory()->create();

        $purchase = Purchase::factory()
            ->make(['product_id' =>
                Product::factory()->create(['type' => $this->productType])
            ]);

        $user->purchases()->save($purchase);

        return $user;
    }
}
