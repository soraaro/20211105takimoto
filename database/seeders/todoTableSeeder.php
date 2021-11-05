<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class todoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contents = ['あああ'];
        foreach ($contents as $content) {
            DB::table('todo')->insert([
                'content' => $content,
            ]);
        }
    }
}
