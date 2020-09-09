<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Purchase;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PurchaseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Purchase::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'product_id' => Product::factory(),
        'user_id' => User::factory(),
        'receipt_url' => $this->faker->url,
        'paddle_order_id' => $this->faker->word,
        'paddle_product_id' => $this->faker->word,
        'paddle_checkout_id' => $this->faker->word,
        'paddle_response' => '{}',
        'total' => 0,
    ];
    }
}
