<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CategoryModel;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CategoryModel::create([
            'name'=> 'Fruits',
            'slug'=> 'Fruits',
            'description'=> 'Fruits should be an important part of ever one diet as they contain vitamins, minerals, and fiber.',
            'popular'=> '1',
            'status'=> '0',
            'image'=> 'https://leafyplace.com/wp-content/uploads/2019/08/fruits.jpg',
            'meta_title'=> 'Fruits',
            'meta_descrip'=> 'Fruits grown in jamaica',
            'meta_keyword'=> 'Organic fruits',
        ]);

        CategoryModel::create([
            'name'=> 'Vegetables',
            'slug'=> 'Vegetables',
            'description'=> 'Vegetables are some of the most important foods we need to consume regularly.',
            'popular'=> '0',
            'status'=> '0',
            'image'=> 'https://leafyplace.com/wp-content/uploads/2019/08/vegetables.jpg',
            'meta_title'=> 'Vegetables',
            'meta_descrip'=> 'Vegetables grown in jamaica',
            'meta_keyword'=> 'Organic Vegetables',
        ]);

        CategoryModel::create([
            'name'=> 'Meat',
            'slug'=> 'Meat',
            'description'=> 'Various types of Meat should be an important part of ever one diet.',
            'popular'=> '1',
            'status'=> '0',
            'image'=> 'https://leafyplace.com/wp-content/uploads/2019/08/meat.jpg',
            'meta_title'=> 'Meat',
            'meta_descrip'=> 'Meat produce by jamaica',
            'meta_keyword'=> 'Meats',
        ]);

        CategoryModel::create([
            'name'=> 'Fish and Seafood',
            'slug'=> 'Seafood',
            'description'=> 'Various types of Fish and Seafood should be an important part of ever one diet as they contain vitamins, minerals, and fiber. Even the humble apple is a storehouse of goodness.',
            'popular'=> '1',
            'status'=> '1',
            'image'=> 'https://leafyplace.com/wp-content/uploads/2019/08/seafood.jpg',
            'meta_title'=> 'Seafood',
            'meta_descrip'=> 'Seafood catch right ere in the caribean',
            'meta_keyword'=> 'Fish and Seafood',
        ]);

        CategoryModel::create([
            'name'=> 'Dairy Food Group',
            'slug'=> 'Dairy Food Group',
            'description'=> 'Dairy foods are made from the milk of animals such as cows,',
            'popular'=> '0',
            'status'=> '0',
            'image'=> 'https://leafyplace.com/wp-content/uploads/2019/08/fruits.jpg',
            'meta_title'=> 'Dairy',
            'meta_descrip'=> 'Dairy Food grown in jamaica',
            'meta_keyword'=> 'Dairy Food Group',
        ]);

        CategoryModel::create([
            'name'=> 'Oil',
            'slug'=> 'Oil',
            'description'=> 'Oil are commonly used in baking, quiches and omelettes, and are very versatile type of food.',
            'popular'=> '0',
            'status'=> '0',
            'image'=> 'https://leafyplace.com/wp-content/uploads/2019/08/fruits.jpg',
            'meta_title'=> 'Oil',
            'meta_descrip'=> 'Oil produce in jamaica',
            'meta_keyword'=> 'Oil',
        ]);
    }
}
