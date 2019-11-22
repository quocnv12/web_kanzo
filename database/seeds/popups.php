<?php

use Illuminate\Database\Seeder;

class popup extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('popup')->delete();
        DB::table('popup')->insert([
	        [
	        	'id'=>1,
	        	'title'=>'Kanzo bếp của mọi nhà',
	        	'image'=>'slide2.jpg',
                'active'=>'1',
	        ],
	        [
	        	'id'=>2,
	        	'title'=>'Kanzo khuyến mại',
	        	'image'=>'slide3.jpg',
                'active'=>'0',
	        ],
        ]);
    }
}
