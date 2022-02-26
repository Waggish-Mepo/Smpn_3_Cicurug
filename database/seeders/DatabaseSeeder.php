<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    public function run()
    {
        $faker = Faker::create();

        DB::table('banners')->insert([
            'image' => '1645237228-ImgJumbotron.svg'
        ]);

        DB::table('users')->insert([
            'name' => 'Yoga Pratama',
            'email' => 'yoga110011@gmail.com',
            'email_verified_at' => $faker->date(),
            'password' => Hash::make('admin12345'),
        ]);

        DB::table('beritas')->insert(
            [
                'post_id' => '1645199125',
                'title' => 'azab',
                'slug' => 'azab',
                'excerpt' => 'karna nyusahin orang',
                'body' => 'azab indosiar',
                'image' => '1645200406-73361273_147266406636535_6211017966989869056_n 1.svg',
            ],
            [
                'post_id' => '1645199125',
                'title' => 'azab',
                'slug' => 'azab',
                'excerpt' => 'karna nyusahin orang',
                'body' => 'azab indosiar',
                'image' => '1645200406-73361273_147266406636535_6211017966989869056_n 1.svg',
            ],
            [
                'post_id' => '1645199125',
                'title' => 'azab',
                'slug' => 'azab',
                'excerpt' => 'karna nyusahin orang',
                'body' => 'azab indosiar',
                'image' => '1645200406-73361273_147266406636535_6211017966989869056_n 1.svg',
            ],
        );

        DB::table('kegiatans')->insert(
            [
                'image' => '1645411220-1.svg',
            ],
            [
                'image' => '1645411230-2.svg',
            ],
            [
                'image' => '1645411240-3.svg',
            ],
            [
                'image' => '1645411287-4.svg',
            ],
            [
                'image' => '1645411296-5.svg',
            ],
            [
                'image' => '1645411304-6.svg',
            ],
        );

        DB::table('ekskuls')->insert(
            [
                'title' => 'Futsal',
                'image' => '1645232726-1.svg',
            ],
            [
                'title' => 'Basktet',
                'image' => '1645232726-1.svg',
            ],
            [
                'title' => 'Karate',
                'image' => '1645232726-1.svg',
            ],
            [
                'title' => 'Angklung',
                'image' => '1645232726-1.svg',
            ],
        );

        DB::table('prestasis')->insert(
            [
                'title' => 'Juara Futsal Tingkat Kota',
                'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque asperiores qui cum pariatur quas minima ex perspiciatis veniam error nesciunt soluta, tempore consequuntur eaque reiciendis hic, totam doloremque quaerat fugiat?',
                'image' => '1645232726-1.svg',
            ],
        );

        DB::table('profils')->insert([
            'visi' => 'Be Smart',
            'misi' => 'Smart be',
            'sejarah' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque asperiores qui cum pariatur quas minima ex perspiciatis veniam error nesciunt soluta, tempore consequuntur eaque reiciendis hic, totam doloremque quaerat fugiat?',
        ]);

        DB::table('teachers')->insert(
            [
                'jabatan' => 'Kesiswaan',
                'nama' => 'Pa Ono',
                'gelar' => 'S.Kom',
            ],
            [
                'jabatan' => 'Kesiswaan',
                'nama' => 'Pa Ono',
                'gelar' => 'S.Kom',
            ],
            [
                'jabatan' => 'Kesiswaan',
                'nama' => 'Pa Ono',
                'gelar' => 'S.Kom',
            ],
            [
                'jabatan' => 'Kesiswaan',
                'nama' => 'Pa Ono',
                'gelar' => 'S.Kom',
            ],
            [
                'jabatan' => 'Kesiswaan',
                'nama' => 'Pa Ono',
                'gelar' => 'S.Kom',
            ],
            [
                'jabatan' => 'Kesiswaan',
                'nama' => 'Pa Ono',
                'gelar' => 'S.Kom',
            ],
        );

        DB::table('sambutan')->insert([
            'title' => 'Sambutan Guru SMPN 3 Cicurug kepada Siswa Baru 2022',
            'content' => 'Untuk meningkatkan kualitas sumber daya manusia, Kementerian Pendidikan, Kebudayaan dan Ristek (KemendikbudRistek) mencanangkan reformasi sistem pendidikan Indonesia melalui kebijakan Merdeka Belajar. Hal ini ditegaskan kembali Menteri Pendidikan dan Kebudayaan (Mendikbud).',
            'image' => '1645321761-about.png',
        ]);

        DB::table('ket_prestasis')->insert([
            'nama' => 'yanto',
            'prestasi_id' => '1',
            'jenis_kegiatan' => 'lomba karate',
            'tempat_kegiatan' => 'gedung balai kerida',
            'juara' => '4',
            'tahun' => '3450',
            'tingkat' => 'nasional'
        ]);

        DB::table('contact')->insert([
            'no_telp' => '085156405248',
            'alamat' => 'Jl. Cibuntu Satu, Kutajaya, Kec. Cicurug, Kabupaten Sukabumi, Jawa Barat 43359.',
            'fb' => 'https://www.facebook.com/pages/category/Education/Smpn-3-Cicurug-Oficial-112126036817239/',
            'ig' => 'https://www.facebook.com/pages/category/Education/Smpn-3-Cicurug-Oficial-112126036817239/',
        ]);
    }
}
