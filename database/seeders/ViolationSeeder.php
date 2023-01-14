<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Violation;

class ViolationSeeder extends Seeder
{

    public function run() {

        Violation::create([
            'aspek' => 'kelakuan',
            'pelanggaran' => 'Mengganggu ketenangan proses KBM',
            'poin' => '5'
        ]);

        Violation::create([
            'aspek' => 'kelakuan',
            'pelanggaran' => 'Tidak tertib saat upacara bendera',
            'poin' => '5'
        ]);

        Violation::create([
            'aspek' => 'kelakuan',
            'pelanggaran' => 'Makan/minum dalam kelas saat KBM',
            'poin' => '10'
        ]);

        Violation::create([
            'aspek' => 'kelakuan',
            'pelanggaran' => 'Jahil/bercanda berlebihan dengan teman',
            'poin' => '5'
        ]);

        Violation::create([
            'aspek' => 'kelakuan',
            'pelanggaran' => 'Menyontek/memberikan contekan saat ulangan',
            'poin' => '10'
        ]);

        Violation::create([
            'aspek' => 'kelakuan',
            'pelanggaran' => 'Mencoret-coret lingkungan sekolah',
            'poin' => '10'
        ]);

        Violation::create([
            'aspek' => 'kelakuan',
            'pelanggaran' => 'Berkata bohong/hoax',
            'poin' => '10'
        ]);

        Violation::create([
            'aspek' => 'kelakuan',
            'pelanggaran' => 'Memalsukan tandatangan orangtua/wali',
            'poin' => '10'
        ]);

        Violation::create([
            'aspek' => 'kelakuan',
            'pelanggaran' => 'Menyalahgunakan uang sekolah',
            'poin' => '10'
        ]);

        Violation::create([
            'aspek' => 'kelakuan',
            'pelanggaran' => 'Mengaktifkan HP saat KBM',
            'poin' => '5'
        ]);

        Violation::create([
            'aspek' => 'kelakuan',
            'pelanggaran' => 'Membolos',
            'poin' => '20'
        ]);

        Violation::create([
            'aspek' => 'kelakuan',
            'pelanggaran' => 'Memfitnah',
            'poin' => '20'
        ]);

        Violation::create([
            'aspek' => 'kelakuan',
            'pelanggaran' => 'Membawa rokok/merokok',
            'poin' => '20'
        ]);

        Violation::create([
            'aspek' => 'kelakuan',
            'pelanggaran' => 'Melompat pagar',
            'poin' => '20'
        ]);

        Violation::create([
            'aspek' => 'kelakuan',
            'pelanggaran' => 'Bermesraan/tindak amoral di lingkungan sekolah',
            'poin' => '20'
        ]);

        Violation::create([
            'aspek' => 'kelakuan',
            'pelanggaran' => 'Dikeluarkan dari tempat PKL',
            'poin' => '25'
        ]);

        Violation::create([
            'aspek' => 'kelakuan',
            'pelanggaran' => 'Melakukan pemalakan',
            'poin' => '45'
        ]);

        Violation::create([
            'aspek' => 'kelakuan',
            'pelanggaran' => 'Terlibat perkelahian di sekolah/antar sekolah',
            'poin' => '45'
        ]);

        Violation::create([
            'aspek' => 'kelakuan',
            'pelanggaran' => 'Menghina/mencemooh guru/karyawan dengan kata-kata tidak terpuji',
            'poin' => '45'
        ]);

        Violation::create([
            'aspek' => 'kelakuan',
            'pelanggaran' => 'Merusak dengan sengaja barang milik sekolah/guru/karyawan',
            'poin' => '45'
        ]);

        Violation::create([
            'aspek' => 'kelakuan',
            'pelanggaran' => 'Membawa/menggunakan/mengedarkan minuman keras',
            'poin' => '45'
        ]);

        Violation::create([
            'aspek' => 'kelakuan',
            'pelanggaran' => 'Membawa/mengedarkan media porno',
            'poin' => '45'
        ]);

        Violation::create([
            'aspek' => 'kelakuan',
            'pelanggaran' => 'Mencuri',
            'poin' => '75'
        ]);

        Violation::create([
            'aspek' => 'kelakuan',
            'pelanggaran' => 'Membawa/menggunakan senjata tajam/api',
            'poin' => '100'
        ]);

        Violation::create([
            'aspek' => 'kelakuan',
            'pelanggaran' => 'Membawa/menggunakan/mengedarkan narkoba',
            'poin' => '100'
        ]);

        Violation::create([
            'aspek' => 'kelakuan',
            'pelanggaran' => 'Menantang guru/karyawan secara fisik',
            'poin' => '100'
        ]);

        Violation::create([
            'aspek' => 'kerajinan',
            'pelanggaran' => 'Terlambat masuk sekolah pukul 06.45',
            'poin' => '5'
        ]);

        Violation::create([
            'aspek' => 'kerajinan',
            'pelanggaran' => 'Terlambat mengikuti upacara bendera',
            'poin' => '5'
        ]);

        Violation::create([
            'aspek' => 'kerajinan',
            'pelanggaran' => 'Tidak mengikuti kegiatan eskul yang dipilih',
            'poin' => '5'
        ]);

        Violation::create([
            'aspek' => 'kerajinan',
            'pelanggaran' => 'Terlambat masuk kelas setelah pergantian jam',
            'poin' => '5'
        ]);

        Violation::create([
            'aspek' => 'kerajinan',
            'pelanggaran' => 'Tidak mengerjakan tugas/PR',
            'poin' => '5'
        ]);

        Violation::create([
            'aspek' => 'kerajinan',
            'pelanggaran' => 'Tidak masuk tanpa keterangan',
            'poin' => '5'
        ]);

        Violation::create([
            'aspek' => 'kerajinan',
            'pelanggaran' => 'Tidak masuk dengan keterangan palsu',
            'poin' => '20'
        ]);

        Violation::create([
            'aspek' => 'kerajinan',
            'pelanggaran' => 'Tidak membawa KPPS',
            'poin' => '5'
        ]);

        Violation::create([
            'aspek' => 'kerajinan',
            'pelanggaran' => 'Menghilangkan KPPS',
            'poin' => '10'
        ]);

        Violation::create([
            'aspek' => 'kerapian',
            'pelanggaran' => 'Memakai seragam tidak rapi',
            'poin' => '5'
        ]);

        Violation::create([
            'aspek' => 'kerapian',
            'pelanggaran' => 'Tidak memakai perlengkapan upacara',
            'poin' => '5'
        ]);

        Violation::create([
            'aspek' => 'kerapian',
            'pelanggaran' => 'Memakai jaket/sweater saat KBM, kecuali sedang sakit',
            'poin' => '5'
        ]);

        Violation::create([
            'aspek' => 'kerapian',
            'pelanggaran' => 'Memakai seragam tidak sesuai ketentuan',
            'poin' => '10'
        ]);

        Violation::create([
            'aspek' => 'kerapian',
            'pelanggaran' => 'Panjang rambut melebihi ketentuan',
            'poin' => '10'
        ]);

        Violation::create([
            'aspek' => 'kerapian',
            'pelanggaran' => 'Memakai perhiasan berlebihan',
            'poin' => '10'
        ]);

        Violation::create([
            'aspek' => 'kerapian',
            'pelanggaran' => 'Rambut dicat/diwarnai/mekakai jeli',
            'poin' => '10'
        ]);

        Violation::create([
            'aspek' => 'kebersihan',
            'pelanggaran' => 'Pakaian kotor dan berbau',
            'poin' => '5'
        ]);

        Violation::create([
            'aspek' => 'kebersihan',
            'pelanggaran' => 'Tidak mengembalikan peralatan makan kantin',
            'poin' => '5'
        ]);

        Violation::create([
            'aspek' => 'kebersihan',
            'pelanggaran' => 'Membuang sampah sembarangan',
            'poin' => '10'
        ]);

        Violation::create([
            'aspek' => 'kebersihan',
            'pelanggaran' => 'Menyimpan sampah di laci meja belajar',
            'poin' => '10'
        ]);
        
    }

}
