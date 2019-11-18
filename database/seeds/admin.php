<?php

use Illuminate\Database\Seeder;

class admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        DB::table('users')->insert([
            ['id'=>1,'name'=>'Nguyễn văn A','email'=>'admin@gmail.com','password'=>bcrypt('123456'),'phone'=>'0909234190','level'=>'Quản trị viên','image'=>'avatar_small.jpg'],
            ['id'=>2,'name'=>'Nguyễn văn B','email'=>'editor@gmail.com','password'=>bcrypt('123456'),'phone'=>'0909234190','level'=>'Biên tập viên','image'=>'nguyenthiennhan.jpg'],
            ['id'=>3,'name'=>'Nguyễn văn C','email'=>'user@gmail.com','password'=>bcrypt('123456'),'phone'=>'0909234190','level'=>'Cộng tác viên','image'=>'nguyenthiennhan.jpg'],
        ]);
    }
}
