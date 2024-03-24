<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TweetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tweets')->insert(
            [
                'name'=> 'Johnni Ward',
                'handle'=> '@jhonniward',
                'image'=> 'https://randmuser.me/api/portraits/men/40.jpg',
                'tweet'=> 'We went rock climbing this week-end? Hereis the video.',
                'file'=> '/videos/Sportsman.mp4',
                'is_video'=> true,
                'comments'=> '35',
                'retweets'=> '54',
                'likes'=> '84',
                'analytics'=> '81',
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ]
            );
    }
}
