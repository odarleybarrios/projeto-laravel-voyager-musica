<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     *
     * @throws Exception
     */
    public function run()
    {
     try {
        \DB::beginTransaction();

        \DB::table('settings')->delete();

        \DB::table('settings')->insert(array (
                0 => 
                array (
                    'id' => 1,
                    'key' => 'site.title',
                    'display_name' => 'Site Title',
                    'details' => '',
                    'type' => 'text',
                    'order' => 1,
                    'group' => 'Site',
                    'value' => 'Site Title',
                ),
                1 => 
                array (
                    'id' => 2,
                    'key' => 'site.description',
                    'display_name' => 'Site Description',
                    'details' => '',
                    'type' => 'text',
                    'order' => 2,
                    'group' => 'Site',
                    'value' => 'Site Description',
                ),
                2 => 
                array (
                    'id' => 3,
                    'key' => 'site.logo',
                    'display_name' => 'Site Logo',
                    'details' => '',
                    'type' => 'image',
                    'order' => 3,
                    'group' => 'Site',
                    'value' => '',
                ),
                3 => 
                array (
                    'id' => 4,
                    'key' => 'site.google_analytics_tracking_id',
                    'display_name' => 'Google Analytics Tracking ID',
                    'details' => '',
                    'type' => 'text',
                    'order' => 4,
                    'group' => 'Site',
                    'value' => '',
                ),
                4 => 
                array (
                    'id' => 5,
                    'key' => 'admin.bg_image',
                    'display_name' => 'Admin Background Image',
                    'details' => '',
                    'type' => 'image',
                    'order' => 5,
                    'group' => 'Admin',
                    'value' => '',
                ),
                5 => 
                array (
                    'id' => 6,
                    'key' => 'admin.title',
                    'display_name' => 'Admin Title',
                    'details' => '',
                    'type' => 'text',
                    'order' => 1,
                    'group' => 'Admin',
                    'value' => 'Voyager',
                ),
                6 => 
                array (
                    'id' => 7,
                    'key' => 'admin.description',
                    'display_name' => 'Admin Description',
                    'details' => '',
                    'type' => 'text',
                    'order' => 2,
                    'group' => 'Admin',
                    'value' => 'Welcome to Voyager. The Missing Admin for Laravel',
                ),
                7 => 
                array (
                    'id' => 8,
                    'key' => 'admin.loader',
                    'display_name' => 'Admin Loader',
                    'details' => '',
                    'type' => 'image',
                    'order' => 3,
                    'group' => 'Admin',
                    'value' => '',
                ),
                8 => 
                array (
                    'id' => 9,
                    'key' => 'admin.icon_image',
                    'display_name' => 'Admin Icon Image',
                    'details' => '',
                    'type' => 'image',
                    'order' => 4,
                    'group' => 'Admin',
                    'value' => '',
                ),
                9 => 
                array (
                    'id' => 10,
                    'key' => 'admin.google_analytics_client_id',
                'display_name' => 'Google Analytics Client ID (used for admin dashboard)',
                    'details' => '',
                    'type' => 'text',
                    'order' => 1,
                    'group' => 'Admin',
                    'value' => '',
                ),
            ));
       } catch(Exception $e) {
         throw new Exception('Exception occur ' . $e);

         \DB::rollBack();
       }

       \DB::commit();
    }
}
