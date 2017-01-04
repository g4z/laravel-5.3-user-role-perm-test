<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends BaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this::ROLES as $role) {
            factory(App\Models\Role::class)->create([
                'name' => $role,
                'display_name' => $role,
            ]);
        }
    }
}
