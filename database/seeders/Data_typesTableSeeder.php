<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Data_typesTableSeeder extends Seeder
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

        \DB::table('data_types')->delete();

        \DB::table('data_types')->insert(array (
                0 => 
                array (
                    'id' => 1,
                    'name' => 'users',
                    'slug' => 'users',
                    'display_name_singular' => 'User',
                    'display_name_plural' => 'Users',
                    'icon' => 'voyager-person',
                    'model_name' => 'TCG\\Voyager\\Models\\User',
                    'description' => '',
                    'generate_permissions' => 1,
                    'created_at' => '2022-09-25 15:29:01',
                    'updated_at' => '2022-09-25 15:29:01',
                    'server_side' => 0,
                    'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController',
                    'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                    'details' => NULL,
                ),
                1 => 
                array (
                    'id' => 2,
                    'name' => 'menus',
                    'slug' => 'menus',
                    'display_name_singular' => 'Menu',
                    'display_name_plural' => 'Menus',
                    'icon' => 'voyager-list',
                    'model_name' => 'TCG\\Voyager\\Models\\Menu',
                    'description' => '',
                    'generate_permissions' => 1,
                    'created_at' => '2022-09-25 15:29:01',
                    'updated_at' => '2022-09-25 15:29:01',
                    'server_side' => 0,
                    'controller' => '',
                    'policy_name' => NULL,
                    'details' => NULL,
                ),
                2 => 
                array (
                    'id' => 3,
                    'name' => 'roles',
                    'slug' => 'roles',
                    'display_name_singular' => 'Role',
                    'display_name_plural' => 'Roles',
                    'icon' => 'voyager-lock',
                    'model_name' => 'TCG\\Voyager\\Models\\Role',
                    'description' => '',
                    'generate_permissions' => 1,
                    'created_at' => '2022-09-25 15:29:01',
                    'updated_at' => '2022-09-25 15:29:01',
                    'server_side' => 0,
                    'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController',
                    'policy_name' => NULL,
                    'details' => NULL,
                ),
                3 => 
                array (
                    'id' => 4,
                    'name' => 'categories',
                    'slug' => 'categories',
                    'display_name_singular' => 'Category',
                    'display_name_plural' => 'Categories',
                    'icon' => 'voyager-categories',
                    'model_name' => 'TCG\\Voyager\\Models\\Category',
                    'description' => '',
                    'generate_permissions' => 1,
                    'created_at' => '2022-09-25 15:29:02',
                    'updated_at' => '2022-09-25 15:29:02',
                    'server_side' => 0,
                    'controller' => '',
                    'policy_name' => NULL,
                    'details' => NULL,
                ),
                4 => 
                array (
                    'id' => 5,
                    'name' => 'posts',
                    'slug' => 'posts',
                    'display_name_singular' => 'Post',
                    'display_name_plural' => 'Posts',
                    'icon' => 'voyager-news',
                    'model_name' => 'TCG\\Voyager\\Models\\Post',
                    'description' => '',
                    'generate_permissions' => 1,
                    'created_at' => '2022-09-25 15:29:02',
                    'updated_at' => '2022-09-25 15:29:02',
                    'server_side' => 0,
                    'controller' => '',
                    'policy_name' => 'TCG\\Voyager\\Policies\\PostPolicy',
                    'details' => NULL,
                ),
                5 => 
                array (
                    'id' => 6,
                    'name' => 'pages',
                    'slug' => 'pages',
                    'display_name_singular' => 'Page',
                    'display_name_plural' => 'Pages',
                    'icon' => 'voyager-file-text',
                    'model_name' => 'TCG\\Voyager\\Models\\Page',
                    'description' => '',
                    'generate_permissions' => 1,
                    'created_at' => '2022-09-25 15:29:02',
                    'updated_at' => '2022-09-25 15:29:02',
                    'server_side' => 0,
                    'controller' => '',
                    'policy_name' => NULL,
                    'details' => NULL,
                ),
            ));
       } catch(Exception $e) {
         throw new Exception('Exception occur ' . $e);

         \DB::rollBack();
       }

       \DB::commit();
    }
}
