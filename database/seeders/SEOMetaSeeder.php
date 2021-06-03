<?php

namespace Database\Seeders;

use App\Models\Metatags;
use Illuminate\Database\Seeder;

class SEOMetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Metatags::create([
            'meta_url' => 'https://sushantp.com.np',
            'meta_title' => 'Sushant Poudel - Resume | CV | Portfolio',
            'meta_description' => 'Sushant Poudel - Portfolio / Resume. Full Stack Web Developer and Designer since 7+ years.',
            'meta_keywords' => 'sushant, sushantp, sushant poudel portfolio, resume, cv, personal website, sushantpoudel, portfolio',
            'meta_author' => 'Sushant Poudel',
            'meta_image_url' => 'https://avatars2.githubusercontent.com/u/59304990?s=460&u=bcc656b65c5b5370cf54613248b54239c39857b4&v=4',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
