<?php

namespace Database\Seeders;

use App\Models\Developers;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DevelopersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Developers::create(
            [
                'first_name' => 'Samuel',
                'last_name' => 'Bosawer',
                'picture' => 'https://avatars.githubusercontent.com/u/60697963?v=4',
                // 'description' => 'Web Developer and Coding Trainer',
                
                // contact
                'address' => 'Pasar Lama Sentani, Kampung Yahim, Distrik Sentani Kota, Jayapura City, Papua.',
                'phone' => '082112345678',
                
                // social media
                'instagram' => 'https://instagram.com/',
                'facebook' => 'https://facebook.com/',
                'linkedin' => 'https://linkedin.com/',
                'github' => 'https://github.com/',


            ]
        );

        Developers::create(
            [
                'first_name' => 'Janzen',
                'last_name' => 'Faidiban',
                'picture' => 'https://avatars.githubusercontent.com/u/45115034?v=4',
                // 'description' => 'Coding Trainer and Computer Literacy Tutor',
                
                // contact
                'address' => 'Kelurahan Waena, Kecamatan Heram, Jayapura City, Papua.',
                'phone' => '082112345678',
                
                // social media
                'instagram' => 'https://instagram.com/',
                'facebook' => 'https://facebook.com/',
                'linkedin' => 'https://linkedin.com/',
                'github' => 'https://github.com/',
            ]
        );

        Developers::create(
            [
                'first_name' => 'Efati',
                'last_name' => 'Isir',
                'picture' => '',
                // 'description' => 'Computer Ingineering Student',
                
                // contact
                'address' => 'Perumnas 3 Waena, Kelurahan Yabansai, Kecamatan Heram, Jayapura City, Papua.',
                'phone' => '082112345678',
                
                // social media
                'instagram' => 'https://instagram.com/',
                'facebook' => 'https://facebook.com/',
                'linkedin' => 'https://linkedin.com/',
                'github' => 'https://github.com/',
            ]
        );

        Developers::create(
            [
                'first_name' => 'Sulenias',
                'last_name' => 'Asso',
                'picture' => '',
                // 'description' => 'Computer Ingineering Student',
                
                // contact
                'address' => 'Perumnas Empat, Kecamatan Heram, Jayapura City, Papua.',
                'phone' => '082112345678',
                
                // social media
                'instagram' => 'https://instagram.com/',
                'facebook' => 'https://facebook.com/',
                'linkedin' => 'https://linkedin.com/',
                'github' => 'https://github.com/',
            ]
        );

        Developers::create(
            [
                'first_name' => 'Septemina',
                'last_name' => 'Waisimon',
                'picture' => '',
                // 'description' => 'Computer Ingineering Student',
                
                // contact
                'address' => 'Padang Bulan, Kecamatan Heram, Jayapura City, Papua.',
                'phone' => '082112345678',
                
                // social media
                'instagram' => 'https://instagram.com/',
                'facebook' => 'https://facebook.com/',
                'linkedin' => 'https://linkedin.com/',
                'github' => 'https://github.com/',
            ]
        );


        Developers::create(
            [
                'first_name' => 'Korius',
                'last_name' => 'Wenda',
                'picture' => '',
                // 'description' => 'Computer Ingineering Student',
                
                // contact
                'address' => 'Jalan Belut, Kelurahan Waena, Kecamatan Heram, Jayapura City, Papua.',
                'phone' => '082112345678',
                
                // social media
                'instagram' => 'https://instagram.com/',
                'facebook' => 'https://facebook.com/',
                'linkedin' => 'https://linkedin.com/',
                'github' => 'https://github.com/',
            ]
        );

    }
}
