<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

use App\Profile;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $profile = new Profile;
        $profile->about = Str::random(300);
        $profile->bloginterests = Str::random(10). ',' . Str::random(10). ',' .Str::random(10);

        $profile->save();
    }
}
