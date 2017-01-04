<?php

use Illuminate\Database\Seeder;

class RolePermissionSeeder extends BaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $readPerm = App\Models\Permission::where('name', 'read')->first();
        $writePerm = App\Models\Permission::where('name', 'write')->first();
        App\Models\Role::where('name', 'root')->first()->attachPermission($writePerm);
        App\Models\Role::where('name', 'admin')->first()->attachPermission($writePerm);
        App\Models\Role::where('name', 'user')->first()->attachPermission($writePerm);
        App\Models\Role::where('name', 'guest')->first()->attachPermission($readPerm);
    }
}
