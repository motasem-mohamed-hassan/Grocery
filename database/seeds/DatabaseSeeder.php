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
            'phone_number'  => '0555555555',
            'email' => 'admin@admin.com',
            'password' => Hash::make('mody2511'),
        ]);

        $role = Role::create(['name' => 'admin']);
        $permission = Permission::create(['name' => 'sign in dashboard']);
        $user = User::find(1);;
        $user->assignRole('admin');


        DB::table('pages')->insert([
            'id'                => '1',
            'header'      => 'Welcome to our Site',
            'description' =>  'Nam libero tempore cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus omnis optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae libero tempore cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus omnis optio cumque nihil impedit',
            //'video'      =>  '',
            'video_description' =>  'No.1 Leading E-commerce marketplace with over 70 million Products'
        ]);

        DB::table('settings')->insert([
            'id'            =>  '1',
            'phone1'        =>  '0',
            'phone2'        =>  '0',
            'location'      =>  'location',
            'facebook'      =>  'www.facebook.com',
            'twitter'       =>  'www.twitter.com',
            'instegram'     =>  'www.instegram.com',
            'description'   =>  'some description',
        ]);

        DB::table('categories')->insert([
            'id'            =>  '1',
            'name'        =>  'سيارات',
        ]);
        DB::table('categories')->insert([
            'id'            =>  '2',
            'name'        =>  'موبايلات',
        ]);

        DB::table('categories')->insert([
            'id'            =>  '3',
            'name'        =>  'اجهزة لوحية',
        ]);

        DB::table('categories')->insert([
            'id'            =>  '4',
            'name'        =>  'لابتوب',
        ]);

        DB::table('categories')->insert([
            'id'            =>  '5',
            'name'        =>  'كومبيوتر مكتبي',
        ]);

        DB::table('categories')->insert([
            'id'            =>  '6',
            'name'        =>  'مكيفات',
        ]);

        DB::table('categories')->insert([
            'id'            =>  '7',
            'name'        =>  'اجهزة منزلية كبيرة',
        ]);

        DB::table('categories')->insert([
            'id'            =>  '8',
            'name'        =>  'اجهزة منزلية صغيرة',
        ]);

        DB::table('categories')->insert([
            'id'            =>  '9',
            'name'        =>  'كاميرات',
        ]);

        DB::table('categories')->insert([
            'id'            =>  '10',
            'name'        =>  'تلفيزيونات',
        ]);

        DB::table('categories')->insert([
            'id'            =>  '11',
            'name'        =>  'العاب الكترونية',
        ]);

        DB::table('categories')->insert([
            'id'            =>  '12',
            'name'        =>  'مكائن القهوة',
        ]);

        DB::table('categories')->insert([
            'id'            =>  '13',
            'name'        =>  'قوارب',
        ]);

        DB::table('categories')->insert([
            'id'            =>  '14',
            'name'        =>  'عدد وادوات',
        ]);

        DB::table('categories')->insert([
            'id'            =>  '15',
            'name'        =>  'معدات رياضية',
        ]);

        DB::table('categories')->insert([
            'id'            =>  '16',
            'name'        =>  'اثاث',
        ]);

        DB::table('categories')->insert([
            'id'            =>  '17',
            'name'        =>  'معدات صناعية',
        ]);

        DB::table('categories')->insert([
            'id'            =>  '18',
            'name'        =>  'اجهزة طبية',
        ]);

        DB::table('categories')->insert([
            'id'            =>  '19',
            'name'        =>  'مقتنيات ثمينة',
        ]);
    }
}
