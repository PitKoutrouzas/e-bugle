<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use App\Contactu;

class ContactUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contactus = new Contactu;
        $contactus->email = Str::random(10).'@gmail.com';
        $contactus->address = rand(1,50). ' ' . Str::random(10);
        $contactus->telephone = '99'. rand(100000,999999);
        $contactus->fax = '97'. rand(100000,999999);

        $contactus->save();

    }
}
