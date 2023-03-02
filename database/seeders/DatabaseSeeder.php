<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            TypesTableSeeder::class, //si inserisce prima il seeder riferito alla tabella indipendente
            ProjectsTableSeeder::class,
            TechnologiesTableSeeder::class,
            ProjectTechnologyTableSeeder::class
        ]);
    }
}
