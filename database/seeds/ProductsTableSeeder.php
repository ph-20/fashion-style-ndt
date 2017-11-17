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
                'image' => 'ac-khoac-nam-1.jpg',
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
                'discount' => '150000'
            ],
            [
                'name' => 'Áo khoác da thời trang cao cấp KRAKN94',
                'image' => 'ac-khoac-nam-2.jpg',
                'slug' => 'ao-khoac-da-thoi-trang-cao-cap-KRAKN94',
                'price' => '200000',
                'type' => '0',
                'description' => 'Kiểu áo khoác da không chỉ vô cùng ấm áp mà còn đem tới cho bạn gái vẻ đẹp “lạ”. Mang đến cho các bạn nam vẻ đẹp nam tính, khỏe khoắn... Nếu đã thử mặc và nhìn vào những bộ ảnh thời trang mới nhất, hẳn bạn sẽ không thể không mua ngay nó cho mình.Áo được may hoàn toàn bằng da mềm mại tạo cho áo vẻ dày dạn và ấm áp, giúp bạn giữ ấm tốt trong những ngày trời se lạnh, đồng thời giúp bạn che nắng hiệu quả hơn mỗi khi ra đường.
                                   Đường may tinh tế, tỉ mỉ, khéo léo cùng dây kéo bền đẹp, chắc chắn tạo cho bạn một vẻ sang trọng và lịch lãm, tăng thêm cho sản phẩm có được độ hoàn hảo trong quá trình sử dụng.Túi trước ngực phối dây kéo độc đáo, cùng với 2 túi xéo trước được may kèm dây kéo tiện lợi, bạn có thể cất giữ các phụ kiện cá nhân nhỏ an toàn mà không sợ bị rơi rớt.
                                   Cổ tay được may nút bấm tiện lợi, tạo sự thoải mái cho bạn khi vận động.
                                   Dây kéo chắc chắn, bền, đường may cẩn thận, màu sắc nam tính đem lại sự trẻ trung, lịch lãm và sang trọng.
                                   Các bạn nam ưa thích phong cách lịch lãm thì chắc chắn sản phẩm lần này sẽ níu chân bạn lại ngắm nghía khá lâu rồi đấy.Chất liệu da mạnh mẽ, cá tính, tông màu nâu và đen sang trọng, cùng chiếc cổ đứng thời thượng, hòa quyện giúp sản phẩm trở nên bắt mắt thu hút mọi ánh nhìn. Với chiếc áo khoác da nam thời trang cao cấp này bạn sẽ dễ dàng mix với các trang phục khác như chiếc áo thun, áo sơ mi bên trong, hay các phụ kiện thời trang như đồng hồ, mắt kính,…để tạo nên phong cách riêng cho bản thân. Sử dụng chiếc áo trong những ngày se lạnh, đi làm, đi học hay đi chơi đều tiện để mang lại cho bạn vẻ đẹp ấn tượng, phong cách lịch lãm trong mắt mọi người xung quanh.',
                'user_id' => '1',
                'category_id' => '4',
                'discount' => '180000'
            ],
            [
                'name' => 'Áo khoác da thời trang cao cấp KRAKN95',
                'image' => 'ac-khoac-nam-3.jpg',
                'slug' => 'ao-khoac-da-thoi-trang-cao-cap-KRAKN95',
                'price' => '250000',
                'type' => '0',
                'description' => 'Kiểu áo khoác da không chỉ vô cùng ấm áp mà còn đem tới cho bạn gái vẻ đẹp “lạ”. Mang đến cho các bạn nam vẻ đẹp nam tính, khỏe khoắn... Nếu đã thử mặc và nhìn vào những bộ ảnh thời trang mới nhất, hẳn bạn sẽ không thể không mua ngay nó cho mình.Áo được may hoàn toàn bằng da mềm mại tạo cho áo vẻ dày dạn và ấm áp, giúp bạn giữ ấm tốt trong những ngày trời se lạnh, đồng thời giúp bạn che nắng hiệu quả hơn mỗi khi ra đường.
                                   Đường may tinh tế, tỉ mỉ, khéo léo cùng dây kéo bền đẹp, chắc chắn tạo cho bạn một vẻ sang trọng và lịch lãm, tăng thêm cho sản phẩm có được độ hoàn hảo trong quá trình sử dụng.Túi trước ngực phối dây kéo độc đáo, cùng với 2 túi xéo trước được may kèm dây kéo tiện lợi, bạn có thể cất giữ các phụ kiện cá nhân nhỏ an toàn mà không sợ bị rơi rớt.
                                   Cổ tay được may nút bấm tiện lợi, tạo sự thoải mái cho bạn khi vận động.
                                   Dây kéo chắc chắn, bền, đường may cẩn thận, màu sắc nam tính đem lại sự trẻ trung, lịch lãm và sang trọng.
                                   Các bạn nam ưa thích phong cách lịch lãm thì chắc chắn sản phẩm lần này sẽ níu chân bạn lại ngắm nghía khá lâu rồi đấy.Chất liệu da mạnh mẽ, cá tính, tông màu nâu và đen sang trọng, cùng chiếc cổ đứng thời thượng, hòa quyện giúp sản phẩm trở nên bắt mắt thu hút mọi ánh nhìn. Với chiếc áo khoác da nam thời trang cao cấp này bạn sẽ dễ dàng mix với các trang phục khác như chiếc áo thun, áo sơ mi bên trong, hay các phụ kiện thời trang như đồng hồ, mắt kính,…để tạo nên phong cách riêng cho bản thân. Sử dụng chiếc áo trong những ngày se lạnh, đi làm, đi học hay đi chơi đều tiện để mang lại cho bạn vẻ đẹp ấn tượng, phong cách lịch lãm trong mắt mọi người xung quanh.',
                'user_id' => '1',
                'category_id' => '4',
                'discount' => '150000'
            ],

        ]);
    }
}
