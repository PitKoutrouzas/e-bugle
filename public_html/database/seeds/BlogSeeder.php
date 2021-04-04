<?php

use Illuminate\Database\Seeder;
use App\Blog;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blog = new Blog();
        $blog->userid = 1;
        $blog->blogtitle = 'Test title';
        $blog->description = 'Test description';
        $blog->category = 1;

        $blog->save();
    }
}
