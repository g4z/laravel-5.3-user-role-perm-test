<?php

use Illuminate\Database\Seeder;

class UserRoleSeeder extends BaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this::USERS as $u) {
            $user = App\Models\User::where('name', $u)->first();
            $role = App\Models\Role::where('name', $u)->first();
            $user->attachRole($role);
        }
    }
}
