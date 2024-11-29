<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Profile;
use App\Models\Project;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Profile::create([
            'nama' => 'Annisa Nur Chasidiyah',
            'foto' => 'profil.jpg',
            'deskripsi' => 'Mahasiswa S1 Pendidikan Teknik Informatika dan Komputer yang tertarik pada bidang pengembangan software baik aplikasi maupun website.',
            'contact_email' => 'anchosykiryu24@gmail.com',
            'facebook' => 'https://www.facebook.com/profile.php?id=100013086513721',
            'instagram' => 'https://www.instagram.com/an_chosy/profilecard/?igsh=MWp0bjNvdjh3aGloeg==',
            'github' => 'https://github.com/Anchosy24',
        ]);

        Project::insert([
            [
                'judul' => 'Website Penyewaan Ruangan Gereja (PHP)',
                'deskripsi' => 'Pengembangan website untuk memudahkan transaksi penyewaan ruangan gereja menggunakan bahasa pemrograman PHP',
                'gambar' => 'gereja.jpg',
                'link' => 'https://github.com/RPL-Srikandi/penyewaan_gereja',
            ],
            [
                'judul' => 'Mamoney - Finance App (Flutter)',
                'deskripsi' => 'Pengembangan aplikasi pengelolaan keuangan pribadi menggunakan bahasa pemrograman flutter',
                'gambar' => 'mamoney.jpg',
                'link' => 'https://github.com/PPB-Flutter/UAS-FinanceApp',
            ],
            [
                'judul' => 'Website Akademik PPQITA (Laravel)',
                'deskripsi' => 'Pengembangan website akademik ppqita menggunakan bahasa pemrograman Laravel 9',
                'gambar' => 'ppqita.jpg',
                'link' => 'https://github.com/WebsiteAkademik/PPQITA-Penilaian',
            ],
        ]);
    }
}
