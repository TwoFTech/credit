<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserFactory extends Factory
{
    protected $model = User::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'nom' => $this->faker->name(), // Remplace 'name' par 'nom'
            'email' => 'pretshorizon@gmail.com',
            'sexe' => 'homme',
            'telephone' => '+33 0757847960',
            'pays' => 'France',
            'ville' => 'Paris',
            'password' => Hash::make('pretshorizon12345'), // Hachage du mot de passe
            'role' => 'admin', // ou 'client' selon le rôle que tu veux attribuer
            'remember_token' => Str::random(10),
        ];
    }
}
