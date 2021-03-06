<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
        $this->call(ResourcesTableSeeder::class);
        $this->call(ResourceBuildingsTableSeeder::class);
        $this->call(ArmyUnitsTableSeeder::class);
        $this->call(ArmyBuildingsTableSeeder::class);
        $this->call(CartelTypesTableSeeder::class);
    }
}
