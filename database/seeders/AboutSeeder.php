<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $about=About::create([
            'title'=>'Basliq',
            'desc'=>'Aviasiya',
            'img'=>'manager/assets/images/about.jpg',
        ]);
    }
}
