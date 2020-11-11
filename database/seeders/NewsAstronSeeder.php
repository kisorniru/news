<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class NewsAstronSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	DB::table('news_astrons')->insert([
            'headline' 		=> 'ট্রাম্প ফল না মানলে কী হবে',
            'paragraph_1' 	=> 'মার্কিন নির্বাচনে প্রেসিডেন্ট হিসেবে পুনর্নির্বাচিত হওয়ার দৌড়ে হেরে গেছেন ডোনাল্ড ট্রাম্প।',
            'paragraph_2' 	=> 'জো বাইডেন হতে যাচ্ছেন যুক্তরাষ্ট্রের ৪৬তম প্রেসিডেন্ট।',
            'isExported' 	=> 0,
            'created_at'    => '2020-11-11 08:37:21',
            'updated_at'    => '2020-11-11 08:37:21',
        ]);

        DB::table('news_astrons')->insert([
            'headline' 		=> 'শিক্ষক থেকে ফার্স্ট লেডি',
            'paragraph_1' 	=> 'যুক্তরাষ্ট্রের ৪৬তম প্রেসিডেন্ট হিসেবে আগামী বছরের জানুয়ারিতে শপথ নেবেন জো বাইডেন।',
            'paragraph_2' 	=> 'এর আগে বারাক ওবামার সঙ্গে ভাইস প্রেসিডেন্টের দায়িত্বও সামলেছেন বাইডেন।',
            'isExported' 	=> 0,
            'created_at'    => '2020-11-11 08:37:21',
            'updated_at'    => '2020-11-11 08:37:21',
        ]);

        DB::table('news_astrons')->insert([
            'headline' 		=> 'বাইডেনের বিজয় উদ্‌যাপনে শামিল বাংলাদেশি মার্কিনরাও',
            'paragraph_1' 	=> 'যুক্তরাষ্ট্রে ৭ নভেম্বর শনিবার ভোর।',
            'paragraph_2' 	=> 'নিউইয়র্কসহ অন্যান্য রাজ্যের মানুষ কেউ কেউ তখনো ঘুমে।',
            'isExported' 	=> 0,
            'created_at'    => '2020-11-11 08:37:21',
            'updated_at'    => '2020-11-11 08:37:21',
        ]);

    }
}
