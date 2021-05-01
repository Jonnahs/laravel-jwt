<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class UserTesteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Usuário de Teste',
            'email' => 'teste@teste.com.br',
            'email_verified_at' => now(),
            'password' => bcrypt('123teste'),
            'remember_token' => Str::random(10),
        ]);
    }
}
