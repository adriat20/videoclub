<?php
namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class UserFactory extends Factory
{
    /**
     * El nombre del modelo que se va a usar para la fábrica.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define el estado predeterminado del modelo.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => Hash::make('password'), 
            'remember_token' => \Illuminate\Support\Str::random(10),
        ];
    }

    /**
     * Indica que el usuario debe tener el nombre "admin" y la contraseña "password".
     *
     * @return $this
     */
    public function admin()
    {
        return $this->state(function () {
            return [
                'name' => 'admin',
                'password' => Hash::make('password'),
            ];
        });
    }
}