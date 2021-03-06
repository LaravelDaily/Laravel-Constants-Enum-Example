<?php

namespace Database\Factories;

use App\Helpers\Constant;
use Illuminate\Database\Eloquent\Factories\Factory;

class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'       => $this->faker->sentence,
            'description' => $this->faker->paragraphs(3, $asText = true),
        ];
    }

    public function open()
    {
        return $this->state(function (array $attributes) {
            return [
                'status' => Constant::TICKET_STATUS['open'],
            ];
        });
    }

    public function closed()
    {
        return $this->state(function (array $attributes) {
            return [
                'status' => Constant::TICKET_STATUS['closed'],
            ];
        });
    }
}
