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
	        	'video'=>'',
	        ],
	        [
	        	'id'=>2,
	        	'image'=>'',
	        	'video'=>'The Siemens Gas Cooktops.mp4',
	        ],
	        [
	        	'id'=>3,
	        	'image'=>'banner-introduce.jpg',
	        	'video'=>'',
	        ],
	        [
	        	'id'=>4,
	        	'image'=>'',
	        	'video'=>'Xiaomi DCL01CM Precise Control Induction Cooker Review - very advanced.mp4',
	        ],
        ]);
    }
}
