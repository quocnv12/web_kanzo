<?php

use Illuminate\Database\Seeder;

class product extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->delete();
        DB::table('category')->insert([
	        [
	        	'name'=>'Bếp ga',
	        	'slug'=>str_slug('Bếp ga'),
	        	'active'=>1,
	        	'created_at'=>now(),
	        ],
	        [
	        	'name'=>'Bếp từ',
	        	'slug'=>str_slug('Bếp từ'),
	        	'active'=>1,
	        	'created_at'=>now(),
	        ],
	        [
	        	'name'=>'Hút mùi',
	        	'slug'=>str_slug('Hút mùi'),
	        	'active'=>1,
	        	'created_at'=>now(),
	        ],
	        [
	        	'name'=>'Ấm nước',
	        	'slug'=>str_slug('Ấm nước'),
	        	'active'=>1,
	        	'created_at'=>now(),
	        ],
	    ]);
        DB::table('product')->delete();
        DB::table('product')->insert([
	        [
	        	// STT 6
	        	'name'=>'KZ-ECO-6666-GAS Japan Technology',
	        	'slug'=>str_slug('KZ-ECO-6666-GAS Japan Technology'),
	        	'code_name'=>'KZ-ECO6666GA',
	        	'price'=>3900000,
	        	'sale_price'=>0,
	        	'image'=>'KZ-ECO6666GA.png',
	        	'content'=>'* Tính năng sản phẩm:
							-Mâm chia lửa bằng đồng
							-Chế độ tiết kiệm gas
							-Mặt kính cường lực, chịu nhiệt, dày 8mm
							-Cảm biến an toàn tự động khóa gas
							-Khay Inox 304, bát, pép chia lửa bằng đồng
							-Hệ thống đánh lửa I/C (pin)
							-Họng bếp đồng chống kết dính khi sử dụng
							* Thông số kỹ thuật:
							-Kích thước mặt kính : 750x430mm
							-Kích thước khoét đá: 650x350mm
							-Công suất : 3.0 KW + 3.0 KW',
	        	'id_category'=>1,
	        	'active'=>1,
	        	'new'=>1,
	        	'count_view'=>0,
	        	'created_at'=>now(),
	        ],
	        [// STT 5
	        	'name'=>'KZ-ECO-8888-GAS Italy Technology',
	        	'slug'=>str_slug('KZ-ECO-8888-GAS Italy Technology'),
	        	'code_name'=>'KZ-ECO8888GA',
	        	'price'=>5790000,
	        	'sale_price'=>0,
	        	'image'=>'KZ-ECO8888GA.png',
	        	'content'=>'* Tính năng sản phẩm:
							-Mâm chia lửa bằng đồng
							-Chế độ tiết kiệm gas
							-Mặt kính cường lực, chịu nhiệt, dày 8mm
							-Cảm biến an toàn tự động khóa gas
							-Khay Inox 304, bát, pép chia lửa bằng đồng
							-Hệ thống đánh lửa I/C (pin)
							-Họng bếp đồng chống kết dính khi sử dụng
							* Thông số kỹ thuật:
							-Kích thước mặt kính : 750x430mm
							-Kích thước khoét đá: 650x350mm
							-Công suất : 3.0 KW + 3.0 KW',
	        	'id_category'=>1,
	        	'active'=>1,
	        	'new'=>1,
	        	'count_view'=>0,
	        	'created_at'=>now(),
	        ],
	        [// STT 3
	        	'name'=>'KZ-666I (Bếp đôi 2 từ âm)',
	        	'slug'=>str_slug(' KZ-666I (Bếp đôi 2 từ âm)'),
	        	'code_name'=>'KZ-666I',
	        	'price'=>11400000,
	        	'sale_price'=>0,
	        	'image'=>'KZ-666IH.png',
	        	'content'=>'
							*/Tính năng sản phẩm và thông số kỹ thuật:
							Bếp  từ đôi âm cảm ứng
							Điện áp 220V / 50 HZ
							Kính chuyên dụng,  Kanger cường lực, mài vát 4 cạnh
							Kích thước mặt kính: 730 * 430 mm
							Kích thước khoét lỗ: 680 *390 mm
							IGBT Siemens (Đức), Công nghệ, chức năng Inverter tiết kiệm 30% điện năng tiêu thụ
							Khung bếp làm bằng thép mạ kẽm, mâm nhiệt đồng nguyên chất
							Công suất thực 2 bếp (4,000W): 2,000W + 2,000W
							Công suất Booster (4,800W): 2,400W + 2400W
							Cảm biến, cảm ứng và điều khiển trượt mượt mà 9 mức công suất + Booster
							Hẹn giờ độc lập cho vùng nấu thời gian (0-99 phút)
							*/Tính năng an toàn
							Cảnh báo gia nhiệt dư "H" vùng nấu Residual heat
							Tự động tắt bếp khi không có nồi
							Chức năng khóa an toàn bảo vệ  trẻ em
							Hệ thống bảo vệ an toàn quá nhiệt, quá áp, quá dòng',
	        	'id_category'=>1,
	        	'active'=>1,
	        	'new'=>1,
	        	'count_view'=>0,
	        	'created_at'=>now(),
	        ],
	        [// STT 4
	        	'name'=>'KZ-666IH (Bếp đôi  01 bếp từ + 01 bếp hồng ngoại)',
	        	'slug'=>str_slug('KZ-666IH (Bếp đôi  01 bếp từ + 01 bếp hồng ngoại)'),
	        	'code_name'=>'KZ-666IH',
	        	'price'=>11400000,
	        	'sale_price'=>0,
	        	'image'=>'KZ-666IH.png',
	        	'content'=>'
							*/Tính năng sản phẩm và thông số kỹ thuật:
							Bếp  01 từ + 01 hồng ngoại cảm ứng
							Điện áp 220V / 50 HZ
							Kính chuyên dụng,  Kanger cường lực, mài vát 4 cạnh
							Kích thước mặt kính: 730 * 430 mm
							Kích thước khoét lỗ: 680 *390 mm
							IGBT Siemens (Đức), Công nghệ, chức năng Inverter tiết kiệm 30% điện năng tiêu thụ
							Khung bếp làm bằng thép mạ kẽm, mâm nhiệt đồng nguyên chất
							Công suất thực 2 bếp (4,000W): 2,000W + 2,000W
							Công suất Booster (4,800W): 2,400W + 2400W
							Cảm biến, cảm ứng và điều khiển trượt mượt mà 9 mức công suất + Booster
							Hẹn giờ độc lập cho vùng nấu thời gian (0-99 phút)
							*/Tính năng an toàn
							Cảnh báo gia nhiệt dư "H" vùng nấu Residual heat
							Tự động tắt bếp khi không có nồi
							Chức năng khóa an toàn bảo vệ  trẻ em
							Hệ thống bảo vệ an toàn quá nhiệt, quá áp, quá dòng',
	        	'id_category'=>2,
	        	'active'=>1,
	        	'new'=>1,
	        	'count_view'=>0,
	        	'created_at'=>now(),
	        ],
	        [// STT 2
	        	'name'=>'KZ-HQ888I (Bếp đôi 2 từ cao cấp)',
	        	'slug'=>str_slug('KZ-HQ888I (Bếp đôi 2 từ cao cấp)'),
	        	'code_name'=>'KZ-HQ888I',
	        	'price'=>13500000,
	        	'sale_price'=>0,
	        	'image'=>'KZ-HQ888I.png',
	        	'content'=>'
							*/Tính năng sản phẩm và thông số kỹ thuật:
							Bếp đôi 02 từ cảm ứng 
							Điện áp 220V / 50HZ
							Kính chuyên dụng,  Ceran cường lực, mài vát 4 mặt đẹp sang trọng
							Kích thước mặt kính: 750 * 450 mm
							Kích thước khoét lỗ: 680 *390 mm
							IGBT Siemens (Đức), Công nghệ, chức năng Inverter tiết kiệm 35% điện năng tiêu thụ
							Khung bếp làm bằng Inox 304, mâm nhiệt đồng nguyên chất
							Công suất thực 2 bếp (4,000W): 2,000W + 2,000W
							Công suất Booster (4,800W): 2,400W + 2400W
							Cảm biến, cảm ứng và điều khiển trượt mượt mà 9 mức công suất + Booster
							Hẹn giờ độc lập cho vùng nấu thời gian (0-99 phút)
							*/Tính năng an toàn
							Cảnh báo gia nhiệt dư "H" vùng nấu Residual heat
							Tự động tắt bếp khi không có nồi
							Chức năng khóa an toàn bảo vệ  trẻ em
							Hệ thống bảo vệ an toàn quá nhiệt, quá áp, quá dòng',
	        	'id_category'=>2,
	        	'active'=>1,
	        	'new'=>1,
	        	'count_view'=>0,
	        	'created_at'=>now(),
	        ],
	        [// STT 1
	        	'name'=>'KZ-HQ999I (Bếp Nấu từ cao cấp)',
	        	'slug'=>str_slug('KZ-HQ999I (Bếp Ba từ  siêu cao cấp)'),
	        	'code_name'=>'KZ-HQ999I',
	        	'price'=>19500000,
	        	'sale_price'=>0,
	        	'image'=>'KZ-HQ999I.png',
	        	'content'=>'*/Tính năng sản phẩm và thông số kỹ thuật:
							Bếp 03 từ cảm ứng 
							Điện áp 220V / 50HZ
							Kính chuyên dụng,  Ceran cường lực, mài vát 4 mặt đẹp sang trọng
							Kích thước mặt kính: 620 * 520 mm
							Kích thước khoét lỗ: 560 * 490 mm
							IGBT Siemens (Đức), Công nghệ, chức năng Inverter tiết kiệm 35% điện năng tiêu thụ
							Khung bếp làm bằng Inox 304, mâm nhiệt đồng nguyên chất
							Công suất thực 3 bếp (5,900W): 1600 + 1800 + 2500W
							Công suất Booster (6,600W): 1800 + 2000 + 2800W
							Cảm biến, cảm ứng và điều khiển trượt mượt mà 9 mức công suất + Booster
							Hẹn giờ độc lập cho vùng nấu thời gian (0-99 phút)
							*/Tính năng an toàn
							Cảnh báo gia nhiệt dư "H" vùng nấu Residual heat
							Tự động tắt bếp khi không có nồi
							Chức năng khóa an toàn bảo vệ  trẻ em
							Hệ thống bảo vệ an toàn quá nhiệt, quá áp, quá dòng',
	        	'id_category'=>2,
	        	'active'=>1,
	        	'new'=>1,
	        	'count_view'=>0,
	        	'created_at'=>now(),
	        ],
	        [// STT 8
	        	'name'=>'KZ-70HD1 (Hút mùi kính cong 700mm)',
	        	'slug'=>str_slug('KZ-70HD1 (Hút mùi kính cong 700mm)'),
	        	'code_name'=>'KZ-70HD1',
	        	'price'=>6690000,
	        	'sale_price'=>0,
	        	'image'=>'KZ-70HD1.png',
	        	'content'=>'*/Tính năng sản phẩm:
							-Dòng sản phẩm hút mùi kính cong, cường lực, kiểu dang treo áp tường
							-Phím điều khiển cơ, 3 cấp độ
							-Lưới lọc bằng thép không gỉ cao cấp, khỏe, đẹp siêu bền, 2 lưới lọc than hoạt tính khử mùi hiệu quả
							-Khay  hứng mỡ bằng nhựa cao cấp, dễ dang thoa lắp khi vệ sinh 
							-máy sử dụng động cơ turbin đôi
							-Hệ thống đèn LED 2*2W ánh sáng trắng
							-Máy hút mạnh, êm ái
							*/ Thông số kỹ thuật:
							-Kích thước sản phẩm: 700x480x545mm
							-Kích thước ống thoát: 160mm, dài 1500mm
							-Công suất hút từ 850m3 đến 1,250m3/H
							-Siêu tiết kiệm với động cơ 180W',
	        	'id_category'=>3,
	        	'active'=>1,
	        	'new'=>1,
	        	'count_view'=>0,
	        	'created_at'=>now(),
	        ],
	        [// STT 7 
	        	'name'=>'KZ-90HD1 (Hút mùi kính cong 900mm)',
	        	'slug'=>str_slug('KZ-90HD1 (Hút mùi kính cong 900mm)'),
	        	'code_name'=>'KZ-90HD1',
	        	'price'=>7170000,
	        	'sale_price'=>0,
	        	'image'=>'KZ-70HD1.png',
	        	'content'=>'*/Tính năng sản phẩm:
							-Dòng sản phẩm hút mùi kính cong, cường lực, kiểu dang treo áp tường
							-Phím điều khiển cơ, 3 cấp độ
							-Lưới lọc bằng thép không gỉ cao cấp, khỏe, đẹp siêu bền, 2 lưới lọc than hoạt tính khử mùi hiệu quả
							-Khay  hứng mỡ bằng nhựa cao cấp, dễ dang thoa lắp khi vệ sinh 
							-máy sử dụng động cơ turbin đôi
							-Hệ thống đèn LED 2*2W ánh sáng trắng
							-Máy hút mạnh, êm ái
							*/ Thông số kỹ thuật:
							-Kích thước sản phẩm: 900x480x545mm
							-Kích thước ống thoát: 160mm, dài 1500mm
							-Công suất hút từ 850m3 đến 1,250m3/H
							-Siêu tiết kiệm với động cơ 180W',
	        	'id_category'=>3,
	        	'active'=>1,
	        	'new'=>1,
	        	'count_view'=>0,
	        	'created_at'=>now(),
	        ],
	        [// STT 9 
	        	'name'=>'KZ-G88 (Ấm đun nước KANZO còi báo Luxury)',
	        	'slug'=>str_slug('KZ-G88 (Ấm đun nước KANZO còi báo Luxury)'),
	        	'code_name'=>'KZ-G88',
	        	'price'=>1335000,
	        	'sale_price'=>0,
	        	'image'=>'KZ-G88.png',
	        	'content'=>'*/Tính năng sản phẩm và công dụng:
							-Ấm đun nước còi báo Luxury 3.0L, còi báo nước sôi
							-Thể tích đun tối đa 3.0 lít
							-Chất liệu Inox cao cấp hàng đầu, bắt từ 18-10 công nghệ Đức
							-Sử dụng được nhiều loại bếp: Từ, Hồng ngoại, Gas, Điện
							-Kiểu dang đẹp, sang trọng
							-Tiện nghi cho sử dụng nước đun sôi để nguội, phục vụ nhu cầu sinh hoạt',
	        	'id_category'=>4,
	        	'active'=>1,
	        	'new'=>1,
	        	'count_view'=>0,
	        	'created_at'=>now(),
	        ],
	        [// STT 10 
	        	'name'=>'KZ-G68 (Ấm đun nước KANZO còi báo Luxury)',
	        	'slug'=>str_slug('KZ-G68 (Ấm đun nước KANZO còi báo Luxury)'),
	        	'code_name'=>'KZ-G68',
	        	'price'=>1335000,
	        	'sale_price'=>0,
	        	'image'=>'KZ-G68.png',
	        	'content'=>'*/Tính năng sản phẩm và công dụng:
							-Ấm đun nước còi báo Luxury 3.0L, còi báo nước sôi
							-Thể tích đun tối đa 3.0 lít
							-Chất liệu Inox cao cấp hàng đầu, bắt từ 18-10 công nghệ Đức
							-Sử dụng được nhiều loại bếp: Từ, Hồng ngoại, Gas, Điện
							-Kiểu dang đẹp, sang trọng
							-Tiện nghi cho sử dụng nước đun sôi để nguội, phục vụ nhu cầu sinh hoạt',
	        	'id_category'=>4,
	        	'active'=>1,
	        	'new'=>1,
	        	'count_view'=>0,
	        	'created_at'=>now(),
	        ],
	        [// STT 11
	        	'name'=>' KZ-G58 (Ấm đun nước KANZO còi báo Luxury)',
	        	'slug'=>str_slug(' KZ-G58 (Ấm đun nước KANZO còi báo Luxury)'),
	        	'code_name'=>'KZ-G58',
	        	'price'=>1335000,
	        	'sale_price'=>0,
	        	'image'=>'KZ-G58.png',
	        	'content'=>'*/Tính năng sản phẩm và công dụng:
							-Ấm đun nước còi báo Luxury 3.0L, còi báo nước sôi
							-Thể tích đun tối đa 3.0 lít
							-Chất liệu Inox cao cấp hàng đầu, bắt từ 18-10 công nghệ Đức
							-Sử dụng được nhiều loại bếp: Từ, Hồng ngoại, Gas, Điện
							-Kiểu dang đẹp, sang trọng
							-Tiện nghi cho sử dụng nước đun sôi để nguội, phục vụ nhu cầu sinh hoạt',
	        	'id_category'=>4,
	        	'active'=>1,
	        	'new'=>1,
	        	'count_view'=>0,
	        	'created_at'=>now(),
	        ],
	    ]);
    }
}
