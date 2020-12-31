<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Curso;
Use \App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        Curso::factory(50)->create();
    }
}
