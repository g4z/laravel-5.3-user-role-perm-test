<?php

use Illuminate\Database\Seeder;

class UserSeeder extends BaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this::USERS as $user) {
            factory(App\Models\User::class)->create([
                'name' => $user,
                'email' => $user.'@localhost',
                'password' => $user,
            ]);
        }
    }
}
