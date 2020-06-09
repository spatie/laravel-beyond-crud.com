<?php

use App\Console\UpdateVideosCommand;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class VideoSeeder extends Seeder
{
    public function run()
    {
        Artisan::call(UpdateVideosCommand::class);
    }
}
