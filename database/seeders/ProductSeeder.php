<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
            'name'=>'Oppo',
            'price'=>'150$',
            'description'=>'New model of Oppo smartphone',
            'category'=>'mobile',
            'gallery'=>'https://www.oppo.com/content/dam/oppo/product-asset-library/a/a17/v1/assets/module-design/premium-bg-img-1440.jpg'
            ],
            [
            'name'=>'Panasonic FG234',
            'price'=>'500$',
            'description'=>'SmartTV and 4k',
            'category'=>'tv',
            'gallery'=>'https://f00.esfr.pl/foto/7/111572997873/37813b5e246b4258787acc375217a61/panasonic-telewizor-master-oled-pro-tx-55lz2000e,111572997873_3.jpg'
            ],
            [
            'name'=>'Sony 43DFD',
            'price'=>'650$',
            'description'=>'SmartTV, 144Hz, 8k',
            'category'=>'tv',
            'gallery'=>'https://www.lg.com/levant_en/images/mobile-phones/md05994779/gallery/large01_1.jpg'
            ],
            [
            'name'=>'Dell',
            'price'=>'350$',
            'description'=>'Ryzen 5 3400/16GB RAM/512GB/Windows 11 Pro',
            'category'=>'laptop',
            'gallery'=>'https://prod-api.mediaexpert.pl/api/images/gallery/thumbnails/images/36/3652881/Laptop-DELL-Inspiron-3525-6488-front-1.jpg'
            ],

        ]);
    }
}
