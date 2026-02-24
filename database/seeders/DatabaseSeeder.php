<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            MenuSeeder::class,
            SeoDataSeeder::class,
            ParametrSeeder::class,
            ContactSeeder::class,
            PageSeeder::class,
            ControlOrganizationSeeder::class,
            ServiceSeeder::class,
            SpecialistSeeder::class,
            PriceSeederTer::class,
            PriceSeederHir::class,
            PriceSeederOrt::class,
        ]);
    }
}
