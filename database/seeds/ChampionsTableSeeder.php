<?php

use Illuminate\Database\Seeder;

class ChampionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Champion::create([
            'name' => 'Aatrox',
            'title' => 'the Darkin Blade',
            'description' => 'Once honored defenders of Shurima against the Void, Aatrox and his brethren would eventually become an even greater threat to Runeterra, and were defeated only by cunning mortal sorcery.',
            'image' => 'champImage/N5MTPubNTfxxQlbWjIh0mihcjbmdNrXYIIXGY0Rc.png',
            'role_id' => 7
        ]);

        \App\Champion::create([
            'name' => 'Ahri',
            'title' => 'the Nine-Tailed Fox',
            'description' => 'Unlike other foxes that roamed the woods of southern Ionia, Ahri had always felt a strange connection to the magical world around her; a connection that was somehow incomplete.',
            'image' => 'champImage/d43vI6tGbJUbtjhNNzegvHTK5HFdJrotMVXZqw5S.png',
            'role_id' => 3
        ]);
    }
}
