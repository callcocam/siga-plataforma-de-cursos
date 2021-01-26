<?php

namespace Database\Factories;

use App\Models\Notification;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class NotificationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Notification::class;

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
            'created_at'=>today()->format('Y-m-d H:i:s'),
            'updated_at'=>today()->format('Y-m-d H:i:s'),
        ];
    }
}
