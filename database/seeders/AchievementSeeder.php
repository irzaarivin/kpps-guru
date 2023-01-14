<?php

namespace Database\Seeders;
use App\Models\Achievement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AchievementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Achievement::create([
            'aspek' => 'akademik',
            'prestasi' => 'Peringkat kelas ke-1',
            'poin' => '10'
        ]);

        Achievement::create([
            'aspek' => 'akademik',
            'prestasi' => 'Peringkat kelas ke-2',
            'poin' => '8'
        ]);

        Achievement::create([
            'aspek' => 'akademik',
            'prestasi' => 'Peringkat kelas ke-3',
            'poin' => '5'
        ]);

        Achievement::create([
            'aspek' => 'akademik',
            'prestasi' => 'Peringkat kelas paralel ke-1',
            'poin' => '15'
        ]);

        Achievement::create([
            'aspek' => 'akademik',
            'prestasi' => 'Peringkat kelas paralel ke-2',
            'poin' => '12'
        ]);

        Achievement::create([
            'aspek' => 'akademik',
            'prestasi' => 'Peringkat kelas paralel ke-3',
            'poin' => '10'
        ]);

        Achievement::create([
            'aspek' => 'akademik',
            'prestasi' => 'Juara I lomba mapel tingkat wilayah',
            'poin' => '15'
        ]);

        Achievement::create([
            'aspek' => 'akademik',
            'prestasi' => 'Juara II lomba mapel tingkat wilayah',
            'poin' => '10'
        ]);

        Achievement::create([
            'aspek' => 'akademik',
            'prestasi' => 'Juara III lomba mapel tingkat wilayah',
            'poin' => '5'
        ]);

        Achievement::create([
            'aspek' => 'akademik',
            'prestasi' => 'Juara I lomba O2SN',
            'poin' => '20'
        ]);

        Achievement::create([
            'aspek' => 'akademik',
            'prestasi' => 'Juara II lomba O2SN',
            'poin' => '15'
        ]);

        Achievement::create([
            'aspek' => 'akademik',
            'prestasi' => 'Juara III lomba O2SN',
            'poin' => '10'
        ]);

        Achievement::create([
            'aspek' => 'akademik',
            'prestasi' => 'Juara I Lomba Kompetensi Siswa',
            'poin' => '20'
        ]);

        Achievement::create([
            'aspek' => 'akademik',
            'prestasi' => 'Juara II Lomba Kompetensi Siswa',
            'poin' => '15'
        ]);

        Achievement::create([
            'aspek' => 'akademik',
            'prestasi' => 'Juara III Lomba Kompetensi Siswa',
            'poin' => '10'
        ]);

        Achievement::create([
            'aspek' => 'akademik',
            'prestasi' => 'Juara I FIKSI',
            'poin' => '25'
        ]);

        Achievement::create([
            'aspek' => 'akademik',
            'prestasi' => 'Juara II FIKSI',
            'poin' => '20'
        ]);

        Achievement::create([
            'aspek' => 'akademik',
            'prestasi' => 'Juara III FIKSI',
            'poin' => '15'
        ]);

        Achievement::create([
            'aspek' => 'akademik',
            'prestasi' => 'Juara I lomba FLS2N',
            'poin' => '35'
        ]);

        Achievement::create([
            'aspek' => 'akademik',
            'prestasi' => 'Juara II lomba FLS2N',
            'poin' => '30'
        ]);

        Achievement::create([
            'aspek' => 'akademik',
            'prestasi' => 'Juara III lomba FLS2N',
            'poin' => '25'
        ]);

        Achievement::create([
            'aspek' => 'akademik',
            'prestasi' => 'Juara I Olimpiade Internasional',
            'poin' => '60'
        ]);

        Achievement::create([
            'aspek' => 'akademik',
            'prestasi' => 'Juara II Olimpiade Internasional',
            'poin' => '50'
        ]);

        Achievement::create([
            'aspek' => 'akademik',
            'prestasi' => 'Juara III Olimpiade Internasional',
            'poin' => '40'
        ]);

        Achievement::create([
            'aspek' => 'non-akademik',
            'prestasi' => 'Ketua Osis/PK',
            'poin' => '20'
        ]);

        Achievement::create([
            'aspek' => 'non-akademik',
            'prestasi' => 'BPH Osis/PK',
            'poin' => '15'
        ]);

        Achievement::create([
            'aspek' => 'non-akademik',
            'prestasi' => 'Pengurus Osis/Pk/Ekstra kurikuler',
            'poin' => '10'
        ]);

        Achievement::create([
            'aspek' => 'non-akademik',
            'prestasi' => 'Pengurus Organisasi tingkat Wilayah',
            'poin' => '15'
        ]);

        Achievement::create([
            'aspek' => 'non-akademik',
            'prestasi' => 'Pengurus Organisasi tingkat Provinsi',
            'poin' => '20'
        ]);

        Achievement::create([
            'aspek' => 'non-akademik',
            'prestasi' => 'Pengurus Organisasi tingkat Nasional',
            'poin' => '25'
        ]);

        Achievement::create([
            'aspek' => 'non-akademik',
            'prestasi' => 'Juara I Tingkat Sekolah',
            'poin' => '5'
        ]);

        Achievement::create([
            'aspek' => 'non-akademik',
            'prestasi' => 'Juara II Tingkat Sekolah',
            'poin' => '3'
        ]);

        Achievement::create([
            'aspek' => 'non-akademik',
            'prestasi' => 'Juara III Tingkat Sekolah',
            'poin' => '2'
        ]);

        Achievement::create([
            'aspek' => 'non-akademik',
            'prestasi' => 'Juara I Tingkat Wilayah',
            'poin' => '15'
        ]);

        Achievement::create([
            'aspek' => 'non-akademik',
            'prestasi' => 'Juara II Tingkat Wilayah',
            'poin' => '10'
        ]);

        Achievement::create([
            'aspek' => 'non-akademik',
            'prestasi' => 'Juara III Tingkat Wilayah',
            'poin' => '5'
        ]);

        Achievement::create([
            'aspek' => 'non-akademik',
            'prestasi' => 'Juara I Tingkat Provinsi',
            'poin' => '20'
        ]);

        Achievement::create([
            'aspek' => 'non-akademik',
            'prestasi' => 'Juara II Tingkat Provinsi',
            'poin' => '15'
        ]);

        Achievement::create([
            'aspek' => 'non-akademik',
            'prestasi' => 'Juara III Tingkat Provinsi',
            'poin' => '10'
        ]);

        Achievement::create([
            'aspek' => 'non-akademik',
            'prestasi' => 'Juara I Tingkat Nasional',
            'poin' => '30'
        ]);

        Achievement::create([
            'aspek' => 'non-akademik',
            'prestasi' => 'Juara II Tingkat Nasional',
            'poin' => '25'
        ]);

        Achievement::create([
            'aspek' => 'non-akademik',
            'prestasi' => 'Juara III Tingkat Nasional',
            'poin' => '20'
        ]);

        Achievement::create([
            'aspek' => 'non-akademik',
            'prestasi' => 'Juara I Tingkat Internasional',
            'poin' => '55'
        ]);

        Achievement::create([
            'aspek' => 'non-akademik',
            'prestasi' => 'Juara II Tingkat Internasional',
            'poin' => '45'
        ]);

        Achievement::create([
            'aspek' => 'non-akademik',
            'prestasi' => 'Juara III Tingkat Internasional',
            'poin' => '35'
        ]);

    }
}
