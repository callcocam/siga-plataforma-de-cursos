<?php

namespace Database\Factories;

use App\Models\Notfication;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;

class NotficationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Notfication::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence();

        return [
            'name'=>$title,
            'slug'=>Str::slug($title),
            'user_id'=>User::all()->random()->id,
            'created_at'=>today()->format('Y-m-d H:i:s'),
            'updated_at'=>today()->format('Y-m-d H:i:s'),
        ];
    }
}
