<?php

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        factory(Product::class)->create([
            'type' => Product::TYPE_VIDEOS,
            'name' => 'Laravel Package Training Video Course',
            'paddle_product_id' => '593300',
            'price' => 79,
        ]);
    }
}
