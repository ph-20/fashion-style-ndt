<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'Thời Trang Áo',
                'slug' => 'thoi-trang-ao',
                'type' => '0',
                'parent_id' => '0',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Thời Trang Quần',
                'slug' => 'thoi-trang-quan',
                'type' => '0',
                'parent_id' => '0',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Phụ Kiện',
                'slug' => 'phu-kien',
                'type' => '0',
                'parent_id' => '0',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Áo Khoác',
                'slug' => 'ao-khoac',
                'type' => '1',
                'parent_id' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Áo Sơ Mi',
                'slug' => 'ao-so-mi',
                'type' => '1',
                'parent_id' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Áo Thun',
                'slug' => 'ao-thun',
                'type' => '1',
                'parent_id' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'name' => 'Quần Jean',
                'slug' => 'quan-jean',
                'type' => '1',
                'parent_id' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Quần Tây',
                'slug' => 'quan-tay',
                'type' => '1',
                'parent_id' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Quần Sort',
                'slug' => 'quan-sort',
                'type' => '1',
                'parent_id' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Thắt Lưng',
                'slug' => 'that-lung',
                'type' => '1',
                'parent_id' => '3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Ví - Túi xách',
                'slug' => 'vi-tui-xach',
                'type' => '1',
                'parent_id' => '3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Kính Mắt',
                'slug' => 'kinh-mat',
                'type' => '1',
                'parent_id' => '3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ]);
    }
}
