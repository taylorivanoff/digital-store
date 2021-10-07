<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Product::create([
            'title' => 'Laravel Course',
            'slug' => 'laravel-course',
            'description' => 'A course teaching Laravel.',
            'price' => '6000',
            'stripe_id' => 'price_1JhT9eIVIwc1wxMsIMDNOxHg',
            'file_path' => 'products/laravel-course.zip',
        ]);

        \App\Models\Product::create([
            'title' => 'PHP Course',
            'slug' => 'php-course',
            'description' => 'A course teaching PHP.',
            'price' => '12000',
            'stripe_id' => 'price_1JhpF1IVIwc1wxMsJIoUWLaD',
            'file_path' => 'products/php-course.zip',
        ]);
    }
}
