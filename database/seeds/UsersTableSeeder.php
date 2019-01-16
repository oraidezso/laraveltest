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
            'username' => 'Admin',
            'email'    => 'Admin@Admin.io',
            'password' => Hash::make('a'),
        ));
        $user1 = User::create(array(
            'name'     => 'Asd',
            'username' => 'User 1',
            'email'    => 'User1@User.io',
            'password' => Hash::make('a'),
        ));
        $user2 = User::create(array(
            'name'     => 'Béla',
            'username' => 'User 2',
            'email'    => 'User2@User.io',
            'password' => Hash::make('a'),
        ));
        $user3 = User::create(array(
            'name'     => 'Sanyi',
            'username' => 'User 3',
            'email'    => 'User3@User.io',
            'password' => Hash::make('a'),
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
