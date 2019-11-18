<?php

use Illuminate\Database\Seeder;

class sent_us extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sent_us')->delete();
        DB::table('sent_us')->insert([
        	[
	        	'id'=>1,
	        	'name'=>'Nguyễn Văn A',
	        	'phone'=>'0988042295',
	        	'email'=>'nguyenvana@gmail.com',
	        	'address'=>'Cầu Giấy,Hà Nội',
	        	'content'=>'Mua máy hút mùi',
	        	'status'=>'1',
	        ],
	        [
	        	'id'=>2,
	        	'name'=>'Nguyễn Văn B',
	        	'phone'=>'0988041195',
	        	'email'=>'nguyenvanb@gmail.com',
	        	'address'=>'Cầu Giấy,Hà Nội',
	        	'content'=>'Mua máy hút mùi',
	        	'status'=>'0',
	        ],
	        [
	        	'id'=>3,
	        	'name'=>'Nguyễn Văn C',
	        	'phone'=>'0988041195',
	        	'email'=>'nguyenvanc@gmail.com',
	        	'address'=>'Cầu Giấy,Hà Nội',
	        	'content'=>'Mua bếp ga âm',
	        	'status'=>'1',
	        ],
	        
        ]);
    }
}
