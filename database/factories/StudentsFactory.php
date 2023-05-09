<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Students;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Students>
 */
class StudentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'idstudents' => rand(1,999999),
            'fullname'=>fake()->name(),
            'emailaddress'=>fake()->unique()->safeEmail(),
            'address'=>'',
            'phone'=>rand(1,99999999),
            'gender'=>'M',
        ];
    }
}
