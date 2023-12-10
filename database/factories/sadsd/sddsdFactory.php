<?php

namespace Database\Factories\sadsd;

use App\Models\sadsd\sddsd;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class sddsdFactory extends Factory
{
    protected $model = sddsd::class;

    public function definition(): array
    {
        return [
            'asda' => $this->faker->word(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
