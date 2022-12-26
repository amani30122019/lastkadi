<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $super_user = User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@gmail.com',
            'photo' => time() . '.jpeg',
            'password' => bcrypt('password'),
            'email_verified_at' => now(),
        ]);
        $super_user_role = Role::create(['name' => 'Super admin']);
        Role::create(['name' => 'Standard User']);
        $permissions = Permission::pluck('id', 'id')->all();
        $super_user_role->syncPermissions($permissions);
        $super_user->assignRole([$super_user_role->id]);
    }
}