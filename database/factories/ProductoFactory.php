<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre'=>$this->faker->sentence(3),
            'descripcion'=>$this->faker->text(300),
            'precio'=>$this->faker->randomFloat(2, 90, 800),
            'cantidad'=>$this->faker->numberBetween(0, 58),
            'oferta'=> $this->faker->numberBetween(0, 1),
            'categoria_id'=>$this->faker->numberBetween(1, 4),
            'marca_id'=>$this->faker->numberBetween(1, 4),
        ];
    }
}
