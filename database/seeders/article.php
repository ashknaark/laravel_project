<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class article extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //



        for($i = 0 ; $i <= 50 ; $i++){
            $faker =  Factory::create();
            $text = $faker->slug ;
            DB::table("article")->insert([
                "title" => Str::camel(trim($text)),
                "body" => "لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربرد، شناخت فراوان جامعه و متخصصان را می طلبد." ,
                "slug" => Str::slug($text),
                "user_id" =>rand(1 , 6),
                "category_id" => rand(1 , 10),
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
                "thumbnail" =>"/images/news/f".rand(1,12).".jpg" ,
                "view" => 0
            ]);
        }

    }
}
