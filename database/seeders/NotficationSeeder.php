<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use App\Models\Notification;

class NotficationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Notification::query()->delete();

         Notification::factory(20)->create()->each(function (Notification $notification){
             $notification->users()->attach(User::all()->random()->take(rand(5,15))->pluck('id')->toArray());
         });

    }
}
