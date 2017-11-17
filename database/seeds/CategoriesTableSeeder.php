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
                'parent_id' => '0'
            ],
            [
                'name' => 'Thời Trang Quần',
                'slug' => 'thoi-trang-quan',
                'type' => '0',
                'parent_id' => '0'
            ],
            [
                'name' => 'Phụ Kiện',
                'slug' => 'phu-kien',
                'type' => '0',
                'parent_id' => '0'
            ],
            [
                'name' => 'Áo Khoác',
                'slug' => 'ao-khoac',
                'type' => '1',
                'parent_id' => '1'
            ],
            [
                'name' => 'Áo Sơ Mi',
                'slug' => 'ao-so-mi',
                'type' => '1',
                'parent_id' => '1'
            ],
            [
                'name' => 'Áo Thun',
                'slug' => 'ao-thun',
                'type' => '1',
                'parent_id' => '1'

            ],
            [
                'name' => 'Quần Jean',
                'slug' => 'quan-jean',
                'type' => '1',
                'parent_id' => '2'
            ],
            [
                'name' => 'Quần Tây',
                'slug' => 'quan-tay',
                'type' => '1',
                'parent_id' => '2'
            ],
            [
                'name' => 'Quần Sort',
                'slug' => 'quan-sort',
                'type' => '1',
                'parent_id' => '2'
            ],
            [
                'name' => 'Thắt Lưng',
                'slug' => 'that-lung',
                'type' => '1',
                'parent_id' => '3'
            ],
            [
                'name' => 'Ví - Túi xách',
                'slug' => 'vi-tui-xach',
                'type' => '1',
                'parent_id' => '3'
            ],
            [
                'name' => 'Kính Mắt',
                'slug' => 'kinh-mat',
                'type' => '1',
                'parent_id' => '3'
            ]
        ]);
    }
}
