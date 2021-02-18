<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'id'            =>  '1',
            'name_ar'        =>  'سيارات',
            'name_en'       =>  'Cars',
        ]);
        DB::table('categories')->insert([
            'id'            =>  '2',
            'name_ar'        =>  'موبايلات',
            'name_en'       =>  'Mobiles'
        ]);

        DB::table('categories')->insert([
            'id'            =>  '3',
            'name_ar'        =>  'اجهزة لوحية',
            'name_en'       =>  'Tablets'
        ]);

        DB::table('categories')->insert([
            'id'            =>  '4',
            'name_ar'        =>  'لابتوب',
            'name_en'       =>  'Laptop'
        ]);

        DB::table('categories')->insert([
            'id'            =>  '5',
            'name_ar'        =>  'كومبيوتر مكتبي',
            'name_en'       =>  'desktop computer
            '
        ]);

        DB::table('categories')->insert([
            'id'            =>  '6',
            'name_ar'        =>  'مكيفات',
            'name_en'       =>  'Conditioners'
        ]);

        DB::table('categories')->insert([
            'id'            =>  '7',
            'name_ar'        =>  'اجهزة منزلية كبيرة',
            'name_en'       =>  'Large home appliances'
        ]);

        DB::table('categories')->insert([
            'id'            =>  '8',
            'name_ar'        =>  'اجهزة منزلية صغيرة',
            'name_en'       =>  'Small home appliances'
        ]);

        DB::table('categories')->insert([
            'id'            =>  '9',
            'name_ar'        =>  'كاميرات',
            'name_en'       =>  'Cameras'
        ]);

        DB::table('categories')->insert([
            'id'            =>  '10',
            'name_ar'        =>  'تلفيزيونات',
            'name_en'       =>  'Televisions'
        ]);

        DB::table('categories')->insert([
            'id'            =>  '11',
            'name_ar'        =>  'العاب الكترونية',
            'name_en'       =>  'Video Games'
        ]);

        DB::table('categories')->insert([
            'id'            =>  '12',
            'name_ar'        =>  'مكائن القهوة',
            'name_en'       =>  'Coffee machines'
        ]);

        DB::table('categories')->insert([
            'id'            =>  '13',
            'name_ar'        =>  'قوارب',
            'name_en'       =>  'Boats'
        ]);

        DB::table('categories')->insert([
            'id'            =>  '14',
            'name_ar'        =>  'عدد وادوات',
            'name_en'       =>  'tools'
        ]);

        DB::table('categories')->insert([
            'id'            =>  '15',
            'name_ar'        =>  'معدات رياضية',
            'name_en'       =>  'Sports equipment'
        ]);

        DB::table('categories')->insert([
            'id'            =>  '16',
            'name_ar'        =>  'اثاث',
            'name_en'       =>  'furniture'
        ]);

        DB::table('categories')->insert([
            'id'            =>  '17',
            'name_ar'        =>  'معدات صناعية',
            'name_en'       =>  'industrial equipment'
        ]);

        DB::table('categories')->insert([
            'id'            =>  '18',
            'name_ar'        =>  'اجهزة طبية',
            'name_en'       =>  'Medical devices'
        ]);

        DB::table('categories')->insert([
            'id'            =>  '19',
            'name_ar'        =>  'مقتنيات ثمينة',
            'name_en'       =>  'Valuables'
        ]);


        //subCategories
        DB::table('categories')->insert([
            'id'            =>  '20',
            'parent_id'     =>  '1',
            'name_ar'        =>  'توبوتا',
            'name_en'       =>  'Toyota'
        ]);
        DB::table('categories')->insert([
            'id'            =>  '21',
            'parent_id'     =>  '1',
            'name_ar'        =>  'فورد',
            'name_en'       =>  'Ford'
        ]);
        DB::table('categories')->insert([
            'id'            =>  '22',
            'parent_id'     =>  '1',
            'name_ar'        =>  'كيا',
            'name_en'       =>  'Kia'
        ]);
        DB::table('categories')->insert([
            'id'            =>  '23',
            'parent_id'     =>  '1',
            'name_ar'        =>  'هافال',
            'name_en'       =>  'Haval'
        ]);

        //
        DB::table('categories')->insert([
            'id'            =>  '24',
            'parent_id'     =>  '2',
            'name_ar'        =>  'ابل',
            'name_en'       =>  'Apple'
        ]);
        DB::table('categories')->insert([
            'id'            =>  '25',
            'parent_id'     =>  '2',
            'name_ar'        =>  'سامسونج',
            'name_en'       =>  'Samsung'
        ]);
        DB::table('categories')->insert([
            'id'            =>  '26',
            'parent_id'     =>  '2',
            'name_ar'        =>  'هواوي',
            'name_en'       =>  'Huawei'
        ]);
        DB::table('categories')->insert([
            'id'            =>  '27',
            'parent_id'     =>  '2',
            'name_ar'        =>  'موتوريلا',
            'name_en'       =>  ''
        ]);
        DB::table('categories')->insert([
            'id'            =>  '28',
            'parent_id'     =>  '2',
            'name_ar'        =>  'نوكيا',
            'name_en'       =>  'Motorola'
        ]);
        DB::table('categories')->insert([
            'id'            =>  '29',
            'parent_id'     =>  '2',
            'name_ar'        =>  'هونر',
            'name_en'       =>  'Honer'
        ]);
        DB::table('categories')->insert([
            'id'            =>  '30',
            'parent_id'     =>  '2',
            'name_ar'        =>  'الكاتل',
            'name_en'       =>  'Alcatel'
        ]);
        DB::table('categories')->insert([
            'id'            =>  '31',
            'parent_id'     =>  '2',
            'name_ar'        =>  'تكنو',
            'name_en'       =>  'Techno'
        ]);
        DB::table('categories')->insert([
            'id'            =>  '34',
            'parent_id'     =>  '2',
            'name_ar'        =>  'اوبو',
            'name_en'       =>  'Oppo'
        ]);
        DB::table('categories')->insert([
            'id'            =>  '35',
            'parent_id'     =>  '2',
            'name_ar'        =>  'فيفو',
            'name_en'       =>  'Vivo'
        ]);
        DB::table('categories')->insert([
            'id'            =>  '36',
            'parent_id'     =>  '2',
            'name_ar'        =>  'لافا',
            'name_en'       =>  'Lava'
        ]);


        //
        DB::table('categories')->insert([
            'parent_id'     =>  '3',
            'name_ar'        =>  'ابل',
            'name_en'       =>  'Apple'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '3',
            'name_ar'        =>  'سامسونج',
            'name_en'       =>  ''
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '3',
            'name_ar'        =>  'هواوي',
            'name_en'       =>  'Samsung'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '3',
            'name_ar'        =>  'موتوريلا',
            'name_en'       =>  'Motorola'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '3',
            'name_ar'        =>  'نوكيا',
            'name_en'       =>  'Nokia'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '3',
            'name_ar'        =>  'هونر',
            'name_en'       =>  'Honer'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '3',
            'name_ar'        =>  'الكاتل',
            'name_en'       =>  'Alcatel'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '3',
            'name_ar'        =>  'تكنو',
            'name_en'       =>  'Techno'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '3',
            'name_ar'        =>  'اوبو',
            'name_en'       =>  'Oppo'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '3',
            'name_ar'        =>  'فيفو',
            'name_en'       =>  'Vivo'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '3',
            'name_ar'        =>  'لافا',
            'name_en'       =>  'Lava'
        ]);



        //
        DB::table('categories')->insert([
            'parent_id'     =>  '4',
            'name_ar'        =>  'اتش بي',
            'name_en'       =>  'HP'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '4',
            'name_ar'        =>  'ديل',
            'name_en'       =>  'DELL'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '4',
            'name_ar'        =>  'سامسونج',
            'name_en'       =>  'Samsung'
        ]);


        //
        DB::table('categories')->insert([
            'parent_id'     =>  '5',
            'name_ar'        =>  'اتش بي',
            'name_en'       =>  'HP'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '5',
            'name_ar'        =>  'ديل',
            'name_en'       =>  'DELL'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '5',
            'name_ar'        =>  'لينوفو',
            'name_en'       =>  'lenovo'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '5',
            'name_ar'        =>  'ماك',
            'name_en'       =>  'Mac'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '5',
            'name_ar'        =>  'اخرى',
            'name_en'       =>  'other'
        ]);


        //
        DB::table('categories')->insert([
            'parent_id'     =>  '6',
            'name_ar'        =>  'سبليت',
            'name_en'       =>  'Split'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '6',
            'name_ar'        =>  'شباكي',
            'name_en'       =>  'shbaky'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '6',
            'name_ar'        =>  'سبليت دكت',
            'name_en'       =>  'Split duct'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '6',
            'name_ar'        =>  'مركزي',
            'name_en'       =>  'central'
        ]);

        //
        DB::table('categories')->insert([
            'parent_id'     =>  '7',
            'name_ar'        =>  'ثلاجة',
            'name_en'       =>  'Refrigerator'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '7',
            'name_ar'        =>  'غسالة',
            'name_en'       =>  'Washer'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '7',
            'name_ar'        =>  'بوتوغاز',
            'name_en'       =>  'Cooker'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '7',
            'name_ar'        =>  'برادة ماء',
            'name_en'       =>  'Water cooler'
        ]);


        //
        DB::table('categories')->insert([
            'parent_id'     =>  '8',
            'name_ar'        =>  'مكنسة',
            'name_en'       =>  'broom'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '8',
            'name_ar'        =>  'فلاية هوائية',
            'name_en'       =>  'Air fly'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '8',
            'name_ar'        =>  'خلاط',
            'name_en'       =>  'Blender'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '8',
            'name_ar'        =>  'فرن حراري',
            'name_en'       =>  'Convection oven'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '8',
            'name_ar'        =>  'مكواه',
            'name_en'       =>  'iron'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '8',
            'name_ar'        =>  'عصارة',
            'name_en'       =>  'squeezer'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '8',
            'name_ar'        =>  'عجانة',
            'name_en'       =>  'Patissier'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '8',
            'name_ar'        =>  'مايكروويف',
            'name_en'       =>  'Microwave'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '8',
            'name_ar'        =>  'محضر طعام',
            'name_en'       =>  'Food processor'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '8',
            'name_ar'        =>  'قدر ضغط',
            'name_en'       =>  'Pressure cooker'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '8',
            'name_ar'        =>  'دفاية فرامة',
            'name_en'       =>  'Chopper heater'
        ]);


        //
        DB::table('categories')->insert([
            'parent_id'     =>  '9',
            'name_ar'        =>  'نيكون',
            'name_en'       =>  'Nikon'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '9',
            'name_ar'        =>  'كانون',
            'name_en'       =>  'Canon'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '9',
            'name_ar'        =>  'مبولتا',
            'name_en'       =>  'Mpolta'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '9',
            'name_ar'        =>  'سوني',
            'name_en'       =>  'Sony'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '9',
            'name_ar'        =>  'بانتاكس',
            'name_en'       =>  'Pantax'
        ]);


        //
        DB::table('categories')->insert([
            'parent_id'     =>  '10',
            'name_ar'        =>  'سامسونغ',
            'name_en'       =>  'Samsung'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '10',
            'name_ar'        =>  'ال جي',
            'name_en'       =>  'LG'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '10',
            'name_ar'        =>  'سوني',
            'name_en'       =>  'Sony'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '10',
            'name_ar'        =>  'Class',
            'name_en'       =>  ''
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '10',
            'name_ar'        =>  'توشيبا',
            'name_en'       =>  'Toshiba'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '10',
            'name_ar'        =>  'تي سي ال',
            'name_en'       =>  'TCL'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '10',
            'name_ar'        =>  'اخرى',
            'name_en'       =>  'Other'
        ]);

        //
        DB::table('categories')->insert([
            'parent_id'     =>  '11',
            'name_ar'        =>  'سوني',
            'name_en'       =>  'Sony'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '11',
            'name_ar'        =>  'نينتيندو',
            'name_en'       =>  'Nintendo'
        ]);


        //
        DB::table('categories')->insert([
            'parent_id'     =>  '12',
            'name_ar'        =>  'كروبس',
            'name_en'       =>  'Krups'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '12',
            'name_ar'        =>  'ديلونقي',
            'name_en'       =>  'Delonghi'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '12',
            'name_ar'        =>  'نسبريسو',
            'name_en'       =>  'Nespresso'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '12',
            'name_ar'        =>  'فليبس',
            'name_en'       =>  'Phillips'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '12',
            'name_ar'        =>  'براون',
            'name_en'       =>  'Brown'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '12',
            'name_ar'        =>  'اخرى',
            'name_en'       =>  'Other'
        ]);



        //
        DB::table('categories')->insert([
            'parent_id'     =>  '13',
            'name_ar'        =>  'سيلككرافت',
            'name_en'       =>  'Silkcraft'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '13',
            'name_ar'        =>  'الخليج',
            'name_en'       =>  'Khalig'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '13',
            'name_ar'        =>  'اخرى',
            'name_en'       =>  'Other'
        ]);



        //
        DB::table('categories')->insert([
            'parent_id'     =>  '14',
            'name_ar'        =>  'مثقاب',
            'name_en'       =>  'Drill '
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '14',
            'name_ar'        =>  'منشار قرص',
            'name_en'       =>  'Disc saw'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '14',
            'name_ar'        =>  'منشار منحنيات',
            'name_en'       =>  'Curves Saw'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '14',
            'name_ar'        =>  'صاروخ جلخ',
            'name_en'       =>  'Abrasive missile'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '14',
            'name_ar'        =>  'منشار بقاعدة',
            'name_en'       =>  'Saw with base'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '14',
            'name_ar'        =>  'مسدس دهان',
            'name_en'       =>  'Paint gun'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '14',
            'name_ar'        =>  'ماكينة لحام',
            'name_en'       =>  'Welding machine'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '14',
            'name_ar'        =>  'ماكينة صغط ماء',
            'name_en'       =>  'Water press machine'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '14',
            'name_ar'        =>  'جلاخة طاولة',
            'name_en'       =>  'Table grinder'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '14',
            'name_ar'        =>  'فارة خشب',
            'name_en'       =>  'Fired wood'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '14',
            'name_ar'        =>  'فرازة',
            'name_en'       =>  'Separator'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '14',
            'name_ar'        =>  'مسدس حرارة',
            'name_en'       =>  'Heat gun'
        ]);



        //
        DB::table('categories')->insert([
            'parent_id'     =>  '15',
            'name_ar'        =>  'هوم جم',
            'name_en'       =>  'Home Gym'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '15',
            'name_ar'        =>  'جهاز جري',
            'name_en'       =>  'Running device'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '15',
            'name_ar'        =>  'دراجة تمارين',
            'name_en'       =>  'An exercise bike'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '15',
            'name_ar'        =>  'طاولة تنس',
            'name_en'       =>  'tennis table'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '15',
            'name_ar'        =>  'دراجة هوائية',
            'name_en'       =>  'bicycle'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '15',
            'name_ar'        =>  'مسبح',
            'name_en'       =>  'Swimming pool'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '15',
            'name_ar'        =>  'نطاطة',
            'name_en'       =>  'Bouncy'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '15',
            'name_ar'        =>  'جعاز تمارين اثقال',
            'name_en'       =>  'Jaz weight exercises'
        ]);



        //
        DB::table('categories')->insert([
            'parent_id'     =>  '16',
            'name_ar'        =>  'غرفة نوم',
            'name_en'       =>  'Bedrooms'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '16',
            'name_ar'        =>  'غرفة طعام',
            'name_en'       =>  'Dining room'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '16',
            'name_ar'        =>  'كنب',
            'name_en'       =>  'Couch'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '16',
            'name_ar'        =>  'سرائر',
            'name_en'       =>  'Beds'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '16',
            'name_ar'        =>  'طاولة',
            'name_en'       =>  'Table'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '16',
            'name_ar'        =>  'مكتب',
            'name_en'       =>  'Office'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '16',
            'name_ar'        =>  'سجادة',
            'name_en'       =>  'carpet'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '16',
            'name_ar'        =>  'ستارة',
            'name_en'       =>  'curtain'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '16',
            'name_ar'        =>  'طاولة مكتب',
            'name_en'       =>  'Desk'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '16',
            'name_ar'        =>  'ارفف',
            'name_en'       =>  'Shelves'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '16',
            'name_ar'        =>  'دولاب',
            'name_en'       =>  'cupbord'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '16',
            'name_ar'        =>  'دواليب مطبخ',
            'name_en'       =>  'Cupboards kitchen'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '16',
            'name_ar'        =>  'كنبة استرخاء',
            'name_en'       =>  'Relaxing sofa'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '16',
            'name_ar'        =>  'كرسي دوار',
            'name_en'       =>  'rolling chair'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '16',
            'name_ar'        =>  'طاولة كمبيوتر',
            'name_en'       =>  'Computer table'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '16',
            'name_ar'        =>  'ارجوحة',
            'name_en'       =>  'swing'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '16',
            'name_ar'        =>  'مروحة',
            'name_en'       =>  'fan'
        ]);


        //
        DB::table('categories')->insert([
            'parent_id'     =>  '17',
            'name_ar'        =>  'مولد كهرباء',
            'name_en'       =>  'Electrical generator'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '17',
            'name_ar'        =>  'ماكينة لحام',
            'name_en'       =>  'Welding machine'
        ]);


        //
        DB::table('categories')->insert([
            'parent_id'     =>  '18',
            'name_ar'        =>  'كرسي طبي',
            'name_en'       =>  'Medical chair'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '18',
            'name_ar'        =>  'جهاز اوكسجين',
            'name_en'       =>  'Oxygen device'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '18',
            'name_ar'        =>  'سرير طبي',
            'name_en'       =>  'Medical bed'
        ]);


        //
        DB::table('categories')->insert([
            'parent_id'     =>  '19',
            'name_ar'        =>  'خاتم',
            'name_en'       =>  'Ring'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '19',
            'name_ar'        =>  'عقد',
            'name_en'       =>  'necklace'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '19',
            'name_ar'        =>  'طقم',
            'name_en'       =>  'set'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '19',
            'name_ar'        =>  'ساعة',
            'name_en'       =>  'clock'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '19',
            'name_ar'        =>  'حجر كريم',
            'name_en'       =>  'Holy Rock'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '19',
            'name_ar'        =>  'تحفة',
            'name_en'       =>  'Masterpiece'
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '19',
            'name_ar'        =>  'اخرى',
            'name_en'       =>  'Other'
        ]);

    }
}
