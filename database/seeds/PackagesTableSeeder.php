<?php

declare(strict_types=1);

use Illuminate\Database\Seeder;

class PackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('packages')->truncate();

        DB::table('packages')->insert([
            [
                'title' => 'کارشناسی رنگ، شاسی و بدنه',
                'description' => 'بررسی و کارشناسی رنگ، شاسی و قطعات تعویضی تبلیغ',
                'slug' => 'paint',
                'price' => 580000,
                'location_id' => 1
            ],
            [
                'title' => 'کوئیک تست (تست دیاگ)',
                'description' => 'عیب یابی سیستم الکترونیک و برق تبلیغ توسط دستگاه دیاگ',
                'price' => 420000,
                'slug' => 'quick',
                'location_id' => 1
            ],
            [
                'title' => 'کارشناسی سلامت فنی تبلیغ (تکمیلی)',
                'description' => 'کارشناسی آلایندگی محیط و سیستم اتصالات تعلیق، کارشناسی سلامت فنی تبلیغ، کارشناسی رینگ ها و لاستیک ها، بررسی روشنایی تبلیغ',
                'price' => 520000,
                'slug' => 'complete',
                'location_id' => 1
            ],
            [
                'title' => 'بررسی عملکرد آپشن ها',
                'description' => 'بررسی عملکرد تمامی آپشن های تبلیغ با مقایسه اطلاعات VIN اعلام شده توسط کمپانی سازنده',
                'price' => 250000,
                'slug' => 'options',
                'location_id' => 1
            ],
            [
                'title' => 'بررسی اصالت مدارک معاملاتی',
                'description' => 'کنترل و استعلام تمامی مدارک تبلیغ شامل سند سبز، سند کمپانی، بیمه نامه، خلافی و عوارض تبلیغ',
                'price' => 200000,
                'slug' => 'document',
                'location_id' => 1
            ],
            [
                'title' => 'احیای رنگ',
                'description' => 'Coming Soon...',
                'price' => 0,
                'slug' => 'soon',
                'location_id' => 1
            ]
        ]);
    }
}
