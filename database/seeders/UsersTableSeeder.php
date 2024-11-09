<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Vérifie si l'utilisateur existe déjà avant de le créer
        if (!User::where('email', 'pretshorizon@gmail.com')->exists()) {
            User::create([
                'nom' => 'Prêt Horizon',
                'email' => 'pretshorizon@gmail.com',
                'sexe' => 'homme',
                'telephone' => '+33 0757847960',
                'pays' => 'France',
                'ville' => 'Paris',
                'password' => Hash::make('pretshorizon12345'),
                'role' => 'admin',
            ]);
        }
    }
}
