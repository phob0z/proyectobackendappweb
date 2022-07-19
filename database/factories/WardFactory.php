<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Ward;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ward>
 */
class WardFactory extends Factory
{
    protected $model = Ward::class;

    public function definition()
    {
        return [

            'name' => $this->faker->streetName,

            'location' => $this->faker->streetName,

            'description' => $this->faker->text($maxNbChars = 45),
        ];
    }


}
