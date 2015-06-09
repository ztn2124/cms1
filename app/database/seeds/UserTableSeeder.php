<?php

class UserTableSeeder extends Seeder {

    public function run()
    {

        User::create(array('username' => 'test',  'password' => Hash::make('test')));
    }

}