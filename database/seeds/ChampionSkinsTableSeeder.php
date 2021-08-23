<?php

use Illuminate\Database\Seeder;

class ChampionSkinsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\ChampionSkin::create([
            'name' => 'Default',
            'image' => 'champSkin/cpyNfeTd7uhdUS9HfETIJ4kmqcTk2x5y6is0iFqD.jpeg',
            'champ_id' => 1
        ]);

        \App\ChampionSkin::create([
            'name' => 'Justicar Aatrox',
            'image' => 'champSkin/YOZvd7rm3lpa4yzepnRJOKuaqRCCR7vX42CjsZpz.jpeg',
            'champ_id' => 1
        ]);

        \App\ChampionSkin::create([
            'name' => 'Mecha Aatrox',
            'image' => 'champSkin/eFqVu7gRAItriz7MN9lSfkDMgkfJCKtO0CCcKbSe.jpeg',
            'champ_id' => 1
        ]);

        \App\ChampionSkin::create([
            'name' => 'Default',
            'image' => 'champSkin/utxwKYbdsgbYqi6KDlnEHaOlIlSQ1WT3hIriVia9.jpeg',
            'champ_id' => 2
        ]);

        \App\ChampionSkin::create([
            'name' => 'Dynasty Ahri',
            'image' => 'champSkin/Yn7LG6p4EIOYwVbmTnvGJ5DVjYI5xmPySi9bnDqF.jpeg',
            'champ_id' => 2
        ]);

        \App\ChampionSkin::create([
            'name' => 'K/DA Prestige Edition Ahri',
            'image' => 'champSkin/6PHXXl90TLfX6ULDivyXaWUYurPOQBWAz4RqIuns.jpeg',
            'champ_id' => 2
        ]);
    }
}
