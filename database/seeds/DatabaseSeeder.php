<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(ChampionRolesTableSeeder::class);
        $this->call(ChampionsTableSeeder::class);
        $this->call(ChampionSkillsTableSeeder::class);
        $this->call(ChampionSkinsTableSeeder::class);
    }
}
