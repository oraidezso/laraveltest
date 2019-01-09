<?php
use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->delete();
        User::create(array(
            'name'     => 'Admin',
            'username' => 'admin',
            'email'    => 'Admin@Admin.io',
            'password' => Hash::make('Admin'),
        ));
        User::create(array(
            'name'     => 'User 1',
            'username' => 'user1',
            'email'    => 'User1@User.io',
            'password' => Hash::make('User1'),
        ));
        User::create(array(
            'name'     => 'User 2',
            'username' => 'user2',
            'email'    => 'User2@User.io',
            'password' => Hash::make('User2'),
        ));
        User::create(array(
            'name'     => 'User 3',
            'username' => 'user3',
            'email'    => 'User3@User.io',
            'password' => Hash::make('User3'),
        ));
    }
}
