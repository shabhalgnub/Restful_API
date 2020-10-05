<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Tag::factory()->count(10)->create();
    }
}
