<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banners')->insert([
            [
                'name'=>'WATCH',
                'gallery'=>'banner/Banner.jpeg'
            ], 
            [
                'name'=>'WATCH',
                'gallery'=>'banner/Banner1.jpg'
            ], 
            [
                'name'=>'WATCH',
                'gallery'=>'banner/Banner2.jpg'
            ], 
            [
                'name'=>'TEDDY BEAR',
                'gallery'=>'banner/Banner3.webp'
            ], 
            [
                'name'=>'RING',
                'gallery'=>'banner/Banner4.jpg'
            ], 
            [
                'name'=>'RING',
                'gallery'=>'banner/Banner5.jpg'
            ],  
            [
                'name'=>'RING',
                'gallery'=>'banner/Banner6.jpg'
            ], 
            [
                'name'=>'WATCH',
                'gallery'=>'banner/Banner7.jpg'
            ],
            [
                'name'=>'WATCH',
                'gallery'=>'banner/Banner8.jpg'
            ]
        ]);
    }
}
