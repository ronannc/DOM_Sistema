<?php

use Illuminate\Database\Seeder;

class AcconutsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    factory(App\Accounts::class, 10)->create();
    }
}
