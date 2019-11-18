<?php

use Illuminate\Database\Seeder;

class contact extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact')->delete();
        DB::table('contact')->insert([
	       
	        	'id'=>1,
	        	'address'=>'Số 8, Biệt thự 10, Khu đô thị Vân Canh, Huyện Hoài Đức, Tp.Hà Nội',
	        	'phone'=>'0243 233 3311',
	        	'fax'=>'0243 233 3311',
	        	'email'=>'kanzo@gmail.com',
	        	'fanpage'=>'kanzo@gmail.com',
	    ]);
    }
}
