<?php

use Illuminate\Database\Seeder;

class banner_polycies extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banner_polycies')->delete();
        DB::table('banner_polycies')->insert([
	        [
	        	'id'=>1,
	        	'image'=>'banner-introduce.jpg',
	        ],
	        [
	        	'id'=>2,
	        	'image'=>'banner-introduce.jpg',
	        ],
        ]);
    }
}
