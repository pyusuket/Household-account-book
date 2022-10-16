<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'day' => '2022-10-16',
                'selection' => '支出',
                'main' => '食費',
                'sub' => '食費',
                'amount' => '2000',
                'comment' => '',
                'created_at' => '2022/10/16 11:11:11'
            ],
            [
                'day' => '2022-10-16',
                'selection' => '収入',
                'main' => '給与',
                'sub' => '給与①',
                'amount' => '200000',
                'comment' => '',
                'created_at' => '2022/10/16 11:11:11'
            ],
            [
                'day' => '2022-10-16',
                'selection' => '支出',
                'main' => '食費',
                'sub' => '外食費',
                'amount' => '2000',
                'comment' => '',
                'created_at' => '2022/10/16 11:11:11'
            ],
            [
                'day' => '2022-10-16',
                'selection' => '支出',
                'main' => '日用品',
                'sub' => '日用品',
                'amount' => '3000',
                'comment' => '',
                'created_at' => '2022/10/16 11:11:11'
            ],
        ]);
    }
}
