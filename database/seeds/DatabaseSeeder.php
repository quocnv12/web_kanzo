<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(admin::class);
        $this->call(introduce::class);
        $this->call(intro_general::class);
        $this->call(polycies::class);
        $this->call(contact::class);
    }
}
