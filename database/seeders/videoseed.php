<?php

namespace Database\Seeders;

use App\Models\video;
use Illuminate\Database\Seeder;

class videoseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        video::factory()->count(10)->create();
    }
}
