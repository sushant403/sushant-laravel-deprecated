<?php

namespace Database\Seeders;

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
        $this->call(AdminSeeder::class);
        $this->call(FrontendSeeder::class);
        $this->call(AboutSeeder::class);
        $this->call(ResumeSeeder::class);
        $this->call(PortfolioSeeder::class);
        $this->call(ServicesSeeder::class);
    }
}
