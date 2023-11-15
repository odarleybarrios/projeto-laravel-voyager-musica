<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
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

        \DB::table('permissions')->delete();

        \DB::table('permissions')->insert(array (
                0 => 
                array (
                    'id' => 1,
                    'key' => 'browse_admin',
                    'created_at' => '2022-09-25 15:29:02',
                    'updated_at' => '2022-09-25 15:29:02',
                    'table_name' => NULL,
                ),
                1 => 
                array (
                    'id' => 2,
                    'key' => 'browse_bread',
                    'created_at' => '2022-09-25 15:29:02',
                    'updated_at' => '2022-09-25 15:29:02',
                    'table_name' => NULL,
                ),
                2 => 
                array (
                    'id' => 3,
                    'key' => 'browse_database',
                    'created_at' => '2022-09-25 15:29:02',
                    'updated_at' => '2022-09-25 15:29:02',
                    'table_name' => NULL,
                ),
                3 => 
                array (
                    'id' => 4,
                    'key' => 'browse_media',
                    'created_at' => '2022-09-25 15:29:02',
                    'updated_at' => '2022-09-25 15:29:02',
                    'table_name' => NULL,
                ),
                4 => 
                array (
                    'id' => 5,
                    'key' => 'browse_compass',
                    'created_at' => '2022-09-25 15:29:02',
                    'updated_at' => '2022-09-25 15:29:02',
                    'table_name' => NULL,
                ),
                5 => 
                array (
                    'id' => 6,
                    'key' => 'browse_menus',
                    'created_at' => '2022-09-25 15:29:02',
                    'updated_at' => '2022-09-25 15:29:02',
                    'table_name' => 'menus',
                ),
                6 => 
                array (
                    'id' => 7,
                    'key' => 'read_menus',
                    'created_at' => '2022-09-25 15:29:02',
                    'updated_at' => '2022-09-25 15:29:02',
                    'table_name' => 'menus',
                ),
                7 => 
                array (
                    'id' => 8,
                    'key' => 'edit_menus',
                    'created_at' => '2022-09-25 15:29:02',
                    'updated_at' => '2022-09-25 15:29:02',
                    'table_name' => 'menus',
                ),
                8 => 
                array (
                    'id' => 9,
                    'key' => 'add_menus',
                    'created_at' => '2022-09-25 15:29:02',
                    'updated_at' => '2022-09-25 15:29:02',
                    'table_name' => 'menus',
                ),
                9 => 
                array (
                    'id' => 10,
                    'key' => 'delete_menus',
                    'created_at' => '2022-09-25 15:29:02',
                    'updated_at' => '2022-09-25 15:29:02',
                    'table_name' => 'menus',
                ),
                10 => 
                array (
                    'id' => 11,
                    'key' => 'browse_roles',
                    'created_at' => '2022-09-25 15:29:02',
                    'updated_at' => '2022-09-25 15:29:02',
                    'table_name' => 'roles',
                ),
                11 => 
                array (
                    'id' => 12,
                    'key' => 'read_roles',
                    'created_at' => '2022-09-25 15:29:02',
                    'updated_at' => '2022-09-25 15:29:02',
                    'table_name' => 'roles',
                ),
                12 => 
                array (
                    'id' => 13,
                    'key' => 'edit_roles',
                    'created_at' => '2022-09-25 15:29:02',
                    'updated_at' => '2022-09-25 15:29:02',
                    'table_name' => 'roles',
                ),
                13 => 
                array (
                    'id' => 14,
                    'key' => 'add_roles',
                    'created_at' => '2022-09-25 15:29:02',
                    'updated_at' => '2022-09-25 15:29:02',
                    'table_name' => 'roles',
                ),
                14 => 
                array (
                    'id' => 15,
                    'key' => 'delete_roles',
                    'created_at' => '2022-09-25 15:29:02',
                    'updated_at' => '2022-09-25 15:29:02',
                    'table_name' => 'roles',
                ),
                15 => 
                array (
                    'id' => 16,
                    'key' => 'browse_users',
                    'created_at' => '2022-09-25 15:29:02',
                    'updated_at' => '2022-09-25 15:29:02',
                    'table_name' => 'users',
                ),
                16 => 
                array (
                    'id' => 17,
                    'key' => 'read_users',
                    'created_at' => '2022-09-25 15:29:02',
                    'updated_at' => '2022-09-25 15:29:02',
                    'table_name' => 'users',
                ),
                17 => 
                array (
                    'id' => 18,
                    'key' => 'edit_users',
                    'created_at' => '2022-09-25 15:29:02',
                    'updated_at' => '2022-09-25 15:29:02',
                    'table_name' => 'users',
                ),
                18 => 
                array (
                    'id' => 19,
                    'key' => 'add_users',
                    'created_at' => '2022-09-25 15:29:02',
                    'updated_at' => '2022-09-25 15:29:02',
                    'table_name' => 'users',
                ),
                19 => 
                array (
                    'id' => 20,
                    'key' => 'delete_users',
                    'created_at' => '2022-09-25 15:29:02',
                    'updated_at' => '2022-09-25 15:29:02',
                    'table_name' => 'users',
                ),
                20 => 
                array (
                    'id' => 21,
                    'key' => 'browse_settings',
                    'created_at' => '2022-09-25 15:29:02',
                    'updated_at' => '2022-09-25 15:29:02',
                    'table_name' => 'settings',
                ),
                21 => 
                array (
                    'id' => 22,
                    'key' => 'read_settings',
                    'created_at' => '2022-09-25 15:29:02',
                    'updated_at' => '2022-09-25 15:29:02',
                    'table_name' => 'settings',
                ),
                22 => 
                array (
                    'id' => 23,
                    'key' => 'edit_settings',
                    'created_at' => '2022-09-25 15:29:02',
                    'updated_at' => '2022-09-25 15:29:02',
                    'table_name' => 'settings',
                ),
                23 => 
                array (
                    'id' => 24,
                    'key' => 'add_settings',
                    'created_at' => '2022-09-25 15:29:02',
                    'updated_at' => '2022-09-25 15:29:02',
                    'table_name' => 'settings',
                ),
                24 => 
                array (
                    'id' => 25,
                    'key' => 'delete_settings',
                    'created_at' => '2022-09-25 15:29:02',
                    'updated_at' => '2022-09-25 15:29:02',
                    'table_name' => 'settings',
                ),
                25 => 
                array (
                    'id' => 26,
                    'key' => 'browse_categories',
                    'created_at' => '2022-09-25 15:29:02',
                    'updated_at' => '2022-09-25 15:29:02',
                    'table_name' => 'categories',
                ),
                26 => 
                array (
                    'id' => 27,
                    'key' => 'read_categories',
                    'created_at' => '2022-09-25 15:29:02',
                    'updated_at' => '2022-09-25 15:29:02',
                    'table_name' => 'categories',
                ),
                27 => 
                array (
                    'id' => 28,
                    'key' => 'edit_categories',
                    'created_at' => '2022-09-25 15:29:02',
                    'updated_at' => '2022-09-25 15:29:02',
                    'table_name' => 'categories',
                ),
                28 => 
                array (
                    'id' => 29,
                    'key' => 'add_categories',
                    'created_at' => '2022-09-25 15:29:02',
                    'updated_at' => '2022-09-25 15:29:02',
                    'table_name' => 'categories',
                ),
                29 => 
                array (
                    'id' => 30,
                    'key' => 'delete_categories',
                    'created_at' => '2022-09-25 15:29:02',
                    'updated_at' => '2022-09-25 15:29:02',
                    'table_name' => 'categories',
                ),
                30 => 
                array (
                    'id' => 31,
                    'key' => 'browse_posts',
                    'created_at' => '2022-09-25 15:29:02',
                    'updated_at' => '2022-09-25 15:29:02',
                    'table_name' => 'posts',
                ),
                31 => 
                array (
                    'id' => 32,
                    'key' => 'read_posts',
                    'created_at' => '2022-09-25 15:29:02',
                    'updated_at' => '2022-09-25 15:29:02',
                    'table_name' => 'posts',
                ),
                32 => 
                array (
                    'id' => 33,
                    'key' => 'edit_posts',
                    'created_at' => '2022-09-25 15:29:02',
                    'updated_at' => '2022-09-25 15:29:02',
                    'table_name' => 'posts',
                ),
                33 => 
                array (
                    'id' => 34,
                    'key' => 'add_posts',
                    'created_at' => '2022-09-25 15:29:02',
                    'updated_at' => '2022-09-25 15:29:02',
                    'table_name' => 'posts',
                ),
                34 => 
                array (
                    'id' => 35,
                    'key' => 'delete_posts',
                    'created_at' => '2022-09-25 15:29:02',
                    'updated_at' => '2022-09-25 15:29:02',
                    'table_name' => 'posts',
                ),
                35 => 
                array (
                    'id' => 36,
                    'key' => 'browse_pages',
                    'created_at' => '2022-09-25 15:29:02',
                    'updated_at' => '2022-09-25 15:29:02',
                    'table_name' => 'pages',
                ),
                36 => 
                array (
                    'id' => 37,
                    'key' => 'read_pages',
                    'created_at' => '2022-09-25 15:29:02',
                    'updated_at' => '2022-09-25 15:29:02',
                    'table_name' => 'pages',
                ),
                37 => 
                array (
                    'id' => 38,
                    'key' => 'edit_pages',
                    'created_at' => '2022-09-25 15:29:02',
                    'updated_at' => '2022-09-25 15:29:02',
                    'table_name' => 'pages',
                ),
                38 => 
                array (
                    'id' => 39,
                    'key' => 'add_pages',
                    'created_at' => '2022-09-25 15:29:02',
                    'updated_at' => '2022-09-25 15:29:02',
                    'table_name' => 'pages',
                ),
                39 => 
                array (
                    'id' => 40,
                    'key' => 'delete_pages',
                    'created_at' => '2022-09-25 15:29:02',
                    'updated_at' => '2022-09-25 15:29:02',
                    'table_name' => 'pages',
                ),
            ));
       } catch(Exception $e) {
         throw new Exception('Exception occur ' . $e);

         \DB::rollBack();
       }

       \DB::commit();
    }
}
