<?php

use App\Publisher;
use Illuminate\Database\Seeder;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Publisher::create(['name' => 'أكاديمية حسوب']);
        Publisher::create(['name' => 'أكاديمية علاء']);
    }
}
