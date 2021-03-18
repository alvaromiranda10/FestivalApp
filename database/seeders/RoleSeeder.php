<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(["name" => "dj"]);

        Permission::create(["name" => "tours"])->assignRole($role1);

        Permission::create(["name" => "festival.store"])->assignRole($role1);
        Permission::create(["name" => "festival.destroy"])->assignRole($role1);
    }
}
