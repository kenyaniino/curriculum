<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            [
            'name'=> 'yuuta',
            'email'=> 'yuuta@gmail',
            'password'=> Hash::make('hoge1')
            ],
            [
            'name'=> 'jyo',
            'email'=> 'jyo@gmail',
            'password'=> Hash::make('hoge2')
            ],
            [
            'name'=> 'rikiishi',
            'email'=> 'rikiishi@gmail',
            'password'=> Hash::make('hoge3')
            ],
        ]);
    }
}
