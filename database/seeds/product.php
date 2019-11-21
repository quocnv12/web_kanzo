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
				'id'=>1,
	        	'name'=>'Bếp ga',
	        	'slug'=>str_slug('Bếp ga'),
	        	'active'=>1,
	        	
	        ],
	        [
				'id'=>2,
	        	'name'=>'Bếp từ',
	        	'slug'=>str_slug('Bếp từ'),
	        	'active'=>1,
	        	
	        ],
	        [
				'id'=>3,
	        	'name'=>'Hút mùi',
	        	'slug'=>str_slug('Hút mùi'),
	        	'active'=>1,
	        	
	        ],
	        [
				'id'=>4,
	        	'name'=>'Ấm nước',
	        	'slug'=>str_slug('Ấm nước'),
	        	'active'=>1,
	        	
	        ],
	    ]);
        DB::table('product')->delete();
        DB::table('product')->insert([
	        [
				// STT 6
				'id'=>1,
				'code_name'=>'KZ-ECO6666GA',
	        	'name'=>'KZ-ECO-6666-GAS Japan Technology',
	        	'slug'=>str_slug('KZ-ECO-6666-GAS Japan Technology'),
	        	'price'=>3900000,
	        	'sale_price'=>0,
	        	'image'=>'KZ-ECO6666GA.png',
	        	'information'=>'* Tính năng sản phẩm:
							-Mâm chia lửa bằng đồng
							-Chế độ tiết kiệm gas
							-Mặt kính cường lực, chịu nhiệt, dày 8mm
							-Cảm biến an toàn tự động khóa gas
							-Khay Inox 304, bát, pép chia lửa bằng đồng
							-Hệ thống đánh lửa I/C (pin)
							-Họng bếp đồng chống kết dính khi sử dụng
						',
				'thongso'=>'-Kích thước mặt kính : 750x430mm
							-Kích thước khoét đá: 650x350mm
							-Công suất : 3.0 KW + 3.0 KW',
				'huongdan'=>'<p>Khi lắp đặt bếp gas, cần để bếp cách xa tường tối thiểu 15 cm, nếu phía trên bếp gas có kệ, thì nên đặt kệ cách xa bếp gas ít nhất 1 mét. Nên đặt bếp gas trên một kệ cố định, và kệ này cách mặt đất tối thiểu 1 mét. Việc này giúp cho không gian xung quanh bếp gas thông thoáng hơn, tránh cháy nổ.<br/>

							Bên cạnh đó, nên đặt bếp gas ở nơi thoáng mát, nhưng không nên đặt bếp gas ở nơi có gió lùa (cửa sổ, gần quạt máy…) để tránh lửa bị tắt, hao phí gas.<br/>
							
							Dây dẫn gas luôn được nối chắc chắn, khít, để tránh xì gas, nên để ý đường dây để tránh dây bị xoắn, làm gas không lên đều.</p>',
	        	'id_category'=>1,
	        	'active'=>0,
	        	'state'=>1,
	        	'count_view'=>0,
	        ],
			[// STT 5
				'id'=>2,
				'code_name'=>'KZ-ECO8888GA',
	        	'name'=>'KZ-ECO-8888-GAS Italy Technology',
	        	'slug'=>str_slug('KZ-ECO-8888-GAS Italy Technology'),
	        	'price'=>5790000,
	        	'sale_price'=>0,
	        	'image'=>'KZ-ECO8888GA.png',
				'information'=>'* Tính năng sản phẩm:
					-Mâm chia lửa bằng đồng
					-Chế độ tiết kiệm gas
					-Mặt kính cường lực, chịu nhiệt, dày 8mm
					-Cảm biến an toàn tự động khóa gas
					-Khay Inox 304, bát, pép chia lửa bằng đồng
					-Hệ thống đánh lửa I/C (pin)
					-Họng bếp đồng chống kết dính khi sử dụng
				',
		'thongso'=>'-Kích thước mặt kính : 750x430mm
					-Kích thước khoét đá: 650x350mm
					-Công suất : 3.0 KW + 3.0 KW',
		'huongdan'=>'<p>Khi lắp đặt bếp gas, cần để bếp cách xa tường tối thiểu 15 cm, nếu phía trên bếp gas có kệ, thì nên đặt kệ cách xa bếp gas ít nhất 1 mét. Nên đặt bếp gas trên một kệ cố định, và kệ này cách mặt đất tối thiểu 1 mét. Việc này giúp cho không gian xung quanh bếp gas thông thoáng hơn, tránh cháy nổ.<br/>

					Bên cạnh đó, nên đặt bếp gas ở nơi thoáng mát, nhưng không nên đặt bếp gas ở nơi có gió lùa (cửa sổ, gần quạt máy…) để tránh lửa bị tắt, hao phí gas.<br/>
					
					Dây dẫn gas luôn được nối chắc chắn, khít, để tránh xì gas, nên để ý đường dây để tránh dây bị xoắn, làm gas không lên đều.</p>',
	        	'id_category'=>1,
	        	'active'=>0,
	        	'state'=>1,
	        	'count_view'=>0,
	        	
	        ],
			[// STT 3
				'id'=>3,
				'code_name'=>'KZ-666I',
	        	'name'=>'KZ-666I (Bếp đôi 2 từ âm)',
	        	'slug'=>str_slug(' KZ-666I (Bếp đôi 2 từ âm)'),
	        	'price'=>11400000,
	        	'sale_price'=>0,
	        	'image'=>'KZ-666IH.png',
				'information'=>'* Tính năng sản phẩm:
					-Mâm chia lửa bằng đồng
					-Chế độ tiết kiệm gas
					-Mặt kính cường lực, chịu nhiệt, dày 8mm
					-Cảm biến an toàn tự động khóa gas
					-Khay Inox 304, bát, pép chia lửa bằng đồng
					-Hệ thống đánh lửa I/C (pin)
					-Họng bếp đồng chống kết dính khi sử dụng
				',
		'thongso'=>'-Kích thước mặt kính : 750x430mm
					-Kích thước khoét đá: 650x350mm
					-Công suất : 3.0 KW + 3.0 KW',
		'huongdan'=>'<p>Khi lắp đặt bếp gas, cần để bếp cách xa tường tối thiểu 15 cm, nếu phía trên bếp gas có kệ, thì nên đặt kệ cách xa bếp gas ít nhất 1 mét. Nên đặt bếp gas trên một kệ cố định, và kệ này cách mặt đất tối thiểu 1 mét. Việc này giúp cho không gian xung quanh bếp gas thông thoáng hơn, tránh cháy nổ.<br/>

					Bên cạnh đó, nên đặt bếp gas ở nơi thoáng mát, nhưng không nên đặt bếp gas ở nơi có gió lùa (cửa sổ, gần quạt máy…) để tránh lửa bị tắt, hao phí gas.<br/>
					
					Dây dẫn gas luôn được nối chắc chắn, khít, để tránh xì gas, nên để ý đường dây để tránh dây bị xoắn, làm gas không lên đều.</p>',
	        	'id_category'=>1,
	        	'active'=>0,
	        	'state'=>1,
	        	'count_view'=>0,
	        	
	        ],
			[// STT 4
				'id'=>4,
				'code_name'=>'KZ-666IH',
	        	'name'=>'KZ-666IH (Bếp đôi  01 bếp từ + 01 bếp hồng ngoại)',
	        	'slug'=>str_slug('KZ-666IH (Bếp đôi  01 bếp từ + 01 bếp hồng ngoại)'),
	        	
	        	'price'=>11400000,
	        	'sale_price'=>0,
	        	'image'=>'KZ-666IH.png',
				'information'=>'* Tính năng sản phẩm:
					-Mâm chia lửa bằng đồng
					-Chế độ tiết kiệm gas
					-Mặt kính cường lực, chịu nhiệt, dày 8mm
					-Cảm biến an toàn tự động khóa gas
					-Khay Inox 304, bát, pép chia lửa bằng đồng
					-Hệ thống đánh lửa I/C (pin)
					-Họng bếp đồng chống kết dính khi sử dụng
				',
		'thongso'=>'-Kích thước mặt kính : 750x430mm
					-Kích thước khoét đá: 650x350mm
					-Công suất : 3.0 KW + 3.0 KW',
		'huongdan'=>'<p>Khi lắp đặt bếp gas, cần để bếp cách xa tường tối thiểu 15 cm, nếu phía trên bếp gas có kệ, thì nên đặt kệ cách xa bếp gas ít nhất 1 mét. Nên đặt bếp gas trên một kệ cố định, và kệ này cách mặt đất tối thiểu 1 mét. Việc này giúp cho không gian xung quanh bếp gas thông thoáng hơn, tránh cháy nổ.<br/>

					Bên cạnh đó, nên đặt bếp gas ở nơi thoáng mát, nhưng không nên đặt bếp gas ở nơi có gió lùa (cửa sổ, gần quạt máy…) để tránh lửa bị tắt, hao phí gas.<br/>
					
					Dây dẫn gas luôn được nối chắc chắn, khít, để tránh xì gas, nên để ý đường dây để tránh dây bị xoắn, làm gas không lên đều.</p>',
	        	'id_category'=>2,
	        	'active'=>1,
	        	'state'=>1,
	        	'count_view'=>0,
	        
	        ],
			[// STT 2
				'id'=>5,
				'code_name'=>'KZ-HQ888I',
	        	'name'=>'KZ-HQ888I (Bếp đôi 2 từ cao cấp)',
	        	'slug'=>str_slug('KZ-HQ888I (Bếp đôi 2 từ cao cấp)'),
	        	
	        	'price'=>13500000,
	        	'sale_price'=>0,
	        	'image'=>'KZ-HQ888I.png',
				'information'=>'* Tính năng sản phẩm:
					-Mâm chia lửa bằng đồng
					-Chế độ tiết kiệm gas
					-Mặt kính cường lực, chịu nhiệt, dày 8mm
					-Cảm biến an toàn tự động khóa gas
					-Khay Inox 304, bát, pép chia lửa bằng đồng
					-Hệ thống đánh lửa I/C (pin)
					-Họng bếp đồng chống kết dính khi sử dụng
				',
		'thongso'=>'-Kích thước mặt kính : 750x430mm
					-Kích thước khoét đá: 650x350mm
					-Công suất : 3.0 KW + 3.0 KW',
		'huongdan'=>'<p>Khi lắp đặt bếp gas, cần để bếp cách xa tường tối thiểu 15 cm, nếu phía trên bếp gas có kệ, thì nên đặt kệ cách xa bếp gas ít nhất 1 mét. Nên đặt bếp gas trên một kệ cố định, và kệ này cách mặt đất tối thiểu 1 mét. Việc này giúp cho không gian xung quanh bếp gas thông thoáng hơn, tránh cháy nổ.<br/>

					Bên cạnh đó, nên đặt bếp gas ở nơi thoáng mát, nhưng không nên đặt bếp gas ở nơi có gió lùa (cửa sổ, gần quạt máy…) để tránh lửa bị tắt, hao phí gas.<br/>
					
					Dây dẫn gas luôn được nối chắc chắn, khít, để tránh xì gas, nên để ý đường dây để tránh dây bị xoắn, làm gas không lên đều.</p>',
	        	'id_category'=>2,
	        	'active'=>0,
	        	'state'=>1,
	        	'count_view'=>0,
	        	
	        ],
	        [// STT 1
				'id'=>6,
				'code_name'=>'KZ-HQ999I',
				'name'=>'KZ-HQ999I (Bếp Nấu từ cao cấp)',
	        	'slug'=>str_slug('KZ-HQ999I (Bếp Ba từ  siêu cao cấp)'),
	        	
	        	'price'=>19500000,
	        	'sale_price'=>0,
	        	'image'=>'KZ-HQ999I.png',
				'information'=>'* Tính năng sản phẩm:
					-Mâm chia lửa bằng đồng
					-Chế độ tiết kiệm gas
					-Mặt kính cường lực, chịu nhiệt, dày 8mm
					-Cảm biến an toàn tự động khóa gas
					-Khay Inox 304, bát, pép chia lửa bằng đồng
					-Hệ thống đánh lửa I/C (pin)
					-Họng bếp đồng chống kết dính khi sử dụng
				',
		'thongso'=>'-Kích thước mặt kính : 750x430mm
					-Kích thước khoét đá: 650x350mm
					-Công suất : 3.0 KW + 3.0 KW',
		'huongdan'=>'<p>Khi lắp đặt bếp gas, cần để bếp cách xa tường tối thiểu 15 cm, nếu phía trên bếp gas có kệ, thì nên đặt kệ cách xa bếp gas ít nhất 1 mét. Nên đặt bếp gas trên một kệ cố định, và kệ này cách mặt đất tối thiểu 1 mét. Việc này giúp cho không gian xung quanh bếp gas thông thoáng hơn, tránh cháy nổ.<br/>

					Bên cạnh đó, nên đặt bếp gas ở nơi thoáng mát, nhưng không nên đặt bếp gas ở nơi có gió lùa (cửa sổ, gần quạt máy…) để tránh lửa bị tắt, hao phí gas.<br/>
					
					Dây dẫn gas luôn được nối chắc chắn, khít, để tránh xì gas, nên để ý đường dây để tránh dây bị xoắn, làm gas không lên đều.</p>',
	        	'id_category'=>2,
	        	'active'=>1,
	        	'state'=>1,
	        	'count_view'=>0,
	        
	        ],
			[// STT 8
				'id'=>7,
				'code_name'=>'KZ-70HD1',
	        	'name'=>'KZ-70HD1 (Hút mùi kính cong 700mm)',
	        	'slug'=>str_slug('KZ-70HD1 (Hút mùi kính cong 700mm)'),
	        	
	        	'price'=>6690000,
	        	'sale_price'=>0,
	        	'image'=>'KZ-70HD1.png',
				'information'=>'* Tính năng sản phẩm:
					-Mâm chia lửa bằng đồng
					-Chế độ tiết kiệm gas
					-Mặt kính cường lực, chịu nhiệt, dày 8mm
					-Cảm biến an toàn tự động khóa gas
					-Khay Inox 304, bát, pép chia lửa bằng đồng
					-Hệ thống đánh lửa I/C (pin)
					-Họng bếp đồng chống kết dính khi sử dụng
				',
		'thongso'=>'-Kích thước mặt kính : 750x430mm
					-Kích thước khoét đá: 650x350mm
					-Công suất : 3.0 KW + 3.0 KW',
		'huongdan'=>'<p>Khi lắp đặt bếp gas, cần để bếp cách xa tường tối thiểu 15 cm, nếu phía trên bếp gas có kệ, thì nên đặt kệ cách xa bếp gas ít nhất 1 mét. Nên đặt bếp gas trên một kệ cố định, và kệ này cách mặt đất tối thiểu 1 mét. Việc này giúp cho không gian xung quanh bếp gas thông thoáng hơn, tránh cháy nổ.<br/>

					Bên cạnh đó, nên đặt bếp gas ở nơi thoáng mát, nhưng không nên đặt bếp gas ở nơi có gió lùa (cửa sổ, gần quạt máy…) để tránh lửa bị tắt, hao phí gas.<br/>
					
					Dây dẫn gas luôn được nối chắc chắn, khít, để tránh xì gas, nên để ý đường dây để tránh dây bị xoắn, làm gas không lên đều.</p>',
	        	'id_category'=>3,
	        	'active'=>1,
	        	'state'=>1,
	        	'count_view'=>0,
	        
	        ],
			[// STT 7 
				'id'=>8,
				'code_name'=>'KZ-90HD1',
	        	'name'=>'KZ-90HD1 (Hút mùi kính cong 900mm)',
	        	'slug'=>str_slug('KZ-90HD1 (Hút mùi kính cong 900mm)'),
	        	
	        	'price'=>7170000,
	        	'sale_price'=>0,
	        	'image'=>'KZ-70HD1.png',
				'information'=>'* Tính năng sản phẩm:
					-Mâm chia lửa bằng đồng
					-Chế độ tiết kiệm gas
					-Mặt kính cường lực, chịu nhiệt, dày 8mm
					-Cảm biến an toàn tự động khóa gas
					-Khay Inox 304, bát, pép chia lửa bằng đồng
					-Hệ thống đánh lửa I/C (pin)
					-Họng bếp đồng chống kết dính khi sử dụng
				',
		'thongso'=>'-Kích thước mặt kính : 750x430mm
					-Kích thước khoét đá: 650x350mm
					-Công suất : 3.0 KW + 3.0 KW',
		'huongdan'=>'<p>Khi lắp đặt bếp gas, cần để bếp cách xa tường tối thiểu 15 cm, nếu phía trên bếp gas có kệ, thì nên đặt kệ cách xa bếp gas ít nhất 1 mét. Nên đặt bếp gas trên một kệ cố định, và kệ này cách mặt đất tối thiểu 1 mét. Việc này giúp cho không gian xung quanh bếp gas thông thoáng hơn, tránh cháy nổ.<br/>

					Bên cạnh đó, nên đặt bếp gas ở nơi thoáng mát, nhưng không nên đặt bếp gas ở nơi có gió lùa (cửa sổ, gần quạt máy…) để tránh lửa bị tắt, hao phí gas.<br/>
					
					Dây dẫn gas luôn được nối chắc chắn, khít, để tránh xì gas, nên để ý đường dây để tránh dây bị xoắn, làm gas không lên đều.</p>',
	        	'id_category'=>3,
	        	'active'=>0,
	        	'state'=>1,
	        	'count_view'=>0,
	        
	        ],
			[// STT 9 
				'id'=>9,
				'code_name'=>'KZ-G88',
	        	'name'=>'KZ-G88 (Ấm đun nước KANZO còi báo Luxury)',
	        	'slug'=>str_slug('KZ-G88 (Ấm đun nước KANZO còi báo Luxury)'),
	        
	        	'price'=>1335000,
	        	'sale_price'=>0,
	        	'image'=>'KZ-G88.png',
				'information'=>'* Tính năng sản phẩm:
					-Mâm chia lửa bằng đồng
					-Chế độ tiết kiệm gas
					-Mặt kính cường lực, chịu nhiệt, dày 8mm
					-Cảm biến an toàn tự động khóa gas
					-Khay Inox 304, bát, pép chia lửa bằng đồng
					-Hệ thống đánh lửa I/C (pin)
					-Họng bếp đồng chống kết dính khi sử dụng
				',
		'thongso'=>'-Kích thước mặt kính : 750x430mm
					-Kích thước khoét đá: 650x350mm
					-Công suất : 3.0 KW + 3.0 KW',
		'huongdan'=>'<p>Khi lắp đặt bếp gas, cần để bếp cách xa tường tối thiểu 15 cm, nếu phía trên bếp gas có kệ, thì nên đặt kệ cách xa bếp gas ít nhất 1 mét. Nên đặt bếp gas trên một kệ cố định, và kệ này cách mặt đất tối thiểu 1 mét. Việc này giúp cho không gian xung quanh bếp gas thông thoáng hơn, tránh cháy nổ.<br/>

					Bên cạnh đó, nên đặt bếp gas ở nơi thoáng mát, nhưng không nên đặt bếp gas ở nơi có gió lùa (cửa sổ, gần quạt máy…) để tránh lửa bị tắt, hao phí gas.<br/>
					
					Dây dẫn gas luôn được nối chắc chắn, khít, để tránh xì gas, nên để ý đường dây để tránh dây bị xoắn, làm gas không lên đều.</p>',
	        	'id_category'=>4,
	        	'active'=>0,
	        	'state'=>1,
	        	'count_view'=>0,
	        
	        ],
			[// STT 10 
				'id'=>10,
				'code_name'=>'KZ-G68',
	        	'name'=>'KZ-G68 (Ấm đun nước KANZO còi báo Luxury)',
	        	'slug'=>str_slug('KZ-G68 (Ấm đun nước KANZO còi báo Luxury)'),
	        	
	        	'price'=>1335000,
	        	'sale_price'=>0,
	        	'image'=>'KZ-G68.png',
				'information'=>'* Tính năng sản phẩm:
					-Mâm chia lửa bằng đồng
					-Chế độ tiết kiệm gas
					-Mặt kính cường lực, chịu nhiệt, dày 8mm
					-Cảm biến an toàn tự động khóa gas
					-Khay Inox 304, bát, pép chia lửa bằng đồng
					-Hệ thống đánh lửa I/C (pin)
					-Họng bếp đồng chống kết dính khi sử dụng
				',
		'thongso'=>'-Kích thước mặt kính : 750x430mm
					-Kích thước khoét đá: 650x350mm
					-Công suất : 3.0 KW + 3.0 KW',
		'huongdan'=>'<p>Khi lắp đặt bếp gas, cần để bếp cách xa tường tối thiểu 15 cm, nếu phía trên bếp gas có kệ, thì nên đặt kệ cách xa bếp gas ít nhất 1 mét. Nên đặt bếp gas trên một kệ cố định, và kệ này cách mặt đất tối thiểu 1 mét. Việc này giúp cho không gian xung quanh bếp gas thông thoáng hơn, tránh cháy nổ.<br/>

					Bên cạnh đó, nên đặt bếp gas ở nơi thoáng mát, nhưng không nên đặt bếp gas ở nơi có gió lùa (cửa sổ, gần quạt máy…) để tránh lửa bị tắt, hao phí gas.<br/>
					
					Dây dẫn gas luôn được nối chắc chắn, khít, để tránh xì gas, nên để ý đường dây để tránh dây bị xoắn, làm gas không lên đều.</p>',
	        	'id_category'=>4,
	        	'active'=>1,
	        	'state'=>1,
	        	'count_view'=>0,
	        
	        ],
			[// STT 11
				'id'=>11,
				'code_name'=>'KZ-G58',
	        	'name'=>' KZ-G58 (Ấm đun nước KANZO còi báo Luxury)',
	        	'slug'=>str_slug(' KZ-G58 (Ấm đun nước KANZO còi báo Luxury)'),
	        	
	        	'price'=>1335000,
	        	'sale_price'=>0,
	        	'image'=>'KZ-G58.png',
				'information'=>'* Tính năng sản phẩm:
					-Mâm chia lửa bằng đồng
					-Chế độ tiết kiệm gas
					-Mặt kính cường lực, chịu nhiệt, dày 8mm
					-Cảm biến an toàn tự động khóa gas
					-Khay Inox 304, bát, pép chia lửa bằng đồng
					-Hệ thống đánh lửa I/C (pin)
					-Họng bếp đồng chống kết dính khi sử dụng
				',
		'thongso'=>'-Kích thước mặt kính : 750x430mm
					-Kích thước khoét đá: 650x350mm
					-Công suất : 3.0 KW + 3.0 KW',
		'huongdan'=>'<p>Khi lắp đặt bếp gas, cần để bếp cách xa tường tối thiểu 15 cm, nếu phía trên bếp gas có kệ, thì nên đặt kệ cách xa bếp gas ít nhất 1 mét. Nên đặt bếp gas trên một kệ cố định, và kệ này cách mặt đất tối thiểu 1 mét. Việc này giúp cho không gian xung quanh bếp gas thông thoáng hơn, tránh cháy nổ.<br/>

					Bên cạnh đó, nên đặt bếp gas ở nơi thoáng mát, nhưng không nên đặt bếp gas ở nơi có gió lùa (cửa sổ, gần quạt máy…) để tránh lửa bị tắt, hao phí gas.<br/>
					
					Dây dẫn gas luôn được nối chắc chắn, khít, để tránh xì gas, nên để ý đường dây để tránh dây bị xoắn, làm gas không lên đều.</p>',
	        	'id_category'=>4,
	        	'active'=>1,
	        	'state'=>1,
	        	'count_view'=>0,
	        	
	        ],
	    ]);
    }
}
