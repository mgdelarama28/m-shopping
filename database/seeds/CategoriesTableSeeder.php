<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    protected $categories = [
        [
            'name' => 'Smartphones & Tablets',
            'image_path' => 'smartphones_and_tablets.png',
        ],
        [
            'name' => 'Computers & Laptops',
            'image_path' => 'computers_and_laptops.png',
        ],
        [
            'name' => 'Gadgets',
            'image_path' => 'gadgets.png',
        ],
        [
            'name' => 'Video Games & Consoles',
            'image_path' => 'video_games_and_consoles.png',
        ],
        [
            'name' => 'Accessories',
            'image_path' => 'accessories.png',
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->init();

        foreach($this->categories as $key => $category):
            $data = [
                'name' => $category['name'],
                'image_path' => $category['image_path'],
            ];

            $this->create($data);
        endforeach;
    }

    public function init()
    {
        Category::truncate();
    }

    public function create($data)
    {
        \DB::beginTransaction();
            Category::create($data);
        \DB::commit();
    }
}
