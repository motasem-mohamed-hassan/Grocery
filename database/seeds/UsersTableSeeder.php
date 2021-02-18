<?php

use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id'    => '1',
            'name' => 'admin',
            'phone_number'  => '0555555555',
            'email' => 'admin@admin.com',
            'password' => Hash::make('123456789'),
        ]);

        Role::create(['name' => 'superAdmin']);
        Role::create(['name' => 'admin']);
        $user = User::find(1);
        $user->assignRole('superAdmin');

    }
}
