<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void 
    {
        $this->call([
            CategorySeeder::class,
            FilmSeeder::class,
        ]);

        User::factory(5)->create();

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' =>now(),
            'password' => Hash::make('password'),
        ]);
    }
}
