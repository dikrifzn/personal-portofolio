<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::insert([
            [
                'category' => 'Technology',
                'title' => 'Mengenal Laravel 10',
                'description' => 'Laravel 10 hadir dengan fitur baru yang menarik...',
                'content' => 'Laravel adalah framework PHP yang sangat populer...',
                'closing' => 'Semoga artikel ini membantu pemahaman Anda tentang Laravel.',
                'cover_image' => 'laravel_cover.jpg',
                'content_image' => 'laravel_content.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category' => 'Health',
                'title' => 'Manfaat Olahraga Setiap Hari',
                'description' => 'Olahraga memiliki banyak manfaat untuk kesehatan...',
                'content' => 'Melakukan olahraga ringan seperti jogging dapat meningkatkan kesehatan...',
                'closing' => 'Jangan lupa olahraga setiap hari agar tubuh tetap bugar!',
                'cover_image' => 'health_cover.jpg',
                'content_image' => 'health_content.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category' => 'Education',
                'title' => 'Tips Belajar Efektif untuk Mahasiswa',
                'description' => 'Belajar dengan metode yang tepat dapat meningkatkan pemahaman...',
                'content' => 'Gunakan teknik seperti Pomodoro untuk fokus lebih lama...',
                'closing' => 'Semoga tips ini membantu Anda dalam belajar!',
                'cover_image' => 'education_cover.jpg',
                'content_image' => 'education_content.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
