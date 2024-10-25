<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'mustafa akalin',
            'email' => 'mustafa0xall@gmail.com',
            'password' => '22446199'
        ]);

        // completed projects 4
        Project::create([
            'name' => 'Hamdolsun Engelliyiz',
            'description' => 'laravel 10 , mysql, tailwindcss, daisyui',
            'image' => "",
            'status' => 'completed',
            'start_date' => 25/10/2024,
            'end_date' => 25/10/2024,
            'link' => "https://hamdolsunengelliyiz.org.tr/",
            'client' => "Recai a."
        ]);
        Project::create([
            'name' => 'Cleanly Temizlik',
            'description' => 'laravel 10 , postgresql, tailwindcss, daisyui',
            'image' => "",
            'status' => 'completed',
            'start_date' => 25/10/2024,
            'end_date' => 25/10/2024,
            'link' => "https://cleanlytemizlik.com/home",
            'client' => "Abdullah Ç."
        ]);
        Project::create([
            'name' => 'Dönmez Baran Hukuk',
            'description' => 'laravel 10, mysql, tailwindcss, daisyui',
            'image' => "",
            'status' => 'completed',
            'start_date' => 25/10/2024,
            'end_date' => 25/10/2024,
            'link' => "https://donmezbaranhukuk.rf.gd/home",
            'client' => "Tansu B."
        ]);
        Project::create([
            'name' => 'Eticaret1',
            'description' => 'laravel 11, mysql, tailwindcss, daisyui, mail send, iyzico-php',
            'image' => "",
            'status' => 'completed',
            'start_date' => 25/10/2024,
            'end_date' => 25/10/2024,
            'link' => "http://mmrsepeti.byethost33.com/",
            'client' => "self"
        ]);
    }
}
