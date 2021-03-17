<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Link;

class Links extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Link::factory()
             ->count(5)
             ->create();   
    }
}
