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
                'birthday'=>'2017-11-18',
                'phone'=>'0966448783',
                'address'=>'Đà Nẵng',
                'role'=>'0',
                'gender'=>'0',
                'status'=>'1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'email' => 'thanhnamdk2710@gmail.com',
                'password' => bcrypt('nam123'),
                'avatar' => '1.jpg',
                'fullname'=>'Thành Nam',
                'birthday'=>'2017-11-18',
                'phone'=>'01634366133',
                'address'=>'Đà Nẵng',
                'role'=>'0',
                'gender'=>'0',
                'status'=>'1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'email' => '15i3lethiduong97@gmail.com',
                'password' => bcrypt('duong1997'),
                'avatar' => '1.jpg',
                'fullname'=>'Le Duong',
                'birthday'=>'2017-11-18',
                'phone'=>'01634366653',
                'address'=>'Đà Nẵng',
                'role'=>'0',
                'gender'=>'0',
                'status'=>'1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'email' => 'saleman@gmail.com',
                'password' => bcrypt('123456'),
                'avatar' => '1.jpg',
                'fullname'=>'Bán hàng',
                'birthday'=>'2017-11-18',
                'phone'=>'0163312433',
                'address'=>'Đà Nẵng',
                'role'=>'1',
                'gender'=>'1',
                'status'=>'1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'email' => 'customer@gmail.com',
                'password' => bcrypt('123456'),
                'avatar' => '1.jpg',
                'fullname'=>'Khách hàng',
                'birthday'=>'2017-11-18',
                'phone'=>'0163312433',
                'address'=>'Đà Nẵng',
                'role'=>'2',
                'gender'=>'1',
                'status'=>'1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'email' => 'customer0@gmail.com',
                'password' => bcrypt('123456'),
                'avatar' => '1.jpg',
                'fullname'=>'Khách hàng',
                'birthday'=>'2017-11-18',
                'phone'=>'01634366133',
                'address'=>'Đà Nẵng',
                'role'=>'2',
                'gender'=>'0',
                'status'=>'0',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ]);

    }
}
