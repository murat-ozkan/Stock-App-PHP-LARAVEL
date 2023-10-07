<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsSeeder extends Seeder
{
    public function run(): void
    {
        Product::insert([
            [
                "product_title" => "Apple iPhone 13 Pro",
                "product_content" => " Apple'ın en son iPhone modeli olan iPhone 13 Pro, güçlü A15 Bionic çipseti, gelişmiş kamera sistemleri ve OLED Super Retina XDR ekranıyla birinci sınıf bir akıllı telefondur.",
                "product_price" => 999
            ],
            [
                "product_title" => "Sony WH-1000XM4 Kablosuz Kulaklık",
                "product_content" => "Sony WH-1000XM4, olağanüstü ses kalitesi, gürültü engelleme özelliği ve uzun pil ömrü ile üstün kablosuz kulaklık deneyimi sunar.",
                "product_price" => 349
            ],
            [
                "product_title" => "Samsung 65 inç QLED 4K Akıllı TV",
                "product_content" => "Samsung'un 65 inçlik QLED TV'si, kristal berraklığında 4K görüntü kalitesi, akıllı TV işlevleri ve stil sahibi bir tasarıma sahiptir.",
                "product_price" => 1119
            ],
            [
                "product_title" => "Amazon Kindle Paperwhite",
                "product_content" => "Kindle Paperwhite, su geçirmez özellikleri, yüksek çözünürlüklü ekranı ve uzun pil ömrü ile kitap okuma deneyimini dijitalleştirir.",
                "product_price" => 129
            ],
            [
                "product_title" => "DJI Mavic Air 2 Drone",
                "product_content" => "DJI Mavic Air 2, yüksek çözünürlüklü video çekimi, uzun uçuş süresi ve akıllı uçuş özellikleri ile profesyonel drone fotoğrafçılığı için ideal bir seçenektir.",
                "product_price" => 799
            ]
        ]);
    }
}
