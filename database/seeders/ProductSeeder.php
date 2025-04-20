<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::insert([
            [
                'name' => 'MSI TITAN 18',
                'price' => 999.99,
                'image' => 'https://m.media-amazon.com/images/I/71mqyG75JxL._AC_SL1500_.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'HP Spectre x360',
                'price' => 2499.00,
                'image' => 'https://img-cdn.tnwcdn.com/image?fit=1200%2C900&height=900&url=https%3A%2F%2Fcdn0.tnwcdn.com%2Fwp-content%2Fblogs.dir%2F1%2Ffiles%2F2021%2F08%2FHP-Spectre-x360-14-1-of-7.jpg&signature=0d2f21c8c102f0b5f8f935cee9d98ef6',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Lenovo ThinkPad X1 Carbon',
                'price' => 1799.00,
                'image' => 'https://cdn.izotcomputers.com/8270-large_default/laptop-vtora-upotreba-lenovo-thinkpad-x1-carbon-gen-9.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Asus ZenBook 13',
                'price' => 899.00,
                'image' => 'https://laptop.bg/system/images/300015/normal/asus_zenbook_13_oled_ux325eaoledwb503r.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Microsoft Surface Laptop 4',
                'price' => 799.00,
                'image' => 'https://gfx3.senetic.com/akeneo-catalog/7/1/b/9/71b955b8b0f63a78a44c1a6a845adbf09e281afc_1684023_LDH_00031_image1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Acer Swift 3',
                'price' => 699.99,
                'image' => 'https://ardes.bg/uploads/p/acer-swift-3-sf314-43-432825.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Razer Blade 15',
                'price' => 1599.99,
                'image' => 'https://ardes.bg/uploads/original/razer-blade-15-rz09-0421-428703.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'ASUS ROG ZEPHYRUS',
                'price' => 1399.99,
                'image' => 'https://pisces.bbystatic.com/image2/BestBuy_US/images/products/6570/6570271ld.jpg;maxHeight=2000;maxWidth=2000;format=webp',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
