<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Event;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Akun Admin Utama
        User::create([
            'name' => 'Admin Amikom',
            'email' => 'admin@amikom.ac.id',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);

        // 2. Insert Kategori Event (Minimal 3 Kategori)
        $catIT = Category::create(['name' => 'Seminar IT', 'slug' => 'seminar-it']);
        $catEnt = Category::create(['name' => 'Entertainment', 'slug' => 'entertainment']);
        $catSport = Category::create(['name' => 'Sports', 'slug' => 'sports']); // Tambahan kategori ke-3

        // 3. Insert Sampel Events (Minimal 6 Event)
        
        // Data lama kamu
        Event::create([
            'category_id' => $catEnt->id,
            'title' => 'Jazz Night 2026',
            'description' => 'Nikmati malam yang indah dengan alunan musik jazz yang merdu.',
            'date' => '2026-05-10 19:00:00',
            'location' => 'Amikom Baru',
            'price' => 50000, 'stock' => 100, 'poster_path' => 'posters/event-1.png',
        ]);

        Event::create([
            'category_id' => $catIT->id,
            'title' => 'Hackaton - Unleash Your Inner Developer',
            'description' => 'Ayo asah skill coding kamu!',
            'date' => '2026-05-05 10:00:00',
            'location' => 'Inkubator Amikom',
            'price' => 50000, 'stock' => 100, 'poster_path' => 'posters/event-2.png',
        ]);

        Event::create([
            'category_id' => $catIT->id,
            'title' => 'AI & FUTURE TECH SUMMIT 2026',
            'description' => 'Jelajahi tren terkini AI.',
            'date' => '2026-05-01 13:00:00',
            'location' => 'Cinema Unit 6',
            'price' => 50000, 'stock' => 100, 'poster_path' => 'posters/event-3.png',
        ]);

        // Tambahan 3 event baru agar total menjadi 6
        Event::create([
            'category_id' => $catSport->id,
            'title' => 'E-Sport U-Champ: Mobile Legends',
            'description' => 'Turnamen bergengsi antar mahasiswa.',
            'date' => '2026-06-12 09:00:00',
            'location' => 'Basement Unit 7',
            'price' => 25000, 'stock' => 50, 'poster_path' => 'posters/event-4.png',
        ]);

        Event::create([
            'category_id' => $catIT->id,
            'title' => 'UI/UX Masterclass',
            'description' => 'Workshop desain interface modern.',
            'date' => '2026-06-20 08:00:00',
            'location' => 'Lab ICT',
            'price' => 75000, 'stock' => 30, 'poster_path' => 'posters/event-5.png',
        ]);

        Event::create([
            'category_id' => $catEnt->id,
            'title' => 'Amikom Movie Screening',
            'description' => 'Nonton bareng karya film mahasiswa.',
            'date' => '2026-07-01 19:30:00',
            'location' => 'Cinema Amikom',
            'price' => 15000, 'stock' => 150, 'poster_path' => 'posters/event-6.png',
        ]);
    }
}