<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::insert([
            [
                'category' => 'Web Development',
                'title' => 'Portfolio Website',
                'description' => 'Website pribadi untuk menampilkan portofolio proyek saya.',
                'repository_url' => 'https://github.com/username/portfolio',
                'image1' => 'portfolio1.jpg',
                'image2' => 'portfolio2.jpg',
                'image3' => 'portfolio3.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category' => 'Mobile App',
                'title' => 'Adiwiyata',
                'description' => 'Aplikasi mobile untuk melacak program Adiwiyata di sekolah.',
                'repository_url' => 'https://github.com/username/adiwiyata',
                'image1' => 'adiwiyata1.png',
                'image2' => 'adiwiyata2.png',
                'image3' => 'adiwiyata3.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category' => 'Machine Learning',
                'title' => 'Dermato.ai',
                'description' => 'Aplikasi AI untuk analisis kondisi kulit dan rekomendasi perawatan.',
                'repository_url' => 'https://github.com/username/dermatoai',
                'image1' => 'dermato1.png',
                'image2' => 'dermato2.png',
                'image3' => 'dermato3.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
