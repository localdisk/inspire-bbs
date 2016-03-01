<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('boards')->insert([
            'id'   => 'gline',
            'name' => 'ガイドライン＠インスパイヤー',
            'txt'  => 'ここがガ板ですよ。。。',
        ]);
        DB::table('threads')->insert([
            'timestamp' => 123456789,
            'board_id'  => 'gline',
            'title'     => 'インスパイヤのガイドライン',
        ]);
        $now = \Carbon\Carbon::now();
        DB::table('posts')->insert([
            [
                'board_id'         => 'gline',
                'thread_timestamp' => 123456789,
                'posted_at'        => $now,
                'name'             => 'たっどさん',
                'email'            => '#いんすぱいやー',
                'author_hash'      => 'tW1nDri11',
                'message'          => 'てすとです…',
                'ip_addr'          => '127.0.0.1',
            ],
            [
                'board_id'         => 'gline',
                'thread_timestamp' => 123456789,
                'posted_at'        => $now,
                'name'             => 'たっどさん',
                'email'            => '#いんすぱいやー',
                'author_hash'      => 'tW1nDri11',
                'message'          => 'もういい加減ねるぽ',
                'ip_addr'          => '127.0.0.1',
            ],
        ]);
    }
}
