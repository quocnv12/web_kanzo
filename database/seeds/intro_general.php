<?php

use Illuminate\Database\Seeder;

class intro_general extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('intro_general')->delete();
        DB::table('intro_general')->insert([
	       
	        	'id'=>1,
	        	'title'=>'Giới thiệu chung',
	        	'slug'=>'gioi-thieu-chung',
	        	'content'=>'Công ty TNHH Bếp ga KANZO thành lập năm 2015 trụ sở đặt tại Số 8 Lĩnh Nam, Tổ 38, Phường Mai Động, Quận Hoàng Mai, Thành phố Hà Nội. Văn phòng giao dịch: Số 69 Trung Kính, Phường Yên Hòa, Quận Cầu Giấy, Thành phố Hà Nội.

					Công ty TNHH Bếp ga KANZO hoạt động theo phương châm “Tin cậy, chất lương và hiệu quả”, luôn đặt chữ tín lên hàng đầu, vì vậy chúng tôi luôn ý thức được rằng chất lượng và tiến độ của dự án là một phần quan trọng, chính vì lẽ đó ngoài năng lực về quản lý, nhân sự, nhân lực, kỹ thuật, trang thiết bị, vấn đề tài chính luôn được công ty chú trọng hàng đầu. Chúng tôi luôn có kế hoạch tài chính hàng năm, hàng quý, hàng tháng và từng dự án, từng công việc cụ thể. Vì vậy, Công ty luôn chủ động trong việc thanh quyết toán mua nguyên vật liệu, các khoảng chi phí cũng như lương nhân công,... nhằm đảm bảo chất lượng dự án luôn thông suốt, đúng tiến độ.

					Công ty TNHH Bếp ga KANZO mong muốn và sẵn sàng trở thành đối tác của các Chủ đầu , các Nhà quản lý, Doanh nghiệp và cá nhân khác, phần đấu vì sự nghiệp Công nghiệp hóa, hiện đại hóa đất nước.

					Rất hân hạnh được cộng tác với các Chủ đầu tư và Quý khách hàng!',
	        	'image'=>'1',
	    ]);
	        
    }
}
