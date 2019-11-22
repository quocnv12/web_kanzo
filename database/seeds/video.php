<?php

use Illuminate\Database\Seeder;

class video extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('video')->delete();
        DB::table('video')->insert([
	        [
	        	'id'=>1,
	        	'image'=>'banner-introduce.jpg',
	        ],
	        [
	        	'id'=>2,
	        	'video'=>'The Siemens Gas Cooktops.mp4',
	        ],
	        [
	        	'id'=>3,
	        	'image'=>'banner-introduce.jpg',
	        ],
	        [
	        	'id'=>4,
	        	'video'=>'Xiaomi DCL01CM Precise Control Induction Cooker Review - very advanced.mp4',
	        ],
        ]);
    }
}
