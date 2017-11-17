<?php

use Illuminate\Database\Seeder;

class SlidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sliders')->insert([
            [
                'path' => 'slider1.jpg',
                'title' => 'Slider 1',
                'link' => 'google.com'
            ],
            [
                'path' => 'slider2.jpg',
                'title' => 'Slider 2',
                'link' => 'youtube.com'
            ],
            [
                'path' => 'slider3.jpg',
                'title' => 'Slider 3',
                'link' => 'mp3.zing.vn'
            ]
        ]);
    }
}
