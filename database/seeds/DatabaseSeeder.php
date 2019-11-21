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
        $this->call(product::class);
        $this->call(intro_general::class);
        $this->call(polycies::class);
        $this->call(contact::class);
        $this->call(sent_us::class);
        $this->call(news::class);
        $this->call(question::class);
        $this->call(banner_introduce::class);
        $this->call(agency::class);
        // $this->call(banner_polycies::class);
        // $this->call(popup::class);
    }
}
