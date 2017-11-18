<?php

use Illuminate\Database\Seeder;

class OrderDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_details')->insert([
            [
                'order_id'=>'1',
                'product_id'=>'1',
                'price'=>'150000',
                'quantity'=>'2',
                'total'=>'300000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'order_id'=>'1',
                'product_id'=>'2',
                'price'=>'180000',
                'quantity'=>'1',
                'total'=>'180000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'order_id'=>'1',
                'product_id'=>'3',
                'price'=>'150000',
                'quantity'=>'3',
                'total'=>'450000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'order_id'=>'2',
                'product_id'=>'3',
                'price'=>'150000',
                'quantity'=>'3',
                'total'=>'450000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'order_id'=>'3',
                'product_id'=>'3',
                'price'=>'150000',
                'quantity'=>'3',
                'total'=>'450000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]

        ]);
    }
}
