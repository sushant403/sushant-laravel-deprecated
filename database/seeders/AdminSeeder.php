<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id' => 1,
            'name' => 'Sushant Poudel',
            'email' => 'sushantpoudelofficial@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('Alpha@34168'),
            'profile_photo_path' => 'https://avatars2.githubusercontent.com/u/59304990?s=460&u=bcc656b65c5b5370cf54613248b54239c39857b4&v=4',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
