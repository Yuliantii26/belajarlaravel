<?php

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
        $data = [
            ['title'=>'Membuat website dengan laravel',
            'content'=>'belajar laravel 6'],
            ['title'=>'Belajar tajwid',
            'content'=>'hukum hukum tajwid '],
        ];
        DB::table('posts')->insert($data);
    }
}
