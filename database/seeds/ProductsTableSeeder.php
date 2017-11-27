<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name' => 'Áo khoác da thời trang cao cấp KRAKN93',
                'image' => '/storage/products/ao-khoac-nam-1.jpg',
                'slug' => 'ao-khoac-da-thoi-trang-cao-cap-KRAKN93',
                'price' => '200000',
                'type' => '0',
                'description' => 'Kiểu áo khoác da không chỉ vô cùng ấm áp mà còn đem tới cho bạn gái vẻ đẹp “lạ”. Mang đến cho các bạn nam vẻ đẹp nam tính, khỏe khoắn... Nếu đã thử mặc và nhìn vào những bộ ảnh thời trang mới nhất, hẳn bạn sẽ không thể không mua ngay nó cho mình.Áo được may hoàn toàn bằng da mềm mại tạo cho áo vẻ dày dạn và ấm áp, giúp bạn giữ ấm tốt trong những ngày trời se lạnh, đồng thời giúp bạn che nắng hiệu quả hơn mỗi khi ra đường.
                                   Đường may tinh tế, tỉ mỉ, khéo léo cùng dây kéo bền đẹp, chắc chắn tạo cho bạn một vẻ sang trọng và lịch lãm, tăng thêm cho sản phẩm có được độ hoàn hảo trong quá trình sử dụng.Túi trước ngực phối dây kéo độc đáo, cùng với 2 túi xéo trước được may kèm dây kéo tiện lợi, bạn có thể cất giữ các phụ kiện cá nhân nhỏ an toàn mà không sợ bị rơi rớt.
                                   Cổ tay được may nút bấm tiện lợi, tạo sự thoải mái cho bạn khi vận động.
                                   Dây kéo chắc chắn, bền, đường may cẩn thận, màu sắc nam tính đem lại sự trẻ trung, lịch lãm và sang trọng.
                                   Các bạn nam ưa thích phong cách lịch lãm thì chắc chắn sản phẩm lần này sẽ níu chân bạn lại ngắm nghía khá lâu rồi đấy.Chất liệu da mạnh mẽ, cá tính, tông màu nâu và đen sang trọng, cùng chiếc cổ đứng thời thượng, hòa quyện giúp sản phẩm trở nên bắt mắt thu hút mọi ánh nhìn. Với chiếc áo khoác da nam thời trang cao cấp này bạn sẽ dễ dàng mix với các trang phục khác như chiếc áo thun, áo sơ mi bên trong, hay các phụ kiện thời trang như đồng hồ, mắt kính,…để tạo nên phong cách riêng cho bản thân. Sử dụng chiếc áo trong những ngày se lạnh, đi làm, đi học hay đi chơi đều tiện để mang lại cho bạn vẻ đẹp ấn tượng, phong cách lịch lãm trong mắt mọi người xung quanh.',
                'user_id' => '1',
                'category_id' => '4',
                'discount' => '150000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Áo khoác da nam cổ trụ classical KRAKN184',
                'image' => '/storage/products/ao-khoac-nam-2.jpg',
                'slug' => 'Ao khoac da nam co tru classical KRAKN184',
                'price' => '200000',
                'type' => '0',
                'description' => 'Nhìn vẻ ngoài đánh giá một con người đã là thói quen từ rất lâu đời của người Việt Nam, không chỉ với phái đẹp mà ngay cả đàn ông cũng vậy. Vẻ ngoài mạnh mẽ, chững chạc luôn nói lên rằng chủ nhân của nó là một trang nam tử đội trời đạp đất. Hãy để Karan Việt Nam giới thiệu đến cánh mày râu một bí mật giúp vẻ ngoài của bạn thêm phần chuẩn men nhé.',
                'user_id' => '1',
                'category_id' => '4',
                'discount' => '180000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Áo Khoác Da Lót Lông Cao Cấp Mới Nhất 2015 KRAKN118',
                'image' => '/storage/products/ao-khoac-nam-3.jpg',
                'slug' => 'ao-khoac-da-lot-long',
                'price' => '250000',
                'type' => '0',
                'description' => 'Áo được thiết kế form áo phù hợp với vóc dáng của người Việt, đem lại sự vừa vặn, thoải mái khi sử dụng.Thiết kế cổ đứng phối bo thun vừa nam tính, vừa tạo cảm giác thoải mái, vừa giữ ấm cổ trong những ngày rét lạnh.Thiết kế tay dài, áo được may 2 lớp, tạo sự dày dạn, kín gió cho áo, giúp giữ ấm cơ thể trong không khí giá rét của mùa đông.Thiết kế 2 túi trước có độ sâu vừa phải, tiện lợi, giúp bạn có thể giữ ấm bàn tay, hay cất giữ các phụ kiện cá nhân.Gấu áo và tay áo bo thun co giãn, đem lại sự thoải mái cho bạn khi vận động.Chất liệu da dày, mềm, giữ ấm tốt.Đường may khéo léo, dây kéo mượt, bền, chắc chắn sẽ đem lại sự hài lòng cho bạn',
                'user_id' => '1',
                'category_id' => '4',
                'discount' => '150000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Áo khoác da nữ cổ bẻ style Hàn Quốc KRNU13',
                'image' => '/storage/products/ao-khoac-nu-1.jpg',
                'slug' => 'ao-khoac-da-nu-co-be-style',
                'price' => '300000',
                'type' => '1',
                'description' => 'Áo khoác da nữ cao cấp được thiết kế với kiểu dáng trẻ trung, năng động, tạo vẻ ngoài sành điệu và cá tính
                                Thiết kế mới, chiếc áo khoác da nữ với kiểu áo tay dài, kéo khóa tiện dụng dùng cùng chi tiết đính nút, phối túi đầy cá tính, phù hợp với sở thích của nhiều người.
                                Áo khoác da nữ được thiết kế form ôm body tạo nên nét trẻ trung, năng động quyến rũ của phái đẹp
                                Chất liệu : giả da tổng hợp được nhập khẩu từ Korea, với độ bền 2-3 năm, da mềm và có độ bóng nhẹ, dễ dàng cử động
                                Nguyên liệu : dây khóa đồng được đặt và thiết kế riêng, tạo độ nhạy khi sử dụng, bền theo thời gian
                                Màu sắc : Vàng thể hiện cho sự sang trọng và quý phái',
                'user_id' => '1',
                'category_id' => '4',
                'discount' => '280000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Áo khoác da nữ cao cấp túi ngang KRNU09',
                'image' => '/storage/products/ao-khoac-nu-2.jpg',
                'slug' => 'ao-khoac-da-nu-cao-cap',
                'price' => '400000',
                'type' => '1',
                'description' => 'Áo khoác da nữ cao cấp được thiết kế với kiểu dáng trẻ trung, năng động, tạo vẻ ngoài sành điệu và cá tính. Thiết kế mới, chiếc áo khoác da nữ  với kiểu áo tay dài, kéo khóa tiện dụng dùng cùng chi tiết đính nút, phối túi đầy cá tính, mạnh mẽ phù hợp với sở thích của nhiều người.Áo khoác da nữ  được thiết kế form ôm body tạo nên nét trẻ trung, năng động quyến rũ của phái đẹp
                                + Chất liệu: giả da tổng hợp được nhập khẩu từ Korea, Thailand, với độ bền 2-3 năm, da mềm và có độ bóng nhẹ, dễ dàng cử động, nhẹ so với áo da thật
                                + Nguyên liệu: dây khóa đồng được đặt và thiết kế riêng, tạo độ nhạy khi sử dụng, bền theo thời gian
                                + Áo khoác da nữ  phù hợp cho người từ 44 - 62kg
                                + Màu sắc : Đen thể hiện cho sự đẳng cấp và sang trọng.',
                'user_id' => '1',
                'category_id' => '4',
                'discount' => '0',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Áo khoác da nữ cao cấp KRNU07',
                'image' => '/storage/products/ao-khoac-nu-3.png',
                'slug' => 'ao-khoac-da-nu-cao-cap',
                'price' => '100000',
                'type' => '1',
                'description' => 'Áo khoác da nữ cao cấp được thiết kế với kiểu dáng trẻ trung, năng động, tạo vẻ ngoài sành điệu và cá tính
                                    Thiết kế mới, chiếc áo khoác da nữ với kiểu áo tay dài, kéo khóa tiện dụng cùng chi tiết đính nút, phối túi đầy cá tính, mạnh mẽ phù hợp với sở thích của nhiều người.
                                    Áo khoác da nữ được thiết kế form ôm body tạo nên nét trẻ trung, năng động quyến rũ của phái đẹp',
                'user_id' => '1',
                'category_id' => '4',
                'discount' => '90000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Áo sơ mi nam tay ngắn họa tiết viền vuông KRASM83',
                'image' => '/storage/products/ao-so-mi-nam-1.jpg',
                'slug' => 'ao-so-mi-nam-ngan-tay-hoa-tiet-vien-vuong',
                'price' => '300000',
                'type' => '0',
                'description' => 'Áo sơ mi nam tay ngắn họa tiết viền vuông KRASM83 là chiếc áo không thể thiếu trong tủ đồ của các chàng trai. Với thiết kế mới mẻ cùng với những đường kẻ sọc của vải khiến áo nhìn trong rất bắt mắt và thu hút được từ mọi góc nhìn, họa tiết caro to với thiết kế thanh lịch cách điệu đem lại cho phái nam vẻ ngoài sang trọng, phong cách và chỉn chu. Áo sơ mi xưa nay vẫn là dòng sản phẩm được chàng ưa chuộng, với chất liệu cotton mềm mại, thoáng mát là phổ biến nhất.Họa tiết caro vuông, cho chàng thêm nổi bật và ấn tượng, dễ kết hợp với nhiều trang phục khác. Đường chỉ may tỉ mỉ, chắc chắn đem đến cho bạn nam một form áo đẹp, thích hợp đi làm, đi học hay đi chơi. Và áo sơ mi là trang phục không thể thiếu trong tủ đồ của mỗi chàng trai. Áo có nút gài phía trước giúp bạn nam có thể mặc vào hay thay ra một cách dễ dàng, tiện lợi.Chất liệu cotton đem lại cảm giác mát mẻ, thấm hút tốt, thoáng mát cho phái mạnh dễ dàng diện trong mọi hoàn cảnh. Chất liệu này được dùng phổ biến nhất trong may mặc vì những tính năng vượt trội như giặt nhanh khô, giãn nhẹ và lâu hỏng nếu biết cách sử dụng, là chất liệu luôn được lòng người tiêu dùng. Áo sơ mi nam tay ngắn cao cấp KRASM83 được thiết kế tinh tế và nhã nhặn với chất liệu cotton cao cấp và đường may chắn chắn, tỉ mỉ - một sản phẩm cao cấp cho phái mạnh.',
                'user_id' => '1',
                'category_id' => '5',
                'discount' => '0',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Áo sơ mi nam họa tiết thổ cẩm KRASM81',
                'image' => '/storage/products/ao-so-mi-nam-2.jpg',
                'slug' => 'ao-so-mi-nam-hoa-tiet-tho-cam',
                'price' => '500000',
                'type' => '0',
                'description' => 'Chiếc áo sơ mi nam  hoa tiết thổ cẩm KRASM81 với hai đường viền màu đỏ nối liền nhau tạo nên nét trẻ trung năng động. Song song đó là những họa tiết đường nét thỏ cẩm rất mới lạ bắt mắt người nhìn. Một chiếc áo đầy đủ sự tinh tế và mới mẻ là điều không thể thiếu trong chiếc tủ quần áo của đàn ông. Hãy tự trang bị cho mình một phong cách mới thích hợp với mình. Đường may tỉ mỉ form thoải mái khiến bạn tự tin năng động trong mọi trường hợp. Chất liệu cotton đem lại cảm giác mát mẻ, thấm hút tốt, thoáng mát cho phái mạnh dễ dàng diện trong mọi hoàn cảnh. Chất liệu này được dùng phổ biến nhất trong may mặc vì những tính năng vượt trội như giặt nhanh khô, giãn nhẹ và lâu hỏng nếu biết cách sử dụng, là chất liệu luôn được lòng người tiêu dùng.Dễ đi kèm với các phụ kiện thời trang mới. Áo có thể kết hợp với quần kaki, quần jeans mà vẫn thoải mái không gò bó.',
                'user_id' => '1',
                'category_id' => '5',
                'discount' => '490000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Áo sơ mi họa tiết ánh sao KRASM80',
                'image' => '/storage/products/ao-so-mi-nam-3.jpg',
                'slug' => 'ao-so-mi-hoa-tiet-anh-sao',
                'price' => '200000',
                'type' => '0',
                'description' => 'Áo sơ mi được thiết kế với phong cách trẻ trung năng đông. Họa tiết ánh sao ở hai bên áo làm nổi bật áo so với những áo sơ mi thông thường. Áo sơ mi là thứ mà một người đàn ông trưởng thành không thể thiếu khi bước ra đường, sự lịch lãm và trưởng thành đều được gói trọn trong chiếc áo. Với những đường may thiết kế tinh tế bạn sẽ không cần lo sự co giản thoải mái khi hoạt động tạo thêm sự tự tin cho bạn. Chất liệu vải cotton thấm hút mồ hôi, làm mát cơ thể giúp bạn thoải mái vui chơi, vận động, đặc biệt phù hợp với thời tiết mùa hè. Thiết kế nhiều dáng cách điệu khác nhau, mau khô, mặt vải phẳng mịn nên bạn sẽ yên tâm hơn mỗi lúc giặt giũ, cũng như việc bảo quản trong quá trình sử dụng, không cần là lượt nên vẫn được nhiều bạn trẻ tin dùng.Dễ phối với các loại quần jeas, quần kaki, quần bò,..Đi kèm theo các phụ kiện thời trang hiện đại.',
                'user_id' => '1',
                'category_id' => '5',
                'discount' => '0',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'ÁO SƠ MI BASIC TAY CÁNH DƠI',
                'image' => '/storage/products/ao-so-mi-nu-1.jpg',
                'slug' => 'ao-so-mi-nu-basic-tay-canh-doi',
                'price' => '400000',
                'type' => '1',
                'description' => 'với chất liệu voan tơ nhung loại 1, dày dặn nhưng vô cùng thoáng mát mang lại cho bạn sự thoải mái và năng động, vì là hàng shop tự lên, nên shop tự tin về chất lượng và giá thành sản phẩm nhé <3
                                sỉ số lượng lớn giá tốt vui lòng liên hệ để biết thêm chi tiết
                                Mấy chị mấy bạn mua áo vui lòng xem kĩ hình hộ shop nhé, tay áo là TAY CÁNH DƠI nha, vì có thím mua trong shop xong bảo phần vai dài quá phần tay thì ngắn e giải thích đến mệt nh',
                'user_id' => '1',
                'category_id' => '5',
                'discount' => '380000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Áo sơ mi nữ thời trang, kiểu dáng dài tay, phong cách thanh lịch',
                'image' => '/storage/products/ao-so-mi-nu-2.jpg',
                'slug' => 'ao-so-mi-nu-thoi-trang-kieu-dai-tay-phong-cach',
                'price' => '200000',
                'type' => '1',
                'description' => 'Loại sản phẩm : Áo sơ mi voanLoại hàng : có sẵnChất liệu : vải voanThành phần chất liệu chính : CottonHàm lượng thành phần chất liệu chính : 81%-90%Thành phần chất liệu chính : CottonThành phần chất liệu : CottonThành phần chất liệu : CottonThành phần nguyên liệu : khácPhong cách : thoải máiHọa tiết : một màuNguồn gốc ảnh : nguồn khácKiểu dáng : chui đầu, kiểu rộngCông nghệ : khácThương hiệu : khácMã hàng : 9391Nơi sản xuất : Quảng ChâuTồn kho : cóLoại hình tồn kho : cả lôĐộ dài áo : kiểu cơ bản (50cm <độ dài áo≤65cm)Kiểu cổ : Cổ đứngKiểu tay áo : tay đèn lồngĐộ dài tay áo : Dài tayThiết kế nổi bật : Ghép nối,Vải lưới,khác',
                'user_id' => '1',
                'category_id' => '5',
                'discount' => '0',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Áo sơ mi voan nữ thời trang, kiểu dáng tay loe, họa tiết xinh xắn',
                'image' => '/storage/products/ao-so-mi-nu-3.jpg',
                'slug' => 'ao-so-mi-nu-kieu-dang-tay-loe-hoa-tiet-xinh',
                'price' => '500000',
                'type' => '1',
                'description' => 'Loại sản phẩm : Áo sơ mi voanLoại hàng : 
                                  có sẵnChất liệu : CottonThành phần chất liệu chính : khácHàm lượng 
                                  thành phần chất liệu chính : 100%Thành phần chất liệu chính : CottonThành phần 
                                  chất liệu : CottonThành phần chất liệu : CottonThành phần nguyên liệu : 
                                  khácPhong cách : khácHọa tiết : khácNguồn gốc ảnh : nguồn khácKiểu dáng : 
                                  chui đầuCông nghệ : khácThương hiệu : khácMã hàng : 188-8887Nơi sản xuất : 
                                  khácTồn kho : cóKiểu cổ : khácKiểu tay áo : khácThiết kế nổi bật : khácMùa : hè 2017',
                'user_id' => '1',
                'category_id' => '5',
                'discount' => '450000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Áo Thun Nam Tay Ngắn In Họa Tiết Adidas #Store4Men',
                'image' => '/storage/products/ao-thun-nam-1.jpg',
                'slug' => 'ao-thun-nam-tay-ngan-in-hoa-tiet',
                'price' => '300000',
                'type' => '0',
                'description' => 'Áo thun: Cotton 4 chiều cao cấp, co giãn tốt, thoáng mát. 
                                  + Hình in bằng loại mực tốt, không độc hại, đảm bảo không bung tróc. ',
                'user_id' => '1',
                'category_id' => '6',
                'discount' => '180000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Áo ngắn tay adidas thể thao',
                'image' => '/storage/products/ao-thun-nam-2.jpg',
                'slug' => 'ao-tay-ngan-adidas-the-thao',
                'price' => '50000',
                'type' => '0',
                'description' => 'Áo ngắn tay in hình 3d , trẻ trung, năng động. 
                                  Được làm bằng chất liệu vải thun lạnh thoáng mát . 
                                  hình được in nhiệt không bị bong tróc khi giặt máy.',
                'user_id' => '1',
                'category_id' => '6',
                'discount' => '0',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Áo thun ngắn tay Gu nổi',
                'image' => '/storage/products/ao-thun-nam-3.jpg',
                'slug' => 'ao-thun-ngan-tay-gu-noi',
                'price' => '300000',
                'type' => '0',
                'description' => 'NHẰM PHỤC VỤ QUÝ KHÁCH TỐT NHẤT 
                                  KHI MUA HÀNG TẠI SHOP, QUÝ KHÁCH LƯU Ý MỘT SỐ VẤN ĐỀ 
                                  SAU TRÊN TINH THẦN HỢP TÁC VUI VẺ: VỪA LÒNG KHÁCH ĐẾN 
                                  - VUI LÒNG KHÁCH ĐI - Khi đặt hàng xong Quý khách vui lòng 
                                  nghe máy trong thời gian giao hàng để bên vận chuyển giao hàng 
                                  liên lạc kịp thời để đưa sản phẩm đến quý khách một cách nhanh nhất. 
                                  - Khi nhận được hàng quý khách vui lòng bỏ chút thời gian để 
                                  đánh giá giúp shop " 5 SAO " để shop có chiều hướng phục vụ 
                                  tốt hơn cho quý khách những lần sau. - Sản phẩm vẫn còn hiển 
                                  thị ở trên shop nghĩa là vẫn còn hàng nên quý khách cứ yên tâm 
                                  đặt mua hàng tại shop. Shop sẽ giao " ĐÚNG MÀU ĐÚNG MẪU " 
                                  khi khách yêu cầu. Shop chuyên SỈ - LẺ tất cả các mặt hàng gia dụng, thời trang. ',
                'user_id' => '1',
                'category_id' => '6',
                'discount' => '0',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Áo thun nam nữ tay dài phối màu SID35957',
                'image' => '/storage/products/ao-thun-nu-1.jpg',
                'slug' => 'ao-thun-nu-tay-dai-phoi-mau',
                'price' => '150000',
                'type' => '1',
                'description' => 'Áo thun nam nữ tay dài phối màu: 
                                  Chất liệu Thun mềm mại, thoải mái khi sử dụng. 
                                  Thiết kế vải màu xanh phối đỏ, trắng thật nổi bật, 
                                  sự phối màu hài hòa.',
                'user_id' => '1',
                'category_id' => '6',
                'discount' => '0',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Áo thun nam nữ Green họa tiết',
                'image' => '/storage/products/ao-thun-nu-2.jpg',
                'slug' => 'ao-thun-nu-green-hoa-tiet',
                'price' => '200000',
                'type' => '1',
                'description' => 'Áo thun nam nữ Green họa tiết: 
                                  Chất liệu thun da cá co giãn tốt, thoáng mát thấm hút mồ hôi tốt. 
                                  Thiết kế đơn giản với cổ tròn, tay ngắn mang đến sự trẻ trung, 
                                  năng động cho bạn khi mặc trong mùa hè này',
                'user_id' => '1',
                'category_id' => '6',
                'discount' => '0',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Áo thun nữ họa tiết năng động ',
                'image' => '/storage/products/ao-thun-nu-3.jpg',
                'slug' => 'ao-thun-nu-hoa-tiet-nang-dong',
                'price' => '400000',
                'type' => '1',
                'description' => 'Áo thun nam nữ họa tiết năng động: Chất liệu thun mềm mại, 
                                  thoáng mát khi sử dụng. Thiết kế cổ tròn tay ngắn năng động và 
                                  cá tính, sản phẩm có màu sắc tươi tắn, bắt mắt hợp thời trang',
                'user_id' => '1',
                'category_id' => '6',
                'discount' => '0',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Dây lưng nam da bò cách điệu DJLA133-NDO',
                'image' => '/storage/products/that-lung-nam-1.jpg',
                'slug' => 'day-lung-nam-da-bo-cach-dieu',
                'price' => '500000',
                'type' => '0',
                'description' => 'Chất liệu da bò 100% nhập khẩu Châu Âu
                                    Mặt khóa ngũ kim chống xước, không gỉ
                                    Thân dây phối màu nổi bật, trẻ trung
                                    Màu: Nâu đỏ',
                'user_id' => '1',
                'category_id' => '10',
                'discount' => '400000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Dây lưng nam da bò trơn DJLA314-N',
                'image' => '/storage/products/that-lung-nam-2.jpg',
                'slug' => 'day-lung-nam-da-bo-tron',
                'price' => '400000',
                'type' => '0',
                'description' => 'Mặt khóa ngũ kim chống xước, không gỉ
                            Da trơn đơn giản
                            Khóa xỏ kim
                            Họa tiết tên thương hiệu ở cuối thân dây
                            Màu: Nâu',
                'user_id' => '1',
                'category_id' => '10',
                'discount' => '300000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Thắt lưng nam da bò siêu bền DJLA1017-N',
                'image' => '/storage/products/that-lung-nam-3.jpg',
                'slug' => 'day-lung-nam-da-bo-sieu-ben',
                'price' => '400000',
                'type' => '0',
                'description' => 'Mặt khóa ngũ kim chống xước, không gỉ
                                Da trơn
                                Khóa xỏ kim
                                Màu: Nâu
                                Kích thước (Độ rộng dây x Độ dài dây): 3.7cm x 120cm',
                'user_id' => '1',
                'category_id' => '10',
                'discount' => '300000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Thắt lưng nữ Huy Hoàng da bò màu đỏ - HS5116',
                'image' => '/storage/products/that-lung-nu-1.jpg',
                'slug' => 'that-lung-nu-huy-hoang-da-bo-mau-do',
                'price' => '1000000',
                'type' => '1',
                'description' => ' Nhãn hiệu Huy Hoàng thuộc sở hữu của công ty TNNH Thế Giới Huy Hoàng được đăng ký độc quyền. Tất cả các dòng sản phẩm chính của công ty như ví da, thắt lưng, túi xách, giày dép,… đều được sản xuất bởi những thợ thủ công chuyên nghiệp, có tay nghề cao. 
                                  Thắt lưng nữ Huy Hoàng là loại dây nịt được làm và xử lý công nghệ hiện đại từ da bò thật 100%.
                                - Thắt lưng nữ Huy Hoàng với chất liệu da bò thật được xử lý đúng theo quy trình nên sử dụng càng lâu thì dây nịt sẽ càng mềm mại, dẻo dai, bền màu và tăng độ bóng mịn.
                                - Bề mặt dây nịt da không bị rạn nứt hoặc bị gãy theo thời gian.
                                - Thắt lưng nữ Huy Hoàng có thể thoải mái điều chỉnh kích cỡ thắt lưng theo số đo vòng 2.
                                - Thắt lưng nữ Huy Hoàng có kiểu dáng sang trọng, màu sắc tinh tế, lịch lãm để bạn thoải mái lựa chọn.
                                - Sản phẩm của Huy Hoàng được làm bằng chất liệu da bò cao cấp,là sản phẩm tin cậy của bạn.
                                - Một chiếc Thắt lưng nữ Huy Hoàng sẽ góp phần tạo nên cá tính, phong cách cũng như khẳng định khiếu thẩm mỹ của bạn.
                                - Sản phẩm dễ dàng phối với quần jean, quần kaiki... Mang lại vẻ thanh lịch, hiện đại và trẻ trung cho bạn.',
                'user_id' => '1',
                'category_id' => '10',
                'discount' => '800000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Dây nịt nữ da cá sấu cao cấp',
                'image' => '/storage/products/that-lung-nu-2.jpg',
                'slug' => 'day-nit-nu-da-ca-sau-cao-cap',
                'price' => '400000',
                'type' => '1',
                'description' => ' Chiều dài sợi dây nịt nữ da cá sấu: 80 cm -100 cm.
                                - Bề rộng có các kích thước như sau: loại 1.5 cm, 2 cm, và 2.4 cm
                                - Dây nịt nữ da cá sấu được làm bằng 3 lớp da ép chặt lại với nhau, lớp ngoài cùng là da cá sấu, có một lớp da ở giữa và lớp trong cùng làm từ da bò cao cấp.
                                - Đầu dây nịt nữ được làm từ I nox trắng và đầu mạ vàng',
                'user_id' => '1',
                'category_id' => '10',
                'discount' => '0',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Thắt lưng nữ khóa cài bản to Hàn Quốc SID44500',
                'image' => '/storage/products/that-lung-nu-3.jpg',
                'slug' => 'that-lung-nu-khoa-cai-ban-to-han-quoc',
                'price' => '100000',
                'type' => '1',
                'description' => 'Thắt lưng nữ khóa cài bản to Hàn Quốc: Chất liệu simili mềm mại, bền bỉ, cho thời gian sử dụng lâu bền. Thiết kế theo phong cách Hàn với kiểu dáng trơn thanh mảnh, vừa sang trọng vừa giúp bạn gái che khuyết điểm của vòng 2 và tôn dáng hiệu quả',
                'user_id' => '1',
                'category_id' => '10',
                'discount' => '0',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'VÍ GẤP MÀU BÒ',
                'image' => '/storage/products/vi-nam-1.jpg',
                'slug' => 'vi-nam-gap-mau-bo',
                'price' => '200000',
                'type' => '0',
                'description' => 'Ví Gấp với kiểu 3 gấp nhỏ fonj nhưng vẫn có đầy đủ các ngăn như  mọi chiếc ví lớn khác.
                                  Ví có 2 ngăn chính lớn trong đó có 1 ngăn có khóa kéo.
                                  Ví có nhiều ngăn nhỏ tện để card, ATM,...và 1 ngăn trong suốt đựng hình
                                  Kích thước: 11 x 8cm, khi mở ra rộng 22cm',
                'user_id' => '1',
                'category_id' => '11',
                'discount' => '0',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'VÍ GẤP MÀU NÂU',
                'image' => '/storage/products/vi-nam-2.jpg',
                'slug' => 'vi-nam-mau-nau',
                'price' => '100000',
                'type' => '0',
                'description' => 'Ví Gấp với kiểu 3 gấp nhỏ fonj nhưng vẫn có đầy đủ các ngăn như  mọi chiếc ví lớn khác.
                                  Ví có 2 ngăn chính lớn trong đó có 1 ngăn có khóa kéo.
                                  Ví có nhiều ngăn nhỏ tện để card, ATM,...và 1 ngăn trong suốt đựng hình',
                'user_id' => '1',
                'category_id' => '11',
                'discount' => '90000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'VÍ BOCA MÀU NÂU ÁNH TÍM',
                'image' => '/storage/products/vi-nam-3.jpg',
                'slug' => 'vi-nam-boca-mau-nau-tim',
                'price' => '300000',
                'type' => '0',
                'description' => 'Chất liệu da bò tự nhiên
                                  Logo thương hiệu Lee&Tee dập chìm bên ngoài
                                  Có 2 ngăn chính lớn
                                  Có nhiều ngăn nhỏ đựng card',
                'user_id' => '1',
                'category_id' => '11',
                'discount' => '0',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'CLUTCH MK MÀU NÂU',
                'image' => '/storage/products/vi-nu-1.jpg',
                'slug' => 'vi-nu-clutch-mk-mau-nau',
                'price' => '100000',
                'type' => '1',
                'description' => 'Clutch cầm tay MK có thiết kế dáng hộp chữ nhật sang trọng phù hợp cho những buổi dạo phố hay dự tiệc',
                'user_id' => '1',
                'category_id' => '11',
                'discount' => '0',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'VÍ TEMA MÀU BÒ',
                'image' => '/storage/products/vi-nu-2.jpg',
                'slug' => 'vi-nu-tema-mau-bo',
                'price' => '500000',
                'type' => '1',
                'description' => 'Chất liệu da tổng hợp cao cấp, không nổ da, không bong tróc (trừ khi bị ma sát quá nhiều hoặc bị lực tác động mạnh sẽ bị mòn hoặc xước da). Bề mặt da chống chống thấm nước. Dễ dàng được vệ sinh với xà phòng và nước. Có khả năng chịu được môi trường thời tiết khắc nghiệt.',
                'user_id' => '1',
                'category_id' => '11',
                'discount' => '490000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'VÍ CẦM TAY THEMIS MÀU NÂU',
                'image' => '/storage/products/vi-nu-3.jpg',
                'slug' => 'vi-nu-cam-tay-themis-mau-nau',
                'price' => '300000',
                'type' => '1',
                'description' => 'Ví cầm tay THEMIS được Lee&Tee thiết kế dạng 3 gấp. Có 2 ngăn lớn, 1 ngăn dây kép phụ.',
                'user_id' => '1',
                'category_id' => '11',
                'discount' => '290000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Gọng Kính Unisex Jubilant J 30008 BLK (52/17/140) - Đen',
                'image' => '/storage/products/kinh-nam-1.jpg',
                'slug' => 'gong-kinh-nam-Jubilant-j',
                'price' => '20000',
                'type' => '0',
                'description' => 'Gọng bằng nhựa Plastic cứng cáp và bền bỉ
                                  Ôm sát gương mặt thoải mái, chống trơn tuột
                                  Thiết kế gọng vuông bo cong trẻ trung và hiện đại
                                  Tông màu đơn giản, dễ phối đồ',
                'user_id' => '1',
                'category_id' => '12',
                'discount' => '0',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Kính Mát Sun Glass Brio Đỏ',
                'image' => '/storage/products/kinh-nam-2.jpg',
                'slug' => 'kinh-mat-sun-glass-brio',
                'price' => '300000',
                'type' => '0',
                'description' => 'Quà tặng kèm kính bảo hộ chất lượng cao
                                  Gọng bằng nhựa tổng hợp bền bỉ, chống biến dạng
                                  Tròng Polycarbonate ngăn chặn tia cực tím đến 99,9%, không trầy hay nứt vỡ',
                'user_id' => '1',
                'category_id' => '12',
                'discount' => '0',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Kính Mát Phân Cực Unisex Veithdia',
                'image' => '/storage/products/kinh-nam-3.jpg',
                'slug' => 'kinh-mat-phan-cuc-unisex',
                'price' => '100000',
                'type' => '0',
                'description' => 'Chất liệu gọng hợp kim Magie cao cấp .Chức năng phân cực với chỉ số UV 400.Bảo vệ mắt chống lại các tia UVA và tia UVB.Phù hợp với tiêu chuẩn an toàn của ECC',
                'user_id' => '1',
                'category_id' => '12',
                'discount' => '0',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Kính Mát Nữ Carrera',
                'image' => '/storage/products/kinh-nu-1.jpg',
                'slug' => 'kinh-mat-nu-carrera',
                'price' => '40000',
                'type' => '1',
                'description' => 'Gọng Plastic phối Titan bền nhẹ, cứng cáp và chống biến dạng
                                    Tròng Polycarbonate chống tia tử ngoại, tia UV giúp bảo vệ mắt
                                    Thiết kế sang trọng, kiểu dáng gọng bo cong ấn tượng
                                    Hàng chính hãng nhập khẩu từ Ý
                                    Bảo hành 3 năm',
                'user_id' => '1',
                'category_id' => '12',
                'discount' => '0',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Kính Mát Unisex Exfash',
                'image' => '/storage/products/kinh-nu-2.jpg',
                'slug' => 'kinh-mat-unisex-exfash',
                'price' => '50000',
                'type' => '1',
                'description' => 'Gọng làm bằng hợp kim Titanium cứng cáp, bền bỉ
                                  Tròng Polycarbonate chống chói, chống tia UV bảo vệ mắt
                                  Kiểu dáng gọng vuông bo cong hiện đại
                                  Phối màu tráng gương sành điệu',
                'user_id' => '1',
                'category_id' => '12',
                'discount' => '0',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Kính Mát Unisex PAN',
                'image' => '/storage/products/kinh-nu-3.jpg',
                'slug' => 'kinh-mat-unisex-pan',
                'price' => '80000',
                'type' => '1',
                'description' => 'Gọng kim loại bền bỉ, cứng cáp và chống chịu va đập
                                  Trọng lượng nhẹ, ôm sát gương mặt thoải mái
                                  Chống tia tử ngoại, tia UV giúp bảo vệ mắt tốt hơn
                                  Khung tròng vuông bo tròn độc đáo
                                  Tông màu trẻ trung, dễ sử dụng',
                'user_id' => '1',
                'category_id' => '12',
                'discount' => '0',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Quần Bò Jean Jeans Nam',
                'image' => '/storage/products/quan-jean-nam-1.jpg',
                'slug' => 'quan-no-jean-jeans-nam',
                'price' => '400000',
                'type' => '0',
                'description' => 'Quần Bò Jean Jeans Nam ống Suông Co giãn chất đẹp
                                  Chất liệu: jean; dày dặn; thoáng mát; sợi dệt chéo.
                                  Quần được thiết kế với kiểu dáng ống thẳng thanh lịch; phù hợp với mọi dáng người; dễ phối đồ; dễ đẹp.
                                  Thích hợp mặc vào nhiều dịp khác nhau như đi học; đi làm hay đi chơi.
                                  Kích thước: Vòng eo x vòng mông x chiều dài',
                'user_id' => '1',
                'category_id' => '7',
                'discount' => '0',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Quần jean nam Kojiba siêu bền',
                'image' => '/storage/products/quan-jean-nam-2.jpg',
                'slug' => 'quan-jean-nam-kojiba-sieu-ben',
                'price' => '1000000',
                'type' => '0',
                'description' => 'Bền màu sắc, sáng dáng quần, vững vàng về giá là những thông điệp tuyệt vời mà sản phẩm Kojiba muốn đưa đến tất cả khách hàng.
                                  Sản xuất tại  Việt Nam nhưng trên dây truyền, công nghệ hiện đại của Nhật Bản, 1 đất nước nổi tiếng thế giới về chất lượng cũng như truyền thống lâu đời trong sản xuất quần jean
                                  Quy trình chọn lọc vải trải qua nhiều công đoạn tỉ mỉ , được nhập trực tiếp từ Ấn Độ nơi mà nền công nghiệp dệt vải xuất khẩu đang phát triển ngày một mạnh mẽ, đảm bảo chất lượng cũng như nguồn gốc của sản phẩm. Khâu xử lí màu," giặt , là , hấp " được kiểm tra nghiêm ngặt đảm bảo an toàn lao động và đạt tiêu chuẩn không gây độc hại , kích ứng da đối với người sử dụng',
                'user_id' => '1',
                'category_id' => '7',
                'discount' => '800000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Quần jean Titishop',
                'image' => '/storage/products/quan-jean-nam-3.jpg',
                'slug' => 'quan-jean-nam-titishop',
                'price' => '100000',
                'type' => '0',
                'description' => 'Quần jean Titishop may chỉ nổi mài rách màu xanh da trời sở hữu kiểu dáng năng động với thiết kế mài rách cá tính mang đến phong cách thời trang hiện đại, thoải mái. Thêm vào đó, sản phẩm sử dụng chất liệu vải jean cao cấp, đường may tỉ mỉ giúp quần có độ bền cao.',
                'user_id' => '1',
                'category_id' => '7',
                'discount' => '0',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Quần short thể thao',
                'image' => '/storage/products/quan-short-nam-1.jpg',
                'slug' => 'quan-nam-short-the-thao',
                'price' => '90000',
                'type' => '0',
                'description' => 'Vải dù thể thao co giản nhẹ, mượt mịn thoáng mát, thích hợp vận động thoải mái',
                'user_id' => '1',
                'category_id' => '9',
                'discount' => '0',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Quần short jean cao cấp',
                'image' => '/storage/products/quan-short-nam-2.jpg',
                'slug' => 'quan-short-jean-cao-cap',
                'price' => '30000',
                'type' => '0',
                'description' => 'Chất liệu: Jaen Co giãn nhẹ cao cấp ,màu sắc tinh tế áo sẽ tạo cảm giác trẻ trung cho người mặc. - Chất liệu vải kaki  co giãn nhẹ . sản phẩm là sự lựa chọn hoàn hảo cho những chàng trai năng  động',
                'user_id' => '1',
                'category_id' => '9',
                'discount' => '0',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'QUẦN SHORT NAM BESTBUY',
                'image' => '/storage/products/quan-short-nam-3.jpg',
                'slug' => 'quan-short-nam-bestbuy',
                'price' => '150000',
                'type' => '0',
                'description' => 'THÍCH HỢP CHO KHÍ HẬU VIỆT NAM',
                'user_id' => '1',
                'category_id' => '9',
                'discount' => '130000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Quần tây công sở nữ',
                'image' => '/storage/products/quan-tay-nu-1.jpg',
                'slug' => 'quau-tay-nu',
                'price' => '200000',
                'type' => '1',
                'description' => 'Quần tây công sở nữ, màu trắng, vải linen rũ mềm cực sang. Chất vải linen như gân bố mặc vô cùng nhẹ nhàng thoáng mát. ',
                'user_id' => '1',
                'category_id' => '8',
                'discount' => '0',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Quần nữ quần jean lưng cao',
                'image' => '/storage/products/quan-jean-nu-1.jpg',
                'slug' => 'quan-jean-nu-lung-cao',
                'price' => '500000',
                'type' => '1',
                'description' =>'quần jean lưng cao màu đen sử dụng cotton mảnh chải kỹ 95% thấm hút mồ',
                'user_id' => '1',
                'category_id' => '7',
                'discount' => '0',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Quần jean nữ harem',
                'image' => '/storage/products/quan-jean-nu-2.jpg',
                'slug' => 'quan-jean-nu-harem',
                'price' => '50000',
                'type' => '1',
                'description' =>'quần harem nữ sử dụng nguyên liệu sợi bông có nguồn gốc thiên nhiên mang đến cảm nhận Relax và dễ chịu cho làn da.
                                 Thoát nhiệt tự nhiên của cơ thể qua quần harem nữ',
                'user_id' => '1',
                'category_id' => '7',
                'discount' => '0',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Quần nữ quần jean nữ đẹp màu trắng ',
                'image' => '/storage/products/quan-jean-nu-3.jpg',
                'slug' => 'quan-nu-jean-dep-mau-trang',
                'price' => '500000',
                'type' => '1',
                'description' =>'Khả năng thoát hơi nước và thấm hút mồ hôi qua quần jean nữ đẹp màu trắng:
                                 quần jean nữ đẹp màu trắng với kết cấu cho không khí lưu thông qua vải nhanh để đem đi 18->1500ml nước mỗi giờ thoát ra theo bản năng của cơ thể dưới trạng thái hơi nước để làm giảm đi 10.8kcal-870kcal nhiệt lượng từ cơ thể mỗi giờ làm cơ thể mát mẻ, vật liệu sợi bông thiên nhiên của quần nữ thấm hút nhanh chóng mồ hôi đọng trên da không ngăn chặn việc thoát nhiệt khi cơ thể vã mồ hôi để da không bị kích ứng, mẩn ngứa hay viêm da do bít lỗ chân lông.',
                'user_id' => '1',
                'category_id' => '7',
                'discount' => '0',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Quần Tây Kaki Nam Hàn Quốc',
                'image' => '/storage/products/quan-tay-nam-1.jpg',
                'slug' => 'quan-tay-nam-kaki-han-quoc',
                'price' => '200000',
                'type' => '0',
                'description' =>' Loại sản phẩm: Quần tây kaki nam.
                                  Chất liệu: kaki, nhẹ, mát, sợi dệt chéo.
                                  Quần được thiết kế với kiểu dáng ống thẳng thanh lịch, phù hợp với mọi dáng người, dễ phối đồ, dễ đẹp.',
                'user_id' => '1',
                'category_id' => '8',
                'discount' => '180000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Quần Tây 0Ly Màu Trơn Đen',
                'image' => '/storage/products/quan-tay-nam-2.jpg',
                'slug' => 'quan-tay-oly-mau-den',
                'price' => '300000',
                'type' => '0',
                'description' =>'Quần tây 0ly 425 được thiết kế theo form dáng chuẩn của hình thể người Việt Nam. Chất liệu quần thoáng mát phù hợp với thời tiết miền nhiệt đới. Cùng với đường cắt may tinh xảo tạo cho người mặc vẻ đẹp sang trọng và lịch lãm.',
                'user_id' => '1',
                'category_id' => '8',
                'discount' => '250000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Quần Tây Cotton',
                'image' => '/storage/products/quan-tay-nam-3.jpg',
                'slug' => 'quan-tay-cotton',
                'price' => '100000',
                'type' => '0',
                'description' =>'Quần Tây Cotton Lụa Ống Côn Co Giãn MT01 Xanh Đen',
                'user_id' => '1',
                'category_id' => '8',
                'discount' => '0',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Quần shorts váy nữ',
                'image' => '/storage/products/quan-short-nu-1.jpg',
                'slug' => 'short-nu-vay-nu',
                'price' => '200000',
                'type' => '1',
                'description' =>'Quần short váy nữ thuộc BST Những con sóng màu xanh lấy cảm hứng từ biển. Chiếc quần trẻ trung với kiểu dáng cách điệu và được nhấn bằng đai nơ, túi ốp to. Quần được dệt từ 100% sợi polyester khiến quần đứng dáng, hạn chế được nhăn nhàu khi cử động và bền màu khi giặt.',
                'user_id' => '1',
                'category_id' => '9',
                'discount' => '0',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Quần shorts lửng',
                'image' => '/storage/products/quan-short-nu-2.jpg',
                'slug' => 'short-lung',
                'price' => '30000',
                'type' => '1',
                'description' =>'Quần short lửng thuộc dòng Casual Season. Quần có dáng ôm, ống côn trẻ trung với độ dài qua gối, lịch sự để đi làm. Chất liệu khaki từ sợi cotton và spandex tạo ra bề mặt vải dày dặn, có khả năng co giãn để bạn cử động thoải mái.',
                'user_id' => '1',
                'category_id' => '9',
                'discount' => '0',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Quần shorts nữ vay xanh',
                'image' => '/storage/products/quan-short-nu-3.jpg',
                'slug' => 'short-nu-vay-xanh',
                'price' => '120000',
                'type' => '1',
                'description' =>'Quần short nữ dáng A thuộc dòng Casual season. Bạn sẽ vô cùng thích thú khi diện chiếc quần đem tới cảm giác êm dịu trên da, có khả năng co giãn khiến mọi cử động của bạn thật dễ dàng. Cùng với các gam màu pastel nhẹ nhàng, tươi sáng bạn hoàn toàn có thể kết hợp cùng với mọi chiếc áo phông trong tủ đồ.',
                'user_id' => '1',
                'category_id' => '9',
                'discount' => '0',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ]);
    }
}
