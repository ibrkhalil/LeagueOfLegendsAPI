<?php

use Illuminate\Database\Seeder;

class ChampionSkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\ChampionSkill::create([
            'small_name' => 'AatroxQ',
            'name' => 'Dark Flight',
            'description' => 'Aatrox takes flight and slams down at a targeted location, dealing damage and knocking up enemies at the center of impact.',
            'champ_id' => 1,
            'image' => 'champSkills/lV4jVsts0MB3AR7ubkQ8Cz0VAaLGmUBH6Oo7lfAw.png'
        ]);

        \App\ChampionSkill::create([
            'small_name' => 'AatroxW',
            'name' => 'Blood Thirst / Blood Price',
            'description' => 'While toggled on Aatrox deals bonus damage every third subsequent attack at the expense of his own Health. While toggled off Aatrox restores Health every third subsequent attack.',
            'champ_id' => 1,
            'image' => 'champSkills/eWgbCd6sMo8tPiZgfRdJnb7d0KPLfPQu4T5Yc6JM.png'
        ]);

        \App\ChampionSkill::create([
            'small_name' => 'AatroxE',
            'name' => 'Blades of Torment',
            'description' => 'Aatrox unleashes the power of his blade, dealing damage to enemies hit and slowing them.',
            'champ_id' => 1,
            'image' => 'champSkills/5RuFnyQAmlDh25XiHoskYIJkOYrC7T9kmigXVYpN.png'
        ]);

        \App\ChampionSkill::create([
            'small_name' => 'AatroxR',
            'name' => 'Massacre',
            'description' => 'Aatrox draws in the blood of his foes, damaging all nearby enemy champions around him and gaining increased Attack Speed and bonus Attack Range for a short duration.',
            'champ_id' => 1,
            'image' => 'champSkills/7b1wCD5uBOUbBFaBEKHB2euC2h6pZKaOVrIK0RmY.png'
        ]);

        \App\ChampionSkill::create([
            'small_name' => 'AhriQ',
            'name' => 'Orb of Deception',
            'description' => 'Ahri sends out and pulls back her orb, dealing magic damage on the way out and true damage on the way back. Ahri gains movement speed that decays while her orb is traveling.',
            'champ_id' => 2,
            'image' => 'champSkills/r1aAkHeXLg3Q7jcZrsggP8BQTfn8hg7DWTcq4558.png'
        ]);

        \App\ChampionSkill::create([
            'small_name' => 'AhriW',
            'name' => 'Fox-Fire',
            'description' => 'Ahri releases three fox-fires, that lock onto and attack nearby enemies.',
            'champ_id' => 2,
            'image' => 'champSkills/y0ohggyh8mT0eFWaFYF9CySiGP0AY0CBY5fwGc2e.png'
        ]);

        \App\ChampionSkill::create([
            'small_name' => 'AhriE',
            'name' => 'Charm',
            'description' => 'Ahri blows a kiss that damages and charms an enemy it encounters, causing them to walk harmlessly towards her.',
            'champ_id' => 2,
            'image' => 'champSkills/5qehj3IeF0hrQ5MRUhjWXqbTQG2Lflae1ytKfSss.png'
        ]);

        \App\ChampionSkill::create([
            'small_name' => 'AhriR',
            'name' => 'Spirit Rush',
            'description' => 'Ahri dashes forward and fires essence bolts, damaging 3 nearby enemies (prioritizes Champions). Spirit Rush can be cast up to three times before going on cooldown.',
            'champ_id' => 2,
            'image' => 'champSkills/puzfVvKeRR98YyOvrPucjIBoAQFYIMuag5ORHbvY.png'
        ]);
    }
}
