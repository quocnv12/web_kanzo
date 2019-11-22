<?php

use Illuminate\Database\Seeder;

class question extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('question')->delete();
        DB::table('question')->insert([
	        [
	        	'id'=>1,
	        	'title'=>'Bếp hồng ngoại khác gì với bếp từ?',
	        	'slug'=>str_slug('Bếp hồng ngoại khác gì với bếp từ?'),
	        	'content'=>'<p>Bếp hồng ngoại l&agrave; g&igrave;?</p> <p>Bếp hồng ngoại l&agrave; loại bếp hiện đại, hoạt động tr&ecirc;n nguy&ecirc;n l&yacute; bức xạ nhiệt của tia hồng ngoại. Khi sử dụng, d&ograve;ng điện trong bếp hồng ngoại sẽ đốt n&oacute;ng c&aacute;c cuộn d&acirc;y điện trở b&ecirc;n trong để tạo ra nhiệt, truyền đến mặt bếp l&agrave;m ch&iacute;n thức ăn.</p> <p>Bếp từ l&agrave; g&igrave;?</p> <p>Bếp từ l&agrave; d&ograve;ng bếp c&ocirc;ng nghệ cao, hoạt động dựa tr&ecirc;n nguy&ecirc;n l&yacute; t&aacute;c động giữa d&ograve;ng điện v&agrave; từ trường trong cuộn d&acirc;y. Cuộn d&acirc;y dẫn điện trong bếp từ được đặt trong bếp sẽ tạo ra d&ograve;ng điện cảm ứng (từ trường) khiến đ&aacute;y nồi kim loại trong khu vực n&agrave;y n&oacute;ng l&ecirc;n, nấu ch&iacute;n thức ăn.</p> <p>Bếp hồng ngoại kh&aacute;c g&igrave; với bếp từ?</p> <p>T&iacute;nh năng ưu việt giống nhau giữa bếp từ v&agrave; bếp hồng ngoại l&agrave; g&igrave;?</p> <p>- An to&agrave;n khi sử dụng, kh&ocirc;ng lo ch&aacute;y nổ.</p> <p>- An to&agrave;n sức khỏe, kh&ocirc;ng sinh ra kh&oacute;i hay c&aacute;c kh&iacute; độc hại như CO hay CO2.</p> <p>- Sử dụng điện năng, kh&ocirc;ng lo hết nguy&ecirc;n liệu giữa chừng.</p> <p>- Tiết ki&ecirc;m nguy&ecirc;n liệu bởi nhi&ecirc;n liệu sử dụng cho nấu nướng kh&ocirc;ng bị thất tho&aacute;t nhiều. Nếu để đun 1 l&iacute;t nước, bếp ga phải tốn 600 đồng th&igrave; bếp từ chỉ tốn 100 đồng.</p> <p>- Chế độ hẹn giờ tiện dụng, tiết kiệm thời gian khi nấu ăn.</p> <p>- Nhiều chế độ nấu được c&agrave;i đặt sẵn, gi&uacute;p việc nấu ăn trở n&ecirc;n dễ d&agrave;ng hơn.</p> <p>- Vệ sinh dễ d&agrave;ng. - Thiết kế bếp sang trọng. Điểm kh&aacute;c nhau giữa bếp hồng ngoại v&agrave; bếp từ</p> <p>- Cơ chế hoạt động của bếp từ v&agrave; bếp hồng ngoại kh&aacute;c nhau n&ecirc;n mặt bếp hồng ngoại khi nấu ăn rất n&oacute;ng, c&oacute; thể g&acirc;y bỏng c&ograve;n mặt bếp từ vẫn m&aacute;t.</p> <p>- Kh&aacute;c với bếp từ, bạn c&oacute; thế sử dụng bếp hồng ngoại với hầu hết c&aacute;c loại nồi như inox, thủy tinh, nh&ocirc;m &hellip; Bếp từ rất k&eacute;n nồi, nếu muốn d&ugrave;ng c&aacute;c loại nồi kh&aacute;c tr&ecirc;n bếp từ phải c&oacute; bộ chuyển.</p> <p>- Bếp hồng ngoại c&oacute; thể d&ugrave;ng để nướng thực phẩm</p>',
	        	'image'=>'-blank-design-studio-mstekio-3p-engineering-render-configurazioni29-2000x1125.jpg',
	        	'active'=>'1',
	        ],
	        [
	        	'id'=>2,
	        	'title'=>'Bếp ga âm khác bếp gas dương như thế nào?',
	        	'slug'=>str_slug('Bếp ga âm khác bếp gas dương như thế nào?'),
	        	'content'=>'<p>Th&ocirc;ng thường kh&aacute;ch h&agrave;ng hay thắc mắc tại sao lại gọi l&agrave; bếp ga &acirc;m, bếp ga &acirc;m kh&aacute;c bếp ga dương ở điểm n&agrave;o?</p> <p>Đặc điểm bếp ga dương</p> <p>Từ những năm trước đ&acirc;y mọi người thường biết v&agrave; quen d&ugrave;ng đến bếp ga dương, bếp ga dương l&agrave; một trong những sản phẩm th&ocirc;ng dụng ph&ugrave; hợp với mọi đối thượng kh&aacute;ch h&agrave;ng ( hộ gia đ&igrave;nh, sinh vi&ecirc;n, người lao động), kh&ocirc;ng chỉ bếp ga dương tiết kiệm ga tối ưu, m&agrave; c&ograve;n c&oacute; độ bền cao từ 3 đến 5 năm cho c&aacute;c loại sản phẩm bếp sản xuất trong nước (Bếp ga Namilux, Bếp ga Goldsun, Bếp ga Bluestar...), độ bền từ 5 đến 10 năm cho c&aacute;c sản phẩm bếp ga nhập khẩu ( Bếp ga Rinnai, Bếp ga Paloma c&oacute; xuất xứ Nhật Bản...).</p> <p>- Sao lại gọi l&agrave; bếp ga dương?</p> <p>Bếp ga dương c&ograve;n được gọi l&agrave; bếp ga nổi (Bếp ga cổ điển), c&oacute; 4 ch&acirc;n đặt l&ecirc;n mặt b&agrave;n hoặc đặt l&ecirc;n mặt đ&aacute; của kệ bếp, sản phẩm n&agrave;y c&oacute; chiều dầy từ 10 đến 20 cm.</p> <p>Đặc điểm bếp ga &acirc;m</p> <p>Nhưng năm gần đ&acirc;y bếp ga dương được cải tiến dần dần theo thời gian v&agrave; được gọi l&agrave; bếp ga &acirc;m (Bếp ga hiện đại), sản phẩm theo phong c&aacute;ch mới ph&ugrave; hợp với kh&ocirc;ng gian kiến tr&uacute;c đương đại, thời trang - tinh tế v&agrave; được nhiều kh&aacute;ch h&agrave;ng phương t&acirc;y ưa chuộng, sản phẩm hướng tới kh&aacute;ch h&agrave;ng cao cấp d&ograve;ng trung v&agrave; kh&aacute;ch h&agrave;ng cao cấp d&ograve;ng cao. Sản phẩm bếp ga &acirc;m cũng c&oacute; độ bền tương tự như những d&ograve;ng bếp ga dương ( 3 đến 5 năm với những mẫu bếp sản xuất từ nước thứ ba, 5 đến 10 năm cho d&ograve;ng sản xuất từ Ch&acirc;u &Acirc;u).</p> <p>- Sao lại gọi l&agrave; bếp ga &acirc;m?</p> <p>Bếp ga &acirc;m c&oacute; bề mặt l&agrave;m từ inox 304 hoặc chất liệu k&iacute;nh chịu lực chịu nhiệt d&agrave;y từ 8 đến 10mm, sản phẩm được thiết kế mỏng (Slim) được đặt ch&igrave;m xuống mặt đ&aacute; của kệ bếp.</p> <p>- Bếp ga &acirc;m c&oacute; thể đặt như bếp ga dương được kh&ocirc;ng?</p> <p>Ho&agrave;n to&agrave;n c&oacute; thể được, bếp ga &acirc;m được nh&agrave; sản xuất thiết kế th&ecirc;m 4 ch&acirc;n như bếp ga dương c&oacute; thể th&aacute;o rời khi đặt &acirc;m xuống mặt đ&aacute;, đặt nổi khi lắp th&ecirc;m 4 ch&acirc;n, th&iacute;ch nghi với những hộ gia đ&igrave;nh c&oacute; kiến tr&uacute;c bếp theo bếp ga dương muốn d&ugrave;ng sang bếp ga &acirc;m.</p> <p>- Bếp ga &acirc;m v&agrave; bếp ga dương loại n&agrave;o tốn gas hơn? Đương nhi&ecirc;n bếp ga dương tiết kiệm ga hơn v&igrave; được thiết kế ph&ugrave; hợp với người Ch&acirc;u &Aacute; ( bền v&agrave; tiết kiệm), m&acirc;m chia lửa bằng đồng thau nhỏ hơn v&agrave; chủ yếu được mượn sức gi&oacute; để đấy lớn ngọn lửa. Ngược lại bếp ga &acirc;m mang phong c&aacute;ch Ch&acirc;u &Acirc;u ( Italy - T&acirc;y Ban Nha) thiết kế bộ m&acirc;m chia lửa với chất liệu hợp kim hoặc bằng đồng lớn hơn v&igrave; thế ngọn lửa của bếp ga &acirc;m lu&ocirc;n lu&ocirc;n cao hơn ( đun nấu, x&agrave;o x&aacute;o nhanh hơn)</p>',
	        	'image'=>'2.jpg',
	        	'active'=>'1',
	        ],
        ]);
    }
}
