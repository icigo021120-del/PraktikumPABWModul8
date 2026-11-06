<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        User::factory()->admin()->create([
            'name' => 'Petugas Perpustakaan',
            'email' => 'admin@sipustaka.com',
            'password' => 'password',
        ]);

        User::factory()->create([
            'name' => 'Anggota Perpustakaan',
            'email' => 'anggota@sipustaka.com',
            'password' => 'password',
        ]);
    }
}