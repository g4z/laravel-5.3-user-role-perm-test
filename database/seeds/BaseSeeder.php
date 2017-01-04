<?php

use Illuminate\Database\Seeder;

abstract class BaseSeeder extends Seeder
{
    const USERS = ['root', 'admin', 'user', 'guest'];
    const ROLES = ['root', 'admin', 'user', 'guest'];
    const PERMS = ['read', 'write'];
}
