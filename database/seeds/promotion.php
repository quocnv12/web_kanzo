<?php

use Illuminate\Database\Seeder;

class promotion extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('promotion1')->delete();
        DB::table('promotion1')->insert([
        ['id'=>1,
            'name'=>'Sắm Tết vui xuân – Rộn ràng khuyến mại',
            'slug'=>str_slug('Sắm Tết vui xuân – Rộn ràng khuyến mại'),
            'image'=>'1674_sam_tet_01.jpg',
            'summary'=>'Thay lời tri ân gửi tới quý khách hàng, nhân dịp năm mới 2019, trang thương mại điện tử sanhangtot triển khai nhiều chương trình khuyến mại lớn, giảm giá sốc.',
            
            'content'=>'<p>Các chương trình khuyến mại vô cùng hấp dẫn của website trong tháng 4 năm 2019 này hứa hẹn sẽ mang tới cho quý khách hàng những giây phút mua sắm thật sự thoải mái, cùng cơ hội sở hữu những sản phẩm cao cấp&nbsp;<strong><a href="" rel="nofollow" target="_blank" name="Kanzo&nbsp;GROUP">Kanzo</a>&nbsp;</strong>với mức giá “bình dân” và được tặng kèm nhiều quà tặng giá trị.</p>

            <p style="text-align:center"><img alt="Giải nhiệt ngày hè với nhiều khuyến mại HOT, siêu hấp dẫn" src="/pic/news/images/giai-nhiet-ngay-he-voi-nhieu-khuyen-mai-hot-sieu-hap-dan.png"></p>
            
            <p style="text-align:center"><em>Tham khảo chi tiết các sản phẩm khuyến mại trong chương trình </em>“<a href="" rel="nofollow" target="_blank">Khuyến mãi Tưng bừng – Mừng đại lễ</a>”</p>
            
            <p>Từ ngày 01/04/2019 – 30/04/2019, website sanhangtot.com sẽ triển khai chương trình “Khuyến mãi Tưng bừng – Mừng đại lễ”với mức giảm giá sốc tới 40% và tặng thêm nhiều quà tặng hấp dẫn như đèn Compact SHE CFLST3-7W, đèn pin tay cầm Kanzo SHE4052 cỡ nhỏ ... Với mức giá dưới 300.000 đồng, quý khách hàng có thể mua được các sản phẩm thiết yếu trong gia đình như máy xay sinh tố Kanzo SHD5115, &nbsp;nồi cơm điện 1.8L Kanzo SHD8601, đèn bàn Kanzo SHE-SL-09B,&nbsp; đèn tích điện đa năng Kanzo SHE8040L, đèn pin xách tay Kanzo SHE8195…</p>
            
            <p style="text-align:center"><img alt="Giải nhiệt ngày hè với nhiều khuyến mại HOT, siêu hấp dẫn 1" src="/pic/news/images/giai-nhiet-ngay-he-voi-nhieu-khuyen-mai-hot-sieu-hap-dan(1).png"></p>
            
            <p style="text-align:center"><em>Tham khảo chi tiết các sản phẩm khuyến mại trong chương trình </em>“<a href="" rel="nofollow" target="_blank">Hội chợ Online – Mua 1 được 2</a> ”</p>
            
            <p>Bên cạnh đó, chương trình “Hội chợ Online – Mua 1 được 2 ” sẽ được triển khai trong tháng 4 (từ ngày 01/04/2019 – 30/04/2019) với hình thức khuyến mại hấp dẫn. Cụ thể, khi mua các sản phẩm đèn trong chương trình bên cạnh việc được mua với giá khuyến mại, quý khách hàng còn được tặng kèm thêm 1 sản phẩm giá trị. Cụ thể, nồi áp suất điện đa năng Kanzo SH1650 giảm giá từ 1.090.000 đồng xuống còn 790.000 đồng và được tặng kèm hộp đựng thực phẩm SHT11085, Máy lọc nước R.O 9 lõi Kanzo SHR8669B giảm từ 6.790.000 đồng xuống còn 4.590.000 đồng và được tặng kèm bộ 3 lõi lọc số 1,2,3…</p>
            
            <p style="text-align:center"><em>Tham khảo chi tiết các sản phẩm khuyến mại trong chương trình “<a href="" rel="nofollow" target="_blank">Thách thức mọi giới hạn</a>”</em></p>
            
            <p>Đặc biệt, từ ngày 02/04/2019 – 30/06/2019, chương trình khuyến mại hè 2019 “Thách thức mọi giới hạn” sẽ được triển khai trên toàn quốc với nhiều ưu đãi vô cùng hấp dẫn: 100% nhận quà giá trị, tặng thêm 1 năm bảo hành miễn phí và cơ hội đi Mỹ với tổng giá trị giải thưởng chuyến đi lên đến 400.000.000 triệu đồng khi nhắn tin kích hoạt bảo hành. Nhiều sản phẩm hè “hot” được triển khai trong chương trình khuyến mại lớn trong năm này như máy lọc nước R.O tích hợp nóng lạnh, cây nước nóng lạnh, máy làm mát không khí Kanzo SHD7724, SHD7735, SHD7795, SHD7745… Ngoài ra, mua càng sớm, cơ hội nhận được chuyến du lịch Mỹ càng cao khi chương trình áp dụng cách thức bảo lưu mã số nhắn tin kích hoạt bảo hành ở cả 5 lần quay trúng thưởng.</p>
            
            <p>Hãy mua sắm, sử dụng và cảm nhận những tiện ích từ các sản phẩm điện gia dụng, đồ gia dụng, thiết bị nhà bếp, cây nước nóng lạnh…&nbsp;mà thương hiệu Kanzo mang lại, để tận hưởng cuộc sống tốt đẹp hơn.</p><p>Các chương trình khuyến mại vô cùng hấp dẫn của website sanhangtot.com trong tháng 1 năm 2019 này hứa hẹn sẽ mang tới cho quý khách hàng những giây phút mua sắm thật sự thoải mái, cùng cơ hội sở hữu những sản phẩm cao cấp&nbsp;Kanzo&nbsp;với mức giá “bình dân” và được tặng kèm nhiều quà tặng giá trị.</p>

            <p style="text-align:center"><img alt="Sắm Tết vui xuân – Rộn ràng khuyến mại" src="/pic/news/images/sam-tet-vui-xuan-ron-rang-khuyen-mai.jpg"></p>
            
            <p>Từ ngày 01/01/2019 – 28/02/2019, website sanhangtot.com sẽ triển khai chương trình “<span style="color:#0000ff"><strong>Sắm Tết vui xuân – Rộn ràng quà tặng</strong></span>” với mức giảm giá sâu (47%) và tặng thêm nhiều quà tặng hấp dẫn như chảo trơn CT24, Hộp đựng thực phẩm SHT11001, SHT11085... Với mức giá giảm lên tới 47%, quý khách hàng có thể sở hữu được nhiều sản phẩm “hot” mùa lạnh với giá siêu rẻ như Bếp hồng ngoại cơ Kanzo SHD6001, SHD6003, sưởi điện 3 bóng Halogen Kanzo SHD7016, đèn sưởi nhà tắm Kanzo SHD3802…</p>
            
            <p>Bên cạnh đó, nắm bắt được xu hướng tìm mua bếp lẩu, bếp nướng của các gia đình cho những buổi tụ họp đầu năm, sanhangtot.com cũng triển khai chương trình “<span style="color:#0000ff"><strong>Lẩu nướng tưng bừng cùng Kanzo</strong></span>” từ ngày 01/01/2019 – 28/02/2019. Đây là cơ hội tuyệt vời cho những ai đang có ý định sắm sửa thiết bị nhà bếp với mức&nbsp; ưu đãi kép, giảm giá tới 38% và tặng thêm nhiều món quà hấp dẫn như Hộp đựng thực phẩm, chảo trơn… Cụ thể, chỉ với 590.000 đồng bạn có thể mua được bếp nướng điện Kanzo SHD4600, hoặc lò nướng 10L Kanzo SHD4210 với giá 599.000 đồng…</p>
            
            <p>Đặc biệt, từ ngày 01/01 – 28/02/2019, hàng loạt sản phẩm mới của Kanzo sẽ được ra mắt thị trường với mức giá ưu đãi bất ngờ trong chương trình “<span style="color:#0000ff"><strong>Mừng sản phẩm mới – Giá giảm kịch sàn</strong></span>”. Cụ thể, máy hút chân không Kanzo – giải pháp hàng đầu trong việc bảo quản thực phẩm và ngăn chặn vi khuẩn sẽ được mở bán với giá giảm tới 20%, cây lau nhà hơi nước giúp lau sạch nhanh và diệt khuẩn được giảm giá tới 14% trong những tháng đầu mở bán…</p>
            
            <p>Ngoài ra, chương trình khuyến mại Tết Đinh Dậu 2019 “Quà Tết tặng mẹ - Ủ ấm lòng cha” với hình thức khuyến mại siêu sốc cùng nhiều quà tặng giá trị vẫn tiếp tục được triển khai từ 18/11/2016 – 27/1.2019. Đây là chương trình khuyến mại lớn nhất năm của Tập đoàn Kanzo, 100% khách hàng tham gia mua sản phẩm khuyến mại sẽ được tặng quà giá trị tới 690.oo đồng với tổng giá trị quà tặng lên tới 10 tỷ đồng.</p>
            
            <p>Cụ thể, khách hàng sẽ nhận được ngay Bộ nồi Kanzo SH6634 màu vàng quai EB trị giá 690.000 đồng khi mua Nồi cơm điện 1.8L Kanzo MAMA SHD8661 giá 1.390.000 đồng; tặng nồi lẻ anod trị giá 380.000 đồng khi mua Nồi cơm điện Kanzo MAMA SHD8220 hay bếp gas dương kính Kanzo MAMA MMBB0787…</p>
            
            <p>Hãy mua sắm, sử dụng và cảm nhận những tiện ích từ các sản phẩm điện gia dụng, đồ gia dụng, thiết bị nhà bếp, cây nước nóng lạnh…&nbsp;mà thương hiệu Kanzo mang lại, để tận hưởng cuộc sống tốt đẹp hơn.</p>','created_at'=>now(),
            ],
            ['id'=>2,
            'name'=>'Giải nhiệt ngày hè với nhiều khuyến mại HOT, siêu hấp dẫn 1',
            'slug'=>str_slug('Giải nhiệt ngày hè với nhiều khuyến mại HOT, siêu hấp dẫn 1'),
            'image'=>'112.png',
            'summary'=>'Chào hè 2019, trang thương mại điện tử sanhangtot triển khai nhiều chương trình khuyến mại lớn, giảm giá sốc. Đây là cơ hội lớn trong năm để quý khách hàng mua được sản phẩm ưng ý với giá phải chăng.',
            
            'content'=>'<p>Các chương trình khuyến mại vô cùng hấp dẫn của website sanhangtot.com trong tháng 4 năm 2019 này hứa hẹn sẽ mang tới cho quý khách hàng những giây phút mua sắm thật sự thoải mái, cùng cơ hội sở hữu những sản phẩm cao cấp&nbsp;<strong><a href="" rel="nofollow" target="_blank" name="Kanzo&nbsp;GROUP">Kanzo</a>&nbsp;</strong>với mức giá “bình dân” và được tặng kèm nhiều quà tặng giá trị.</p>

            <p style="text-align:center"><img alt="Giải nhiệt ngày hè với nhiều khuyến mại HOT, siêu hấp dẫn" src="/pic/news/images/giai-nhiet-ngay-he-voi-nhieu-khuyen-mai-hot-sieu-hap-dan.png"></p>
            
            <p style="text-align:center"><em>Tham khảo chi tiết các sản phẩm khuyến mại trong chương trình </em>“<a href="" rel="nofollow" target="_blank">Khuyến mãi Tưng bừng – Mừng đại lễ</a>”</p>
            
            <p>Từ ngày 01/04/2019 – 30/04/2019, website sanhangtot.com sẽ triển khai chương trình “Khuyến mãi Tưng bừng – Mừng đại lễ”với mức giảm giá sốc tới 40% và tặng thêm nhiều quà tặng hấp dẫn như đèn Compact SHE CFLST3-7W, đèn pin tay cầm Kanzo SHE4052 cỡ nhỏ ... Với mức giá dưới 300.000 đồng, quý khách hàng có thể mua được các sản phẩm thiết yếu trong gia đình như máy xay sinh tố Kanzo SHD5115, &nbsp;nồi cơm điện 1.8L Kanzo SHD8601, đèn bàn Kanzo SHE-SL-09B,&nbsp; đèn tích điện đa năng Kanzo SHE8040L, đèn pin xách tay Kanzo SHE8195…</p>
            
            <p style="text-align:center"><img alt="Giải nhiệt ngày hè với nhiều khuyến mại HOT, siêu hấp dẫn 1" src="/pic/news/images/giai-nhiet-ngay-he-voi-nhieu-khuyen-mai-hot-sieu-hap-dan(1).png"></p>
            
            <p style="text-align:center"><em>Tham khảo chi tiết các sản phẩm khuyến mại trong chương trình </em>“<a href="" rel="nofollow" target="_blank">Hội chợ Online – Mua 1 được 2</a> ”</p>
            
            <p>Bên cạnh đó, chương trình “Hội chợ Online – Mua 1 được 2 ” sẽ được triển khai trong tháng 4 (từ ngày 01/04/2019 – 30/04/2019) với hình thức khuyến mại hấp dẫn. Cụ thể, khi mua các sản phẩm đèn trong chương trình bên cạnh việc được mua với giá khuyến mại, quý khách hàng còn được tặng kèm thêm 1 sản phẩm giá trị. Cụ thể, nồi áp suất điện đa năng Kanzo SH1650 giảm giá từ 1.090.000 đồng xuống còn 790.000 đồng và được tặng kèm hộp đựng thực phẩm SHT11085, Máy lọc nước R.O 9 lõi Kanzo SHR8669B giảm từ 6.790.000 đồng xuống còn 4.590.000 đồng và được tặng kèm bộ 3 lõi lọc số 1,2,3…</p>
            
            <p style="text-align:center"><em>Tham khảo chi tiết các sản phẩm khuyến mại trong chương trình “<a href="" rel="nofollow" target="_blank">Thách thức mọi giới hạn</a>”</em></p>
            
            <p>Đặc biệt, từ ngày 02/04/2019 – 30/06/2019, chương trình khuyến mại hè 2019 “Thách thức mọi giới hạn” sẽ được triển khai trên toàn quốc với nhiều ưu đãi vô cùng hấp dẫn: 100% nhận quà giá trị, tặng thêm 1 năm bảo hành miễn phí và cơ hội đi Mỹ với tổng giá trị giải thưởng chuyến đi lên đến 400.000.000 triệu đồng khi nhắn tin kích hoạt bảo hành. Nhiều sản phẩm hè “hot” được triển khai trong chương trình khuyến mại lớn trong năm này như máy lọc nước R.O tích hợp nóng lạnh, cây nước nóng lạnh, máy làm mát không khí Kanzo SHD7724, SHD7735, SHD7795, SHD7745… Ngoài ra, mua càng sớm, cơ hội nhận được chuyến du lịch Mỹ càng cao khi chương trình áp dụng cách thức bảo lưu mã số nhắn tin kích hoạt bảo hành ở cả 5 lần quay trúng thưởng.</p>
            
            <p>Hãy mua sắm, sử dụng và cảm nhận những tiện ích từ các sản phẩm điện gia dụng, đồ gia dụng, thiết bị nhà bếp, cây nước nóng lạnh…&nbsp;mà thương hiệu Kanzo mang lại, để tận hưởng cuộc sống tốt đẹp hơn.</p>','created_at'=>now(),
            ],
            ['id'=>3,
            'name'=>'Giải nhiệt ngày hè với nhiều khuyến mại HOT, siêu hấp dẫn 2',
            'slug'=>str_slug('Giải nhiệt ngày hè với nhiều khuyến mại HOT, siêu hấp dẫn 2'),
            'image'=>'112.png',
            'summary'=>'Chào hè 2019, trang thương mại điện tử sanhangtot triển khai nhiều chương trình khuyến mại lớn, giảm giá sốc. Đây là cơ hội lớn trong năm để quý khách hàng mua được sản phẩm ưng ý với giá phải chăng.',
            
            'content'=>'<p>Các chương trình khuyến mại vô cùng hấp dẫn của website sanhangtot.com trong tháng 4 năm 2019 này hứa hẹn sẽ mang tới cho quý khách hàng những giây phút mua sắm thật sự thoải mái, cùng cơ hội sở hữu những sản phẩm cao cấp&nbsp;<strong><a href="" rel="nofollow" target="_blank" name="Kanzo&nbsp;GROUP">Kanzo</a>&nbsp;</strong>với mức giá “bình dân” và được tặng kèm nhiều quà tặng giá trị.</p>

            <p style="text-align:center"><img alt="Giải nhiệt ngày hè với nhiều khuyến mại HOT, siêu hấp dẫn" src="/pic/news/images/giai-nhiet-ngay-he-voi-nhieu-khuyen-mai-hot-sieu-hap-dan.png"></p>
            
            <p style="text-align:center"><em>Tham khảo chi tiết các sản phẩm khuyến mại trong chương trình </em>“<a href="" rel="nofollow" target="_blank">Khuyến mãi Tưng bừng – Mừng đại lễ</a>”</p>
            
            <p>Từ ngày 01/04/2019 – 30/04/2019, website sanhangtot.com sẽ triển khai chương trình “Khuyến mãi Tưng bừng – Mừng đại lễ”với mức giảm giá sốc tới 40% và tặng thêm nhiều quà tặng hấp dẫn như đèn Compact SHE CFLST3-7W, đèn pin tay cầm Kanzo SHE4052 cỡ nhỏ ... Với mức giá dưới 300.000 đồng, quý khách hàng có thể mua được các sản phẩm thiết yếu trong gia đình như máy xay sinh tố Kanzo SHD5115, &nbsp;nồi cơm điện 1.8L Kanzo SHD8601, đèn bàn Kanzo SHE-SL-09B,&nbsp; đèn tích điện đa năng Kanzo SHE8040L, đèn pin xách tay Kanzo SHE8195…</p>
            
            <p style="text-align:center"><img alt="Giải nhiệt ngày hè với nhiều khuyến mại HOT, siêu hấp dẫn 1" src="/pic/news/images/giai-nhiet-ngay-he-voi-nhieu-khuyen-mai-hot-sieu-hap-dan(1).png"></p>
            
            <p style="text-align:center"><em>Tham khảo chi tiết các sản phẩm khuyến mại trong chương trình </em>“<a href="" rel="nofollow" target="_blank">Hội chợ Online – Mua 1 được 2</a> ”</p>
            
            <p>Bên cạnh đó, chương trình “Hội chợ Online – Mua 1 được 2 ” sẽ được triển khai trong tháng 4 (từ ngày 01/04/2019 – 30/04/2019) với hình thức khuyến mại hấp dẫn. Cụ thể, khi mua các sản phẩm đèn trong chương trình bên cạnh việc được mua với giá khuyến mại, quý khách hàng còn được tặng kèm thêm 1 sản phẩm giá trị. Cụ thể, nồi áp suất điện đa năng Kanzo SH1650 giảm giá từ 1.090.000 đồng xuống còn 790.000 đồng và được tặng kèm hộp đựng thực phẩm SHT11085, Máy lọc nước R.O 9 lõi Kanzo SHR8669B giảm từ 6.790.000 đồng xuống còn 4.590.000 đồng và được tặng kèm bộ 3 lõi lọc số 1,2,3…</p>
            
            <p style="text-align:center"><em>Tham khảo chi tiết các sản phẩm khuyến mại trong chương trình “<a href="" rel="nofollow" target="_blank">Thách thức mọi giới hạn</a>”</em></p>
            
            <p>Đặc biệt, từ ngày 02/04/2019 – 30/06/2019, chương trình khuyến mại hè 2019 “Thách thức mọi giới hạn” sẽ được triển khai trên toàn quốc với nhiều ưu đãi vô cùng hấp dẫn: 100% nhận quà giá trị, tặng thêm 1 năm bảo hành miễn phí và cơ hội đi Mỹ với tổng giá trị giải thưởng chuyến đi lên đến 400.000.000 triệu đồng khi nhắn tin kích hoạt bảo hành. Nhiều sản phẩm hè “hot” được triển khai trong chương trình khuyến mại lớn trong năm này như máy lọc nước R.O tích hợp nóng lạnh, cây nước nóng lạnh, máy làm mát không khí Kanzo SHD7724, SHD7735, SHD7795, SHD7745… Ngoài ra, mua càng sớm, cơ hội nhận được chuyến du lịch Mỹ càng cao khi chương trình áp dụng cách thức bảo lưu mã số nhắn tin kích hoạt bảo hành ở cả 5 lần quay trúng thưởng.</p>
            
            <p>Hãy mua sắm, sử dụng và cảm nhận những tiện ích từ các sản phẩm điện gia dụng, đồ gia dụng, thiết bị nhà bếp, cây nước nóng lạnh…&nbsp;mà thương hiệu Kanzo mang lại, để tận hưởng cuộc sống tốt đẹp hơn.</p>','created_at'=>now(),
            ],
            ['id'=>4,
                'name'=>'Đón giáng sinh – Tưng bừng nhận quà khuyến mại lớn từ Kanzo',
                'slug'=>str_slug('Đón giáng sinh – Tưng bừng nhận quà khuyến mại lớn từ Kanzo'),
                'image'=>'1637_vui_giang_sinh.png',
                'summary'=>'Cuối năm là thời điểm nhu cầu mua sắm, trang hoàng nhà cửa tăng cao. Nắm bắt tâm lý này, trang thương mại điện tử sanhangtot triển khai hàng loạt chương trình khuyến mại lớn, giảm giá sốc cùng vô vàn quà tặng hấp dẫn.',
                
                'content'=>'<p style="text-align:center"><strong><em><img alt="Đón giáng sinh – Tưng bừng nhận quà khuyến mại lớn từ Kanzo" src="/pic/news/images/don-giang-sinh-tung-bung-nhan-qua-khuyen-mai-lon-tu-Kanzo.png"></em></strong></p>
    
                <p style="text-align:center"><em>Nhiều chương trình khuyến mại hot được triển khai trong tháng 12</em></p>
                
                <p>Các chương trình khuyến mại vô cùng hấp dẫn của website sanhangtot.com trong tháng 12 này hứa hẹn sẽ mang tới cho quý khách hàng những giây phút mua sắm thật sự thoải mái, cùng cơ hội sở hữu những sản phẩm cao cấp&nbsp;Kanzo&nbsp;với mức giá “bình dân” và được tặng kèm nhiều quà tặng giá trị.</p>
                
                <p>Từ 01/12 – 31/12/2016, website sanhangtot.com sẽ triển khai chương trình “Ngày mua sắm trực tuyến online Friday 2016” với mức giảm giá sâu và tặng thêm nhiều quà tặng hấp dẫn. Với mức giá giảm lên tới 45%, quý khách hàng có thể sở hữu được nhiều sản phẩm “hot” mùa lạnh với giá siêu rẻ như&nbsp; Lò vi sóng SHD4820, Máy sấy quần áo SHD2616, Đèn sưởi phòng tắm SHD3823, Bếp nướng SHD4603, Bếp gas dương kính SHD3365…</p>
                
                <p style="text-align:center"><img alt="Đón giáng sinh – Tưng bừng nhận quà khuyến mại lớn từ Kanzo 1" src="/pic/news/images/don-giang-sinh-tung-bung-nhan-qua-khuyen-mai-lon-tu-Kanzo(1).png"></p>
                
                <p style="text-align:center"><em>Tham khảo chi tiết các sản phẩm khuyến mại trong chương trình “<span style="color:#0000ff"><strong>Ngày mua sắm trực tuyến online Friday 2016</strong></span>”</em></p>
                
                <p>Bên cạnh đó, chương trình “Vui giáng sinh – Rinh quà tặng” được triển khai từ ngày 01/12 – 31/12/2016 là cơ hội tuyệt vời cho những ai đang có ý định sắm sửa sản phẩm mùa đông như sưởi điện, đèn sưởi nhà tắm, bếp nướng điện... Không chỉ được giảm tới 30%, quý khách hàng còn được tặng thêm nhiều món quà hấp dẫn như Hộp đựng thực phẩm, chảo trơn… Cụ thể, đèn sưởi nhà tắm SHD3803 có giá 1.298.000 đồng được giảm xuống chỉ còn 890.000 đồng và được tặng thêm Hộp đựng thực phẩm SHT11001 hoặc SHT11085; Lò nướng thủy tinh SH416 giá 950.000 đồng được giảm chỉ còn 580.000 đồng…</p>
                
                <p style="text-align:center"><img alt="Đón giáng sinh – Tưng bừng nhận quà khuyến mại lớn từ Kanzo 2" src="/pic/news/images/don-giang-sinh-tung-bung-nhan-qua-khuyen-mai-lon-tu-Kanzo(2).png"></p>
                
                <p style="text-align:center"><em>Tham khảo chi tiết các sản phẩm khuyến mại trong chương trình “<span style="color:#0000ff"><strong>Vui giáng sinh – Rinh quà tặng</strong></span></em><em>”</em></p>
                
                <p>Ngoài ra, tham gia chương trình&nbsp; “Vui giáng sinh – Rinh quà tặng”, quý khách hàng còn có cơ hội được mua những combo vô cùng haaso dẫn như combo chảo từ SHM28 và SHM20 chỉ còn 271.818 đồng; combo tiện ích gồm máy sấy tóc SHD2301 và bàn là khô SHD1072 giảm còn 181.818 đồng…</p>
                
                <p>Đặc biệt, từ ngày 18/11 – 27/01/2019, sanhangtot sẽ triển khai chương trình khuyến mại mừng Tết Đinh Dậu 2019 “Quà Tết tặng mẹ - Ủ ấm lòng cha” với hình thức khuyến mại siêu sốc cùng nhiều quà tặng giá trị. Đây là chương trình khuyến mại lớn nhất năm của Tập đoàn Kanzo với tổng giá trị quà tặng lên tới 10 tỷ đồng. 100% khách hàng tham gia mua sản phẩm trong chương trình khuyến mại sẽ nhận được quà tặng trị giá lên tới 690.000 đồng.</p>
                
                <p style="text-align:center"><img alt="Đón giáng sinh – Tưng bừng nhận quà khuyến mại lớn từ Kanzo 3" src="/pic/news/images/don-giang-sinh-tung-bung-nhan-qua-khuyen-mai-lon-tu-Kanzo(3).png"></p>
                
                <p style="text-align:center"><em>Tham khảo cụ thể các sản phẩm trong chương trình “<span style="color:#0000ff"><strong>Quà Tết tặng mẹ - Ủ ấm lòng cha</strong></span>”</em></p>
                
                <p>Cụ thể, khách hàng sẽ nhận được ngay Bộ nồi Kanzo SH6634 màu vàng quai EB trị giá 690.000 đồng khi mua Nồi cơm điện 1.8L Kanzo MAMA SHD8661 giá 1.390.000 đồng; tặng nồi lẻ anod trị giá 380.000 đồng khi mua Nồi cơm điện Kanzo MAMA SHD8220 hay bếp gas dương kính Kanzo MAMA MMBB0787…</p>
                
                <p>Hãy mua sắm, sử dụng và cảm nhận những tiện ích từ các sản phẩm điện gia dụng, đồ gia dụng, thiết bị nhà bếp, cây nước nóng lạnh…&nbsp;mà thương hiệu Kanzo mang lại, để tận hưởng cuộc sống tốt đẹp hơn.</p>
                ','created_at'=>now(),
                ],
            ['id'=>5,
            'name'=>'Giải nhiệt ngày hè với nhiều khuyến mại HOT, siêu hấp dẫn 3',
            'slug'=>str_slug('Giải nhiệt ngày hè với nhiều khuyến mại HOT, siêu hấp dẫn 3'),
            'image'=>'112.png',
            'summary'=>'Chào hè 2019, trang thương mại điện tử sanhangtot triển khai nhiều chương trình khuyến mại lớn, giảm giá sốc. Đây là cơ hội lớn trong năm để quý khách hàng mua được sản phẩm ưng ý với giá phải chăng.',
            
            'content'=>'<p>Các chương trình khuyến mại vô cùng hấp dẫn của website sanhangtot.com trong tháng 4 năm 2019 này hứa hẹn sẽ mang tới cho quý khách hàng những giây phút mua sắm thật sự thoải mái, cùng cơ hội sở hữu những sản phẩm cao cấp&nbsp;<strong><a href="" rel="nofollow" target="_blank" name="Kanzo&nbsp;GROUP">Kanzo</a>&nbsp;</strong>với mức giá “bình dân” và được tặng kèm nhiều quà tặng giá trị.</p>

            <p style="text-align:center"><img alt="Giải nhiệt ngày hè với nhiều khuyến mại HOT, siêu hấp dẫn" src="/pic/news/images/giai-nhiet-ngay-he-voi-nhieu-khuyen-mai-hot-sieu-hap-dan.png"></p>
            
            <p style="text-align:center"><em>Tham khảo chi tiết các sản phẩm khuyến mại trong chương trình </em>“<a href="" rel="nofollow" target="_blank">Khuyến mãi Tưng bừng – Mừng đại lễ</a>”</p>
            
            <p>Từ ngày 01/04/2019 – 30/04/2019, website sanhangtot.com sẽ triển khai chương trình “Khuyến mãi Tưng bừng – Mừng đại lễ”với mức giảm giá sốc tới 40% và tặng thêm nhiều quà tặng hấp dẫn như đèn Compact SHE CFLST3-7W, đèn pin tay cầm Kanzo SHE4052 cỡ nhỏ ... Với mức giá dưới 300.000 đồng, quý khách hàng có thể mua được các sản phẩm thiết yếu trong gia đình như máy xay sinh tố Kanzo SHD5115, &nbsp;nồi cơm điện 1.8L Kanzo SHD8601, đèn bàn Kanzo SHE-SL-09B,&nbsp; đèn tích điện đa năng Kanzo SHE8040L, đèn pin xách tay Kanzo SHE8195…</p>
            
            <p style="text-align:center"><img alt="Giải nhiệt ngày hè với nhiều khuyến mại HOT, siêu hấp dẫn 1" src="/pic/news/images/giai-nhiet-ngay-he-voi-nhieu-khuyen-mai-hot-sieu-hap-dan(1).png"></p>
            
            <p style="text-align:center"><em>Tham khảo chi tiết các sản phẩm khuyến mại trong chương trình </em>“<a href="" rel="nofollow" target="_blank">Hội chợ Online – Mua 1 được 2</a> ”</p>
            
            <p>Bên cạnh đó, chương trình “Hội chợ Online – Mua 1 được 2 ” sẽ được triển khai trong tháng 4 (từ ngày 01/04/2019 – 30/04/2019) với hình thức khuyến mại hấp dẫn. Cụ thể, khi mua các sản phẩm đèn trong chương trình bên cạnh việc được mua với giá khuyến mại, quý khách hàng còn được tặng kèm thêm 1 sản phẩm giá trị. Cụ thể, nồi áp suất điện đa năng Kanzo SH1650 giảm giá từ 1.090.000 đồng xuống còn 790.000 đồng và được tặng kèm hộp đựng thực phẩm SHT11085, Máy lọc nước R.O 9 lõi Kanzo SHR8669B giảm từ 6.790.000 đồng xuống còn 4.590.000 đồng và được tặng kèm bộ 3 lõi lọc số 1,2,3…</p>
            
            <p style="text-align:center"><em>Tham khảo chi tiết các sản phẩm khuyến mại trong chương trình “<a href="" rel="nofollow" target="_blank">Thách thức mọi giới hạn</a>”</em></p>
            
            <p>Đặc biệt, từ ngày 02/04/2019 – 30/06/2019, chương trình khuyến mại hè 2019 “Thách thức mọi giới hạn” sẽ được triển khai trên toàn quốc với nhiều ưu đãi vô cùng hấp dẫn: 100% nhận quà giá trị, tặng thêm 1 năm bảo hành miễn phí và cơ hội đi Mỹ với tổng giá trị giải thưởng chuyến đi lên đến 400.000.000 triệu đồng khi nhắn tin kích hoạt bảo hành. Nhiều sản phẩm hè “hot” được triển khai trong chương trình khuyến mại lớn trong năm này như máy lọc nước R.O tích hợp nóng lạnh, cây nước nóng lạnh, máy làm mát không khí Kanzo SHD7724, SHD7735, SHD7795, SHD7745… Ngoài ra, mua càng sớm, cơ hội nhận được chuyến du lịch Mỹ càng cao khi chương trình áp dụng cách thức bảo lưu mã số nhắn tin kích hoạt bảo hành ở cả 5 lần quay trúng thưởng.</p>
            
            <p>Hãy mua sắm, sử dụng và cảm nhận những tiện ích từ các sản phẩm điện gia dụng, đồ gia dụng, thiết bị nhà bếp, cây nước nóng lạnh…&nbsp;mà thương hiệu Kanzo mang lại, để tận hưởng cuộc sống tốt đẹp hơn.</p>','created_at'=>now(),
            ],
            ['id'=>6,
            'name'=>'Giải nhiệt ngày hè với nhiều khuyến mại HOT, siêu hấp dẫn 4',
            'slug'=>str_slug('Giải nhiệt ngày hè với nhiều khuyến mại HOT, siêu hấp dẫn 4'),
            'image'=>'112.png',
            'summary'=>'Chào hè 2019, trang thương mại điện tử sanhangtot triển khai nhiều chương trình khuyến mại lớn, giảm giá sốc. Đây là cơ hội lớn trong năm để quý khách hàng mua được sản phẩm ưng ý với giá phải chăng.',
            
            'content'=>'<p>Các chương trình khuyến mại vô cùng hấp dẫn của website sanhangtot.com trong tháng 4 năm 2019 này hứa hẹn sẽ mang tới cho quý khách hàng những giây phút mua sắm thật sự thoải mái, cùng cơ hội sở hữu những sản phẩm cao cấp&nbsp;<strong><a href="" rel="nofollow" target="_blank" name="Kanzo&nbsp;GROUP">Kanzo</a>&nbsp;</strong>với mức giá “bình dân” và được tặng kèm nhiều quà tặng giá trị.</p>

            <p style="text-align:center"><img alt="Giải nhiệt ngày hè với nhiều khuyến mại HOT, siêu hấp dẫn" src="/pic/news/images/giai-nhiet-ngay-he-voi-nhieu-khuyen-mai-hot-sieu-hap-dan.png"></p>
            
            <p style="text-align:center"><em>Tham khảo chi tiết các sản phẩm khuyến mại trong chương trình </em>“<a href="" rel="nofollow" target="_blank">Khuyến mãi Tưng bừng – Mừng đại lễ</a>”</p>
            
            <p>Từ ngày 01/04/2019 – 30/04/2019, website sanhangtot.com sẽ triển khai chương trình “Khuyến mãi Tưng bừng – Mừng đại lễ”với mức giảm giá sốc tới 40% và tặng thêm nhiều quà tặng hấp dẫn như đèn Compact SHE CFLST3-7W, đèn pin tay cầm Kanzo SHE4052 cỡ nhỏ ... Với mức giá dưới 300.000 đồng, quý khách hàng có thể mua được các sản phẩm thiết yếu trong gia đình như máy xay sinh tố Kanzo SHD5115, &nbsp;nồi cơm điện 1.8L Kanzo SHD8601, đèn bàn Kanzo SHE-SL-09B,&nbsp; đèn tích điện đa năng Kanzo SHE8040L, đèn pin xách tay Kanzo SHE8195…</p>
            
            <p style="text-align:center"><img alt="Giải nhiệt ngày hè với nhiều khuyến mại HOT, siêu hấp dẫn 1" src="/pic/news/images/giai-nhiet-ngay-he-voi-nhieu-khuyen-mai-hot-sieu-hap-dan(1).png"></p>
            
            <p style="text-align:center"><em>Tham khảo chi tiết các sản phẩm khuyến mại trong chương trình </em>“<a href="" rel="nofollow" target="_blank">Hội chợ Online – Mua 1 được 2</a> ”</p>
            
            <p>Bên cạnh đó, chương trình “Hội chợ Online – Mua 1 được 2 ” sẽ được triển khai trong tháng 4 (từ ngày 01/04/2019 – 30/04/2019) với hình thức khuyến mại hấp dẫn. Cụ thể, khi mua các sản phẩm đèn trong chương trình bên cạnh việc được mua với giá khuyến mại, quý khách hàng còn được tặng kèm thêm 1 sản phẩm giá trị. Cụ thể, nồi áp suất điện đa năng Kanzo SH1650 giảm giá từ 1.090.000 đồng xuống còn 790.000 đồng và được tặng kèm hộp đựng thực phẩm SHT11085, Máy lọc nước R.O 9 lõi Kanzo SHR8669B giảm từ 6.790.000 đồng xuống còn 4.590.000 đồng và được tặng kèm bộ 3 lõi lọc số 1,2,3…</p>
            
            <p style="text-align:center"><em>Tham khảo chi tiết các sản phẩm khuyến mại trong chương trình “<a href="" rel="nofollow" target="_blank">Thách thức mọi giới hạn</a>”</em></p>
            
            <p>Đặc biệt, từ ngày 02/04/2019 – 30/06/2019, chương trình khuyến mại hè 2019 “Thách thức mọi giới hạn” sẽ được triển khai trên toàn quốc với nhiều ưu đãi vô cùng hấp dẫn: 100% nhận quà giá trị, tặng thêm 1 năm bảo hành miễn phí và cơ hội đi Mỹ với tổng giá trị giải thưởng chuyến đi lên đến 400.000.000 triệu đồng khi nhắn tin kích hoạt bảo hành. Nhiều sản phẩm hè “hot” được triển khai trong chương trình khuyến mại lớn trong năm này như máy lọc nước R.O tích hợp nóng lạnh, cây nước nóng lạnh, máy làm mát không khí Kanzo SHD7724, SHD7735, SHD7795, SHD7745… Ngoài ra, mua càng sớm, cơ hội nhận được chuyến du lịch Mỹ càng cao khi chương trình áp dụng cách thức bảo lưu mã số nhắn tin kích hoạt bảo hành ở cả 5 lần quay trúng thưởng.</p>
            
            <p>Hãy mua sắm, sử dụng và cảm nhận những tiện ích từ các sản phẩm điện gia dụng, đồ gia dụng, thiết bị nhà bếp, cây nước nóng lạnh…&nbsp;mà thương hiệu Kanzo mang lại, để tận hưởng cuộc sống tốt đẹp hơn.</p>','created_at'=>now(),
            ],
            ['id'=>7,
            'name'=>'Giải nhiệt ngày hè với nhiều khuyến mại HOT, siêu hấp dẫn 5',
            'slug'=>str_slug('Giải nhiệt ngày hè với nhiều khuyến mại HOT, siêu hấp dẫn 5'),
            'image'=>'112.png',
            'summary'=>'Chào hè 2019, trang thương mại điện tử sanhangtot triển khai nhiều chương trình khuyến mại lớn, giảm giá sốc. Đây là cơ hội lớn trong năm để quý khách hàng mua được sản phẩm ưng ý với giá phải chăng.',
            
            'content'=>'<p>Các chương trình khuyến mại vô cùng hấp dẫn của website sanhangtot.com trong tháng 4 năm 2019 này hứa hẹn sẽ mang tới cho quý khách hàng những giây phút mua sắm thật sự thoải mái, cùng cơ hội sở hữu những sản phẩm cao cấp&nbsp;<strong><a href="" rel="nofollow" target="_blank" name="Kanzo&nbsp;GROUP">Kanzo</a>&nbsp;</strong>với mức giá “bình dân” và được tặng kèm nhiều quà tặng giá trị.</p>

            <p style="text-align:center"><img alt="Giải nhiệt ngày hè với nhiều khuyến mại HOT, siêu hấp dẫn" src="/pic/news/images/giai-nhiet-ngay-he-voi-nhieu-khuyen-mai-hot-sieu-hap-dan.png"></p>
            
            <p style="text-align:center"><em>Tham khảo chi tiết các sản phẩm khuyến mại trong chương trình </em>“<a href="" rel="nofollow" target="_blank">Khuyến mãi Tưng bừng – Mừng đại lễ</a>”</p>
            
            <p>Từ ngày 01/04/2019 – 30/04/2019, website sanhangtot.com sẽ triển khai chương trình “Khuyến mãi Tưng bừng – Mừng đại lễ”với mức giảm giá sốc tới 40% và tặng thêm nhiều quà tặng hấp dẫn như đèn Compact SHE CFLST3-7W, đèn pin tay cầm Kanzo SHE4052 cỡ nhỏ ... Với mức giá dưới 300.000 đồng, quý khách hàng có thể mua được các sản phẩm thiết yếu trong gia đình như máy xay sinh tố Kanzo SHD5115, &nbsp;nồi cơm điện 1.8L Kanzo SHD8601, đèn bàn Kanzo SHE-SL-09B,&nbsp; đèn tích điện đa năng Kanzo SHE8040L, đèn pin xách tay Kanzo SHE8195…</p>
            
            <p style="text-align:center"><img alt="Giải nhiệt ngày hè với nhiều khuyến mại HOT, siêu hấp dẫn 1" src="/pic/news/images/giai-nhiet-ngay-he-voi-nhieu-khuyen-mai-hot-sieu-hap-dan(1).png"></p>
            
            <p style="text-align:center"><em>Tham khảo chi tiết các sản phẩm khuyến mại trong chương trình </em>“<a href="" rel="nofollow" target="_blank">Hội chợ Online – Mua 1 được 2</a> ”</p>
            
            <p>Bên cạnh đó, chương trình “Hội chợ Online – Mua 1 được 2 ” sẽ được triển khai trong tháng 4 (từ ngày 01/04/2019 – 30/04/2019) với hình thức khuyến mại hấp dẫn. Cụ thể, khi mua các sản phẩm đèn trong chương trình bên cạnh việc được mua với giá khuyến mại, quý khách hàng còn được tặng kèm thêm 1 sản phẩm giá trị. Cụ thể, nồi áp suất điện đa năng Kanzo SH1650 giảm giá từ 1.090.000 đồng xuống còn 790.000 đồng và được tặng kèm hộp đựng thực phẩm SHT11085, Máy lọc nước R.O 9 lõi Kanzo SHR8669B giảm từ 6.790.000 đồng xuống còn 4.590.000 đồng và được tặng kèm bộ 3 lõi lọc số 1,2,3…</p>
            
            <p style="text-align:center"><em>Tham khảo chi tiết các sản phẩm khuyến mại trong chương trình “<a href="" rel="nofollow" target="_blank">Thách thức mọi giới hạn</a>”</em></p>
            
            <p>Đặc biệt, từ ngày 02/04/2019 – 30/06/2019, chương trình khuyến mại hè 2019 “Thách thức mọi giới hạn” sẽ được triển khai trên toàn quốc với nhiều ưu đãi vô cùng hấp dẫn: 100% nhận quà giá trị, tặng thêm 1 năm bảo hành miễn phí và cơ hội đi Mỹ với tổng giá trị giải thưởng chuyến đi lên đến 400.000.000 triệu đồng khi nhắn tin kích hoạt bảo hành. Nhiều sản phẩm hè “hot” được triển khai trong chương trình khuyến mại lớn trong năm này như máy lọc nước R.O tích hợp nóng lạnh, cây nước nóng lạnh, máy làm mát không khí Kanzo SHD7724, SHD7735, SHD7795, SHD7745… Ngoài ra, mua càng sớm, cơ hội nhận được chuyến du lịch Mỹ càng cao khi chương trình áp dụng cách thức bảo lưu mã số nhắn tin kích hoạt bảo hành ở cả 5 lần quay trúng thưởng.</p>
            
            <p>Hãy mua sắm, sử dụng và cảm nhận những tiện ích từ các sản phẩm điện gia dụng, đồ gia dụng, thiết bị nhà bếp, cây nước nóng lạnh…&nbsp;mà thương hiệu Kanzo mang lại, để tận hưởng cuộc sống tốt đẹp hơn.</p>','created_at'=>now(),
            ],

        ]);
        
    }
}
