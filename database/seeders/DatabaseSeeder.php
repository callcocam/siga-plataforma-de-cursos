<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Storage::deleteDirectory('users');
        Storage::makeDirectory('users');

        $user = \App\Models\User::factory()->create([
             'name'=>'SIGA SMART',
             'slug'=>'siga-smart',
             'email'=>'contato@sigasmart.com.br',
         ]);

        Image::factory(1)->create([
            'imageable_id'=>$user->id,
            'imageable_type'=>User::class
        ]);

         $users = \App\Models\User::factory(40)->create();

         foreach ($users as $user){
             Image::factory(1)->create([
                 'imageable_id'=>$user->id,
                 'imageable_type'=>User::class
             ]);
         }

         $this->call(NotficationSeeder::class);
    }
}
