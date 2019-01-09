<?php
use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->delete();
        $admin = User::create(array(
            'name'     => 'Admin',
            'username' => 'admin',
            'email'    => 'Admin@Admin.io',
            'password' => Hash::make('Admin'),
        ));
        $user1 = User::create(array(
            'name'     => 'User 1',
            'username' => 'user1',
            'email'    => 'User1@User.io',
            'password' => Hash::make('user1'),
        ));
        $user2 = User::create(array(
            'name'     => 'User 2',
            'username' => 'user2',
            'email'    => 'User2@User.io',
            'password' => Hash::make('user2'),
        ));
        $user3 = User::create(array(
            'name'     => 'User 3',
            'username' => 'user3',
            'email'    => 'User3@User.io',
            'password' => Hash::make('user3'),
        ));



        $role_admin = Role::where('name', 'admin')->first();
        $role_tsz = Role::where('name', 'tsz')->first();
        $role_bf = Role::where('name', 'bf')->first();
        // add basic roles
        $admin->roles()->attach($role_admin);
        $user1->roles()->attach($role_tsz);
        $user1->roles()->attach($role_bf);
        $user2->roles()->attach($role_tsz);
        $user3->roles()->attach($role_bf);

// 
//         $admin = new User();
//         $admin->name = Admin;

        // $admin->email = ‘employee@example.com’;
        // $admin->password = bcrypt(‘secret’);
        // $admin->save();
        // $admin->roles()->attach($role_admin);


        // $manager = new User();
        // $manager->name = ‘Manager Name’;
        // $manager->email = ‘manager@example.com’;
        // $manager->password = bcrypt(‘secret’);
        // $manager->save();
        // $manager->roles()->attach($role_manager);
  
    }
}
