<?php

use Illuminate\Database\Seeder;

class ChampionRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\ChampionRole::create([
            'name' => 'Assassin'
        ]);

        \App\ChampionRole::create([
            'name' => 'Marksman'
        ]);

        \App\ChampionRole::create([
            'name' => 'Mage'
        ]);

        \App\ChampionRole::create([
            'name' => 'Support'
        ]);

        \App\ChampionRole::create([
            'name' => 'Juggernaut'
        ]);

        \App\ChampionRole::create([
            'name' => 'Tank'
        ]);

        \App\ChampionRole::create([
            'name' => 'Bruiser'
        ]);

    }
}
