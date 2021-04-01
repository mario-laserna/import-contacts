<?php

namespace Database\Factories\contact;

use App\Models\contact\Contact;
use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

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
        return [
            'user_id' => 1,
            'name' => $this->faker->name,
            'birthdate' => $this->faker->date(),
            'phone_number' => $this->faker->phoneNumber,
            'address' => $this->faker->address,
            'credit_card' => $this->faker->sha1,
            'credit_card_last' => 5555,
            'franchise' => $this->faker->text(50),
            'email' => $this->faker->safeEmail,

        ];
    }
}
