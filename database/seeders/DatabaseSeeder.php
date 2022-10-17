<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        if (Role::where('name', '=', 'CEO')->first() == null) {
            $ceo_role = new Role();
            $ceo_role->name = 'CEO';
            $ceo_role->can_access_internal_panel = true;
            $ceo_role->can_access_user_management = true;
            $ceo_role->can_modify_user = true;
            $ceo_role->can_access_role_management = true;
            $ceo_role->can_modify_role = true;
            $ceo_role->can_assign_role = true;
            $ceo_role->save();
        }
    }
}
