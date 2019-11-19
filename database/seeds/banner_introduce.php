<?php

use Illuminate\Database\Seeder;

class banner_introduce extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banner_introduce')->delete();
        DB::table('banner_introduce')->insert([
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
