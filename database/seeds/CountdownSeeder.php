<?php

use App\Countdown;
use Illuminate\Database\Seeder;

class CountdownSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Countdown::class, 10)->create();
    }
}
