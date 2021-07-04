<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class ContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $gender = $this->faker->randomElements(['male', 'female'])[0];

        return [
            'firstname' => $this->faker->firstname($gender),
            'lastname' => $this->faker->lastname(),
            'gender' => $gender,
            'age' => rand(18, 88)
        ];
    }
}
