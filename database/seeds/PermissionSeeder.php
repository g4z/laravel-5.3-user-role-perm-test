<?php

use Illuminate\Database\Seeder;

class PermissionSeeder extends BaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this::PERMS as $perm) {
            factory(App\Models\Permission::class)->create([
                'name' => $perm,
                'display_name' => $perm,
            ]);
        }
    }
}
