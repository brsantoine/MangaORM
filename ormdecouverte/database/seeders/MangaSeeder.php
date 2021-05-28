<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MangaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Manga::factory(10)->create();
    }
}
