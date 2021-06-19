<?php

namespace Database\Seeders;

use App\Models\contact;
use Illuminate\Database\Seeder;

class contactseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        contact::factory()->count(10)->create();
    }
}
