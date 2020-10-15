<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersAdmin::class);
        $this->call(ElectionSeeder::class);
       // $this->call(VoterTableSeeder::class);
    }
}
