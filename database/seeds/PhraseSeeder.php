<?php

use Illuminate\Database\Seeder;
use App\Phrase;

class PhraseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Phrase::class, 500)->create();
    }
}
