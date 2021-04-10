<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portfolios')->insert([
            [
                'user_id' => 1,
                'title' => 'Freelancers Platform',
                'type' => 'product',
                'short_desc' => '',
                'long_desc' => '',
                'portfolio_url' => 'https://skillpark.herokuapp.com/',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 1,
                'title' => 'Karyapalika Forum',
                'type' => 'product',
                'short_desc' => '',
                'long_desc' => '',
                'portfolio_url' => 'https://karyapalika.herokuapp.com/',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 1,
                'title' => 'Writell Blogging Site',
                'type' => 'project',
                'short_desc' => '',
                'long_desc' => '',
                'portfolio_url' => 'https://writell.herokuapp.com/',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 1,
                'title' => 'Consultancy CMS Website',
                'type' => 'product',
                'short_desc' => '',
                'long_desc' => '',
                'portfolio_url' => 'https://preludeint.com',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 1,
                'title' => 'HamroLagani Mockup',
                'type' => 'design',
                'short_desc' => '',
                'long_desc' => '',
                'portfolio_url' => 'https://hamrolagani.herokuapp.com/',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 1,
                'title' => 'Sajilo Marmat Sewa',
                'type' => 'design',
                'short_desc' => '',
                'long_desc' => '',
                'portfolio_url' => 'https://sajilosewa.com',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 1,
                'title' => 'The Puzzle of Motivation',
                'type' => 'photography',
                'short_desc' => '',
                'long_desc' => '',
                'portfolio_url' => 'https://www.youtube.com/rrkrvAUbU9Y',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
