<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */

 /**
 * Factory para el modelo Post.
 *
 * Esta factory se utiliza para generar datos de prueba para la tabla `posts`.
 * Los campos generados incluyen:
 * - `titulo`: Una frase aleatoria de 5 palabras.
 * - `descripcion`: Una frase aleatoria de 20 palabras.
 * - `imagen`: Un nombre de archivo aleatorio con extensión `.jpg`.
 * - `user_id`: Un ID de usuario aleatorio existente en la tabla `users`.
 *
 * Uso:
 * - Para crear un solo post: `Post::factory()->create()`
 * - Para crear múltiples posts: `Post::factory()->times(50)->create()`
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titulo' => $this->faker->sentence(5),
            'descripcion' => $this->faker->sentence(20),
            'imagen' => $this->faker->uuid() . '.jpg',
            'user_id' => $this->faker->randomElement([3, 5, 6, 7, 8, 9]),
        ];
    }
}
