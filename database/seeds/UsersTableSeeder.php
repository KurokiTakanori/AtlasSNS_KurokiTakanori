<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['username' => '中居',
            'mail' => 'nakai@yahoo.jp',
            'password' => 'kouhaku_shikai'],
            ['username' => '木村',
            'mail' => 'kimura@gmail.com',
            'password' => 'kokilove'],
            ['username' => '香取',
            'mail' => 'katori@outlook.jp',
            'password' => 'hogeeeeeeeeeee'],
            ['username' => '草彅',
            'mail' => 'kusanagi@ipponmanzoku.jp',
            'password' => 'erakokyu'],
            ['username' => '稲垣',
            'mail' => 'inagaki@honkowa.com',
            'password' => 'maegami_daiji']
        ]);
    }
}
