<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResumeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('resumes')->insert([
            [
                'user_id' => 1,
                'title' => 'Web Administrator | Database Manager',
                'short_desc' => 'Managing the Database Administration and leading a team of 5 members on the company. Managing Website using CorePHP and React. Also working as a Sales Team.',
                'long_desc' => '',
                'company' => 'Sajilo Marmat Sewa',
                'date_from' => 'May 2020',
                'date_to' => 'Jan 2021',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 1,
                'title' => 'Frontend Supervisor | UX / UI Designer',
                'short_desc' => 'Worked with the team of 7, analyzing the user interface and the system to optimize the overall website. I am working on various projects ordered by clients. Development using Python (Django) at the backend and Bootstrap/jQuery at the frontend.',
                'long_desc' => '',
                'company' => 'Dailo Tech.',
                'date_from' => 'Jan 2021',
                'date_to' => 'March 2021',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 1,
                'title' => 'Project Leader | FullStack Developer | UX-UI Designer',
                'short_desc' => 'Developed a fully functional CMS along with Appointment Request System using AngularJS. I am working on various projects ordered by clients. Collaborated in a team, designed the system UI and managed the hosting of the website.',
                'long_desc' => '',
                'company' => 'Prelude International Private Limited',
                'date_from' => 'Feb 2021',
                'date_to' => 'April 2021',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 1,
                'title' => 'Laravel Web Developer | UX-UI Designer',
                'short_desc' => 'Currently working on Burgeon Tech established in (Nepal, Canada). I am working on various projects ordered by clients. Also working as a Web Designer and Full Stack Developer.',
                'long_desc' => '',
                'company' => 'Burgeon Tech.',
                'date_from' => 'Dec. 2019',
                'date_to' => 'Feb. 2021',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 1,
                'title' => 'Project Design | Development | Freelance',
                'short_desc' => 'Created many note-worthy projects (including Skillpark Inc.). Team-led Competitions and managed many projects, both for companies and startups.',
                'long_desc' => '',
                'company' => 'Freelance & Project Based',
                'date_from' => 'Jan. 2021',
                'date_to' => 'Current',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
