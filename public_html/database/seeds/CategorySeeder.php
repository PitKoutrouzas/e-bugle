<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category;
        $category->name = 'Arts & Entertainment';
        $category->parent = 1;
        $category->save();

        $category = new Category;
        $category->name = 'Business & Finance';
        $category->parent = 2;
        $category->save();

        $category = new Category;
        $category->name = 'Health';
        $category->parent = 3;
        $category->save();

        $category = new Category;
        $category->name = 'Social';
        $category->parent = 4;
        $category->save();

        $category = new Category;
        $category->name = 'Science & Tech';
        $category->parent = 5;
        $category->save();

        $category = new Category;
        $category->name = 'Travel';
        $category->parent = 6;
        $category->save();

        $category = new Category;
        $category->name = 'Thoughts';
        $category->parent = 7;
        $category->save();
    }
}
