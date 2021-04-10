<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::create([
            'user_id' => 1,
            'title_tag' => 'Designer, Perfectionist, Creative Doer',
            'short_desc' => 'I have been working in the Web Development field since 7+ years. These are the languages I excel at and what I work on everyday. HTML5 - CSS3 - Vanilla JavaScript - VueJS - PHP Core - Laravel Framework',
            'long_desc' => 'I am always serious about the punctuality and satisfaction of the client who trusts me with their project as well as thankful for the opportunity given to me. I work on time, I work as promised and I never give chance for the client to be dissatisfied about the work I do for them. Additionally, I am fluent in English, Nepali and Hindi. Team worker and a Perfectionist. I like to work on the minor details. Cooperative, Calm and Fast, but good worker.',
            'location' => 'Kathmandu, Nepal',
            'phone' => '+977 986*****94',
            'birthday' => '1998-07-13',
            'skill' => 'Laravel',
            'github_url' => 'https://github.com/sushant403',
            'instagram_url' => 'https://instagram.com/sushantpdl',
            'twitter_url' => 'https://twitter.com/sushant_pdll',
            'linkedin_url' => 'https://www.linkedin.com/in/sushantpoudel/',
            'freelance_url' => 'https://www.upwork.com/o/profiles/users/~010f233202f1bb5ba7/',
            'resume_url' => 'https://drive.google.com/file/d/1RfmpyXRp_m4bWxJGgcQAkpRXeO4rHIYY/view',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
