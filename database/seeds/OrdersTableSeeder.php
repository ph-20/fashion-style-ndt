<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            [
                'status' => '0',
                'date' => '2017-11-04 00:00:00',
                'note' => 'Giao hàng nhanh',
                'customer_name' => 'Tấn Thành',
                'customer_email' => 'thanh@gmail.com',
                'customer_phone' => '0123456789',
                'customer_address' => 'Đà Nẵng',
                'code' => '1234567892',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'status' => '1',
                'date' => '2017-11-10 00:00:00',
                'note' => 'Giao hàng nhanh',
                'customer_name' => 'Thành Nam',
                'customer_email' => 'thanh1@gmail.com',
                'customer_phone' => '0123456789',
                'customer_address' => 'Đà Nẵng',
                'code' => '1234564455',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'status' => '2',
                'date' => '2017-10-04 00:00:00',
                'note' => 'Giao hàng nhanh',
                'customer_name' => 'Thị Dương',
                'customer_email' => 'thanh2@gmail.com',
                'customer_phone' => '0123456789',
                'customer_address' => 'Đà Nẵng',
                'code' => '1234567789',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ]);


    }
}
