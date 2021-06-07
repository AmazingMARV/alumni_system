<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\NewsFeed;

class NewsFeedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $news=[
            [
            'news' => 'this is no 1 sample news/events'
             ],
             [
            'news' => 'this is no 2 sample news/events'
             ]
        ];
        
        NewsFeed::insertOrIgnore($news);
    }
}
