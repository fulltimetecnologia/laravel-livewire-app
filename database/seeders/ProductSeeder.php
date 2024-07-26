<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Cria produtos para a marca Apple
        $appleBrand = Brand::where('name', 'Apple')->first();
        $electronicsCategory = Category::where('name', 'Electronics')->first();

        $appleProducts = [
            ['name' => 'iPhone 13', 'price' => 999.99],
            ['name' => 'MacBook Pro', 'price' => 1999.99],
            ['name' => 'iPad Pro', 'price' => 799.99],
            ['name' => 'Apple Watch', 'price' => 399.99],
        ];

        foreach ($appleProducts as $product) {
            Product::factory()->create([
                'name' => $product['name'],
                'price' => $product['price'],
                'category_id' => $electronicsCategory->id,
                'brand_id' => $appleBrand->id,
            ]);
        }

        // Cria produtos para a marca Samsung
        $samsungBrand = Brand::where('name', 'Samsung')->first();

        $samsungProducts = [
            ['name' => 'Galaxy S21', 'price' => 799.99],
            ['name' => 'Galaxy Tab S7', 'price' => 649.99],
            ['name' => 'Galaxy Watch 4', 'price' => 249.99],
            ['name' => 'Galaxy Buds Pro', 'price' => 199.99],
        ];

        foreach ($samsungProducts as $product) {
            Product::factory()->create([
                'name' => $product['name'],
                'price' => $product['price'],
                'category_id' => $electronicsCategory->id,
                'brand_id' => $samsungBrand->id,
            ]);
        }

        // Cria produtos para a marca Sony
        $sonyBrand = Brand::where('name', 'Sony')->first();

        $sonyProducts = [
            ['name' => 'PlayStation 5', 'price' => 499.99],
            ['name' => 'Sony WH-1000XM4', 'price' => 349.99],
            ['name' => 'Sony A7 III', 'price' => 1999.99],
            ['name' => 'Sony X900H', 'price' => 999.99],
        ];

        foreach ($sonyProducts as $product) {
            Product::factory()->create([
                'name' => $product['name'],
                'price' => $product['price'],
                'category_id' => $electronicsCategory->id,
                'brand_id' => $sonyBrand->id,
            ]);
        }

        // Cria produtos para a marca LG
        $lgBrand = Brand::where('name', 'LG')->first();
        $homeAppliancesCategory = Category::where('name', 'Home Appliances')->first();

        $lgProducts = [
            ['name' => 'LG OLED TV', 'price' => 1499.99],
            ['name' => 'LG Refrigerator', 'price' => 1099.99],
            ['name' => 'LG Washing Machine', 'price' => 799.99],
            ['name' => 'LG Air Conditioner', 'price' => 499.99],
        ];

        foreach ($lgProducts as $product) {
            Product::factory()->create([
                'name' => $product['name'],
                'price' => $product['price'],
                'category_id' => $homeAppliancesCategory->id,
                'brand_id' => $lgBrand->id,
            ]);
        }

        // Cria produtos para a marca Dell
        $dellBrand = Brand::where('name', 'Dell')->first();
        $computersCategory = Category::where('name', 'Computers')->first();

        $dellProducts = [
            ['name' => 'Dell XPS 13', 'price' => 999.99],
            ['name' => 'Dell Inspiron 15', 'price' => 549.99],
            ['name' => 'Dell Alienware M15', 'price' => 1499.99],
            ['name' => 'Dell Monitor', 'price' => 299.99],
        ];

        foreach ($dellProducts as $product) {
            Product::factory()->create([
                'name' => $product['name'],
                'price' => $product['price'],
                'category_id' => $computersCategory->id,
                'brand_id' => $dellBrand->id,
            ]);
        }
    }
}
