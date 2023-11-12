<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Web Developer',
            'Mobile Developer',
            'UI/UX Design',
            'Programming Basic',
        ];

        // Loop melalui daftar genre dan masukkan ke dalam tabel
        foreach ($categories as $category) {
            DB::table('categories')->insert(['name' => $category]);
        }
    }
}
