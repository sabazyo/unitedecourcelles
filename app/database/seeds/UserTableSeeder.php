<?php

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        User::create(array(
            'email' => 'root@scout.dev',
            'password' => Hash::make('rootme')
        ));
    }
}
