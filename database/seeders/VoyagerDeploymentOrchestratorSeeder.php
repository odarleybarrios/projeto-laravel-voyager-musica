<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Traits\Seedable;

class VoyagerDeploymentOrchestratorSeeder extends Seeder
{
    use Seedable;

    protected $seedersPath = '';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            Data_rowsTableSeeder::class,
            Data_typesTableSeeder::class,
            Menu_itemsTableSeeder::class,
            Permission_roleTableSeeder::class,
        ]);
    }
}
