<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this
            ->call(UserSeeder::class)
            ->call(ProductSeeder::class)
            ->call(EmailListSeeder::class)
            ->call(VideoSeeder::class);
    }
}
