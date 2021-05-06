<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();
        
        // create roles
        $role1 = Role::create(['name' => 'super-admin']);
        $role2 = Role::create(['name' => 'admin']);
        $role3 = Role::create(['name' => 'manager']);
        $role4 = Role::create(['name' => 'employee']);

        User::factory()->create([
            'name' => 'Veeral Jetani',
            'email' => 'viral@example.com'
        ])->assignRole($role1);

    }

}
