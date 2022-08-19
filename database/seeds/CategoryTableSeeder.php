<?php

use Illuminate\Database\Seeder;
use App\Category;


class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('categories')->delete();

        Category::create([
            'id' => 8,
            'category_name' => 'Tv',
            'category_slug' => 'tv',
            'category_id' => 7,
            'fa_icon' => 'fa-500px',
            'color_class' => 'green',
            'description' => 'Hello World !',
            'product_count' => 0,
            'created_at' => '2020-09-01 19:39:34',
            'updated_at' => '2020-09-01 19:39:34'
        ]);

        Category::create([
            'id' => 16,
            'category_name' => 'Electronics',
            'category_slug' => 'electronics',
            'category_id' => 0,
            'fa_icon' => 'fa-500px',
            'color_class' => 'green',
            'description' => NULL,
            'product_count' => 0,
            'created_at' => '2020-09-02 12:21:09',
            'updated_at' => '2020-09-02 12:21:09'
        ]);

        Category::create([
            'id' => 17,
            'category_name' => 'Smartphone',
            'category_slug' => 'smartphone',
            'category_id' => 16,
            'fa_icon' => 'fa-500px',
            'color_class' => 'green',
            'description' => NULL,
            'product_count' => 0,
            'created_at' => '2020-09-02 12:21:18',
            'updated_at' => '2020-09-02 12:21:18'
        ]);

        Category::create([
            'id' => 18,
            'category_name' => 'Computer',
            'category_slug' => 'computer',
            'category_id' => 16,
            'fa_icon' => 'fa-500px',
            'color_class' => 'green',
            'description' => NULL,
            'product_count' => 0,
            'created_at' => '2020-09-02 12:21:25',
            'updated_at' => '2020-09-02 12:21:25'
        ]);

        Category::create([
            'id' => 19,
            'category_name' => 'Desktop',
            'category_slug' => 'desktop',
            'category_id' => 16,
            'fa_icon' => 'fa-500px',
            'color_class' => 'green',
            'description' => NULL,
            'product_count' => 0,
            'created_at' => '2020-09-02 12:21:32',
            'updated_at' => '2020-09-02 12:21:32'
        ]);

        Category::create([
            'id' => 20,
            'category_name' => 'Laptop',
            'category_slug' => 'laptop',
            'category_id' => 16,
            'fa_icon' => 'fa-500px',
            'color_class' => 'green',
            'description' => NULL,
            'product_count' => 0,
            'created_at' => '2020-09-02 12:21:38',
            'updated_at' => '2020-09-02 12:21:38'
        ]);

        Category::create([
            'id' => 21,
            'category_name' => 'LCD, HDTV',
            'category_slug' => 'lcd-hdtv',
            'category_id' => 16,
            'fa_icon' => 'fa-500px',
            'color_class' => 'green',
            'description' => NULL,
            'product_count' => 0,
            'created_at' => '2020-09-02 12:22:03',
            'updated_at' => '2020-09-02 12:22:03'
        ]);

        Category::create([
            'id' => 22,
            'category_name' => 'Car Electronics and GPS',
            'category_slug' => 'car-electronics-and-gps',
            'category_id' => 16,
            'fa_icon' => 'fa-500px',
            'color_class' => 'green',
            'description' => NULL,
            'product_count' => 0,
            'created_at' => '2020-09-02 12:22:20',
            'updated_at' => '2020-09-02 12:22:20'
        ]);

        Category::create([
            'id' => 23,
            'category_name' => 'Portable audio accessories',
            'category_slug' => 'portable-audio-accessories',
            'category_id' => 16,
            'fa_icon' => 'fa-500px',
            'color_class' => 'green',
            'description' => NULL,
            'product_count' => 0,
            'created_at' => '2020-09-02 12:22:42',
            'updated_at' => '2020-09-02 12:22:42'
        ]);

        Category::create([
            'id' => 24,
            'category_name' => 'Gadgets',
            'category_slug' => 'gadgets',
            'category_id' => 16,
            'fa_icon' => 'fa-500px',
            'color_class' => 'green',
            'description' => NULL,
            'product_count' => 0,
            'created_at' => '2020-09-02 12:23:00',
            'updated_at' => '2020-09-02 12:23:00'
        ]);
    }
}
