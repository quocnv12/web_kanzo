<?php

use Illuminate\Database\Seeder;

class agency extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('agency')->delete();
        DB::table('agency')->insert([
            ['id'=>1,'name'=>'Cửa hàng a','address'=>'Số 5 Cầy Giấy','district'=>'Cầy Giấy','city'=>'Hà nội'],
            ['id'=>2,'name'=>'Cửa hàng b','address'=>'Số 160 Tây Hồ','district'=>'Tây Hồ','city'=>'Hà nội'],
            ['id'=>3,'name'=>'Cửa hàng c','address'=>'Số 62 Hoàn Kiếm','district'=>'Hoàn Kiếm','city'=>'Hà nội'],
            ['id'=>4,'name'=>'Cửa hàng c','address'=>'Số 247 Thanh Xuân','district'=>'Thanh Xuân','city'=>'Hà nội'],
            ['id'=>5,'name'=>'Cửa hàng c','address'=>'Số 91 Ba Đình','district'=>'Ba Đình','city'=>'Hà nội'],
            ['id'=>6,'name'=>'Cửa hàng c','address'=>'Số 2  Đống Đa','district'=>'Đống Đa','city'=>'Hà nội'],
            ['id'=>7,'name'=>'Cửa hàng c','address'=>'Số 247 Khương Trung','district'=>'Thanh Xuân','city'=>'Hà nội'],
            ['id'=>8,'name'=>'Cửa hàng c','address'=>'Số 62 Hoàn Kiếm','district'=>'Hoàn Kiếm','city'=>'Hà nội'],
            
        ]);
    }
}
