<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('homes')->insert([
            [
                'h_name'=>'Valentine Day',
                'h_category'=>'Valentine Day',
                'h_description'=>'💗Take my hand, take my whole life too, but I cannot help failling in love with you.',
                'h_gallery'=>'va.jpg'
            ],
            [
                'h_name'=>'Father/Mother Day',
                'h_category'=>'Father/Mother Day',
                'h_description'=>'👨‍👧‍👦We never know the love of a parent till we become parents ourselves.',
                'h_gallery'=>'fm.jpg'
            ],
            [
                'h_name'=>'Anniversary Day',
                'h_category'=>'Anniversary Day',
                'h_description'=>'❤️Hope you find time to look back on all your sweet memories together.',
                'h_gallery'=>'ann.jpg'
            ],
            [
                'h_name'=>'FriendShip Day',
                'h_category'=>'FriendShip Day',
                'h_description'=>'👯Friendship is the shadow of the evening, which strengthens with the setting sun of life.',
                'h_gallery'=>'friend.jpg'
            ],
            [
                'h_name'=>'Decoration',
                'h_category'=>'Decoration',
                'h_description'=>'🎍Have nothing in your home that you do not know to be useful or believe to be beautiful.',
                'h_gallery'=>'decore.jpg'
            ],
            [
                'h_name'=>'Special Gift',
                'h_category'=>'Special Gift',
                'h_description'=>'💐Each soul has a special gift.Find your gift for the special one.',
                'h_gallery'=>'ss.jpg'
            ]
        ]);
    }
}
