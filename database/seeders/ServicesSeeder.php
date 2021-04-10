<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            [
                'user_id' => 1,
                'title' => 'Laravel Web Application',
                'short_desc' => 'I create Laravel Based Web Applications with Frontend and Backend including [Admin] Support.',
                'long_desc' => 'Have been developing web application using Laravel since Version 5. I have worked on both companies and personal projects with the framework along with JavaScript / VueJS.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 1,
                'title' => 'Web Designing',
                'short_desc' => 'I design frontend according to the idea or from scratch. I use Figma and little bit of my imagination.',
                'long_desc' => 'Being familiar with Figma and UX/UI designing, I have conquered many creative designs in the last 3 years. I have created websites from scratch with just an idea and/or concepts.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 1,
                'title' => 'Creative Copywriter',
                'short_desc' => 'I write contents. I post blogs. I create contexts for the websites and/or companies.',
                'long_desc' => 'Fluency in English and few other languages has certainly been my plus point on writing contents. Accurate Grammar Knowledge has helped me achieve many \'Blogging Site\' Clients and more.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 1,
                'title' => 'Project Management',
                'short_desc' => 'I have enough experiences in managing small projects. I have been involved in the big ones.',
                'long_desc' => 'Currently involved in managing the Database and the Website of Sajilo Marmat Sewa. I have also led teams, including Hackathon Competitions, to complete various projects.',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
