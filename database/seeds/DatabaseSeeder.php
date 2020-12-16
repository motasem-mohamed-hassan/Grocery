<?php

use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id'    => '1',
            'name' => 'mohammed',
            'email' => 'admin@admin.com',
            'password' => Hash::make('mody2511'),
        ]);

        $role = Role::create(['name' => 'admin']);
        $permission = Permission::create(['name' => 'sign in dashboard']);

        $user = User::find(1);;

        $user->assignRole('admin');

    }
}
