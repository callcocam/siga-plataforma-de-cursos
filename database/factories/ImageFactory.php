<?php

namespace Database\Factories;

use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ImageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Image::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //$filePath = storage_path('app/public/users');
        //$url = sprintf("users/%s", $this->faker->image($filePath, 640, 400, null, false));

        $filePath = 'defaults/no_image.png';
        return [
            'file'=> $filePath,
            'slug'=> Str::slug($filePath.rand()),
            'imageable_id'=>null,
            'imageable_type'=>null
        ];
    }
}
