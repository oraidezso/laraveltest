<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->delete();
        DB::table('role_user')->delete();
        Role::create(array(
            'name'     => 'admin',
            'description' => 'Adminisztrátor'
        ));
        Role::create(array(
            'name'     => 'tsz',
            'description' => 'Tartalomszerkesztő'
        ));
        Role::create(array(
            'name'     => 'bf',
            'description' => 'Bejelentkezett felhasználó'
        ));
    }
}
