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
        $user = factory(User::class)->create();

        $purchase = factory(Purchase::class)
            ->make(['product_id' =>
                factory(Product::class)->create(['type' => $this->productType])
            ]);

        $user->purchases()->save($purchase);

        return $user;
    }
}
