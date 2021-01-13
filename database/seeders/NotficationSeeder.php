<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Notfication;

class NotficationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Notfication::factory(50)->create();
    }
}
