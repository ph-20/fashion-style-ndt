<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            [
                'email' => 'thanh@rikkeisoft.com',
                'password' => bcrypt('123456'),
                'avatar' => '1.jpg',
                'fullname'=>'Tấn Thành',
                'age'=>'20',
                'phone'=>'0966448783',
                'address'=>'Đà Nẵng',
                'role'=>'0',
                'gender'=>'0',
                'status'=>'1'
            ],
            [
                'email' => 'thanhnamdk2710@gmail.com',
                'password' => bcrypt('nam123'),
                'avatar' => '1.jpg',
                'fullname'=>'Thành Nam',
                'age'=>'23',
                'phone'=>'01634366133',
                'address'=>'Đà Nẵng',
                'role'=>'0',
                'gender'=>'0',
                'status'=>'1'
            ],
            [
                'email' => '15i3lethiduong97@gmail.com',
                'password' => bcrypt('duong1997'),
                'avatar' => '1.jpg',
                'fullname'=>'Le Duong',
                'age'=>'23',
                'phone'=>'01634366653',
                'address'=>'Đà Nẵng',
                'role'=>'0',
                'gender'=>'0',
                'status'=>'1'
            ],
            [
                'email' => 'saleman@gmail.com',
                'password' => bcrypt('123456'),
                'avatar' => '1.jpg',
                'fullname'=>'Bán hàng',
                'age'=>'20',
                'phone'=>'0163312433',
                'address'=>'Đà Nẵng',
                'role'=>'1',
                'gender'=>'1',
                'status'=>'1'
            ],
            [
                'email' => 'customer@gmail.com',
                'password' => bcrypt('123456'),
                'avatar' => '1.jpg',
                'fullname'=>'Khách hàng',
                'age'=>'20',
                'phone'=>'0163312433',
                'address'=>'Đà Nẵng',
                'role'=>'2',
                'gender'=>'1',
                'status'=>'1'
            ],
            [
                'email' => 'customer0@gmail.com',
                'password' => bcrypt('123456'),
                'avatar' => '1.jpg',
                'fullname'=>'Khách hàng',
                'age'=>'43',
                'phone'=>'01634366133',
                'address'=>'Đà Nẵng',
                'role'=>'2',
                'gender'=>'0',
                'status'=>'0'
            ]
        ]);

    }
}
