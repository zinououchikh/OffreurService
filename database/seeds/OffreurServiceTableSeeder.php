<?php

use App\OffreurService;
use Illuminate\Database\Seeder;

class OffreurServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(OffreurService::class,50)->create();
    }
}
