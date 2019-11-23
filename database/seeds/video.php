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
	        	'title'=>'Ảnh của Kanzo',
	        	'image'=>'KALEA_27_Fuochi_resized-1-1400x655.jpg',
	        	'video'=>'',
	        ],
	        [
	        	'id'=>2,
	        	'title'=>'Video Kanzo',
	        	'image'=>'',
	        	'video'=>'The Siemens Gas Cooktops.mp4',
	        ],
	        [
	        	'id'=>3,
	        	'title'=>'Ảnh Kanzo',
	        	'image'=>'slide3.jpg',
	        	'video'=>'',
	        ],
	        [
	        	'id'=>4,
	        	'title'=>'Ảnh của Kanzo',
	        	'image'=>'',
	        	'video'=>'Xiaomi DCL01CM Precise Control Induction Cooker Review - very advanced.mp4',
	        ],
        ]);
    }
}
