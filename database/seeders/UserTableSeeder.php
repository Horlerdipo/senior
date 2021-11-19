<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Carbon\Carbon;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        Permission::create(['name' => 'create-user']);
        Permission::create(['name' => 'edit-user']);
        Permission::create(['name' => 'delete-user']);
        Permission::create(['name' => 'view-employee']);

        $permission = Permission::all();
        $role1 = Role::create(['name' => 'superadmin']);
        $role1->givePermissionTo($permission);
        $user = User::create([
            'name' => 'Senior Citizen',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456')
        ]);
        $user->assignRole($role1);

        $role2 = Role::create(['name' => 'hospital']);
        $role2->givePermissionTo($permission);
        $user = User::create([
            'name' => 'lautech',
            'email' => 'hospital@gmail.com',
            'password' => bcrypt('123456')
        ]);
        $user->assignRole($role2);

        $role3 = Role::create(['name' => 'seniorcitizen']);
        $role3->givePermissionTo($permission);
        $user = User::create([
            'name' => 'Adeoye Rebbeca',
            'email' => 'seniorcitizen@gmail.com',
            'password' => bcrypt('123456')
        ]);
        $user->assignRole($role3);

        $role4 = Role::create(['name' => 'government']);
        $role4->givePermissionTo($permission);
        $user = User::create([
            'name' => 'Hon. Olatunji',
            'email' => 'olatunji@gmail.com',
            'password' => bcrypt('123456')
        ]);
        $user->assignRole($role4);

    }
}
