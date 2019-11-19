<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class news extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('news')->delete();
        DB::table('news')->insert([
            [
                'summary'=>'Đun nấu xong nhớ bỏ 3s làm việc này, vừa tiết kiệm 50% ga lại an toàn, chống cháy nổ',
                'name'=>'Bếp ga Paloma PA-6MEJ siêu thị điện máy hc siêu thị hc,bếp ga nổi PALOMA PAJS25B',
                'slug'=>Str::slug('Bếp ga Paloma PA-6MEJ siêu thị điện máy hc siêu thị hc,bếp ga nổi PALOMA PAJS25B'),
                'content'=>'<p>Đ&acirc;y l&agrave; những mẹo nhỏ nhưng kh&ocirc;ng phải ai cũng biết gi&uacute;p tiết kiệm ga cho gia đ&igrave;nh.</p>
                    
                    <p>Hiện nay, bếp gas đang được sử dụng kh&aacute; phổ biến, kể cả th&agrave;nh thị lẫn n&ocirc;ng th&ocirc;n. Tuy nhi&ecirc;n, việc sử dụng bếp gas tiết kiệm sao cho tiết kiệm được năng lượng nhất kh&ocirc;ng phải ai cũng nắm r&otilde;. Dưới đ&acirc;y l&agrave; một số mẹo gi&uacute;p người nội trợ sử dụng bếp gas một c&aacute;ch hiệu quả.</p>
                    
                    <p>1.Kh&oacute;a b&igrave;nh ga sau khi nấu ăn</p>
                    
                    <p>Sau khi nấu ăn xong, bạn n&ecirc;n kh&oacute;a b&igrave;nh gas lại. Một phần hạn chế được lượng gas bị thất tho&aacute;t ra b&ecirc;n ngo&agrave;i, một phần đảm bảo được an to&agrave;n cho người sử dụng, tr&aacute;nh được t&igrave;nh trạng r&ograve; rỉ gas, g&acirc;y ch&aacute;y nổ&hellip;</p>
                    
                    <p style="text-align:center">&nbsp;<img src="http://kanzo.web88.vn/images/7.jpg" /></p>
                    
                    <p>2.Kh&ocirc;ng n&ecirc;n bật tắt bếp nhiều lần khi nấu</p>
                    
                    <p>Trước khi bắt tay v&agrave;o chế biến m&oacute;n ăn cho gia đ&igrave;nh m&igrave;nh, bạn n&ecirc;n chuẩn bị sẵn đầy đủ nguy&ecirc;n liệu v&agrave; l&ecirc;n kế hoạch m&igrave;nh sẽ nấu những m&oacute;n ăn g&igrave;. C&oacute; như vậy, khi bật bếp gas l&ecirc;n, bạn mới c&oacute; thể cho thức ăn v&agrave;o nồi nấu một c&aacute;ch li&ecirc;n tục được. Việc bật tắt bếp gas nhiều lần trong một lần nấu sẽ g&acirc;y tốn gas.</p>
                    
                    <p>3.điều chỉnh ngọn lửa vừa phải</p>
                    
                    <p>Trong khi nấu bạn h&atilde;y ch&uacute; &yacute; tới ngọn lửa, chỉ cần điều chỉnh n&uacute;m bếp gas sao cho ngọn lửa vừa với đ&aacute;y nồi l&agrave; được. Ngọn lửa qu&aacute; lớn vừa tốn gas m&agrave; m&oacute;n ăn của bạn lại l&acirc;u ch&iacute;n bởi lượng nhiệt thay v&igrave; tập trung v&agrave;o đ&aacute;y nồi lại bị ph&acirc;n t&aacute;n ra xung quanh.</p>
                    
                    <p style="text-align:center">&nbsp;<img src="http://kanzo.web88.vn/images/1.jpg" /></p>
                    
                    <p>4.Tập trung khi nấu ăn kh&ocirc;ng n&ecirc;n ch&uacute; &yacute; v&agrave;o việc kh&aacute;c</p>
                    
                    <p>Một số người c&oacute; th&oacute;i quen vừa nấu (đun nước, ninh ch&aacute;o&hellip;) vừa l&agrave;m việc kh&aacute;c như qu&eacute;t nh&agrave;, xem tivi... V&agrave; hầu hết đều qu&ecirc;n cho tới khi nhớ ra th&igrave; một lượng gas đ&atilde; ti&ecirc;u hao uổng ph&iacute; v&igrave; m&oacute;n ăn đ&atilde; qu&aacute; lửa, nước cạn, thậm ch&iacute; ch&aacute;y nồi. V&igrave; thế h&atilde;y tập trung khi nấu.</p>
                    
                    <p>5.Thường xuy&ecirc;n vệ sinh bếp ga</p>
                    
                    <p>Mỗi ng&agrave;y sau khi nấu, bạn n&ecirc;n ch&ugrave;i rửa bếp gas, để những cặn bẩn kh&ocirc;ng đọng lại l&agrave;m b&iacute;t c&aacute;c lỗ kh&iacute; (đường dẫn gas). Nếu kh&ocirc;ng ch&ugrave;i rửa thường xuy&ecirc;n, lỗ kh&iacute; sẽ dễ bị b&iacute;t khiến gas kh&ocirc;ng ổn định, ngọn lửa kh&ocirc;ng ch&aacute;y đều dẫn tới nấu thức ăn l&acirc;u hơn v&agrave; hao gas.</p>
                    ',
                'image'=>'1.jpg',
                'active'=>1,
                'created_at'=>now(),
            ]
        ]);
    }
}
