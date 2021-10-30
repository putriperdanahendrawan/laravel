<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //membuat data dari seeder
        $data = [
            ['title' => 'karina over power',
            'content' => 'lorem ipsum'],
            ['title' => 'seminggu belajar laravel',
            'content' => 'lorem ipsum'],
            ['title' => '5 langkah agar kamu tidak jadi beban keluarga',
            'content' => 'lorem ipsum']
            ];
        db::table('post') -> insert ($data);
    }
}
