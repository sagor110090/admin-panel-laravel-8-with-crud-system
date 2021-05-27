<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SiteSettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('site_settings')->delete();
        
        \DB::table('site_settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => NULL,
                'updated_at' => '2021-05-23 18:38:05',
                'logo' => 'uploads/OSDFn6h7YR3uuEj5jlUwM8wQGrSaxsEHvm6fJSkg.png',
                'address' => 'Jhikargachha, jessore',
                'website_name' => 'My Site',
                'favicon' => 'uploads/4n6Xeu9KuS4E0Ps2IXtmvAYDuulkaBdVCZT9fB0F.ico',
                'language' => 'en',
            ),
        ));
        
        
    }
}