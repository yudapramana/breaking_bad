<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenuItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menu_items')->delete();
        
        \DB::table('menu_items')->insert(array (
            0 => 
            array (
                'id' => 2,
                'created_at' => '2023-08-30 10:42:57',
                'updated_at' => '2023-08-30 10:42:57',
                'title' => 'KemenagPessel',
                'name' => NULL,
                'slug' => 'kemenag-pessel',
                'type' => 'category',
                'target' => '_self',
                'menu_id' => 1,
            ),
            1 => 
            array (
                'id' => 6,
                'created_at' => '2023-08-30 10:43:08',
                'updated_at' => '2023-08-30 10:43:08',
                'title' => 'Visi dan Misi',
                'name' => NULL,
                'slug' => 'post/visi-dan-misi',
                'type' => 'post',
                'target' => '_self',
                'menu_id' => 1,
            ),
            2 => 
            array (
                'id' => 7,
                'created_at' => '2023-08-30 10:43:08',
                'updated_at' => '2023-08-30 10:43:08',
                'title' => 'Struktur Organisasi',
                'name' => NULL,
                'slug' => 'post/struktur-organisasi',
                'type' => 'post',
                'target' => '_self',
                'menu_id' => 1,
            ),
            3 => 
            array (
                'id' => 8,
                'created_at' => '2023-08-30 10:43:08',
                'updated_at' => '2023-08-30 10:43:08',
                'title' => 'Prosedur Permohonan Informasi',
                'name' => NULL,
                'slug' => 'post/prosedur-permohonan-informasi',
                'type' => 'post',
                'target' => '_self',
                'menu_id' => 1,
            ),
            4 => 
            array (
                'id' => 9,
                'created_at' => '2023-08-30 10:43:08',
                'updated_at' => '2023-08-30 10:43:08',
                'title' => 'Prosedur Pengajuan Keberatan',
                'name' => NULL,
                'slug' => 'post/prosedur-pengajuan-keberatan',
                'type' => 'post',
                'target' => '_self',
                'menu_id' => 1,
            ),
            5 => 
            array (
                'id' => 10,
                'created_at' => '2023-08-30 10:43:09',
                'updated_at' => '2023-08-30 10:43:09',
                'title' => 'Prosedur Sengketa Informasi',
                'name' => NULL,
                'slug' => 'post/prosedur-sengketa-informasi',
                'type' => 'post',
                'target' => '_self',
                'menu_id' => 1,
            ),
            6 => 
            array (
                'id' => 11,
                'created_at' => '2023-08-30 12:49:47',
                'updated_at' => '2023-08-30 12:49:47',
                'title' => 'Beranda',
                'name' => NULL,
                'slug' => '#',
                'type' => 'custom',
                'target' => '_self',
                'menu_id' => 1,
            ),
            7 => 
            array (
                'id' => 12,
                'created_at' => '2023-08-30 12:58:08',
                'updated_at' => '2023-08-30 12:58:08',
                'title' => 'Profil PPID',
                'name' => NULL,
                'slug' => 'post/profil-ppid',
                'type' => 'post',
                'target' => '_self',
                'menu_id' => 1,
            ),
            8 => 
            array (
                'id' => 13,
                'created_at' => '2023-08-30 12:58:08',
                'updated_at' => '2023-08-30 12:58:08',
                'title' => 'Profil Pejabat',
                'name' => NULL,
                'slug' => 'post/profil-pejabat',
                'type' => 'post',
                'target' => '_self',
                'menu_id' => 1,
            ),
            9 => 
            array (
                'id' => 14,
                'created_at' => '2023-08-30 13:00:30',
                'updated_at' => '2023-08-30 13:00:30',
                'title' => 'Struktur Organisasi PPID',
                'name' => NULL,
                'slug' => 'post/struktur-organisasi-ppid',
                'type' => 'post',
                'target' => '_self',
                'menu_id' => 1,
            ),
            10 => 
            array (
                'id' => 15,
                'created_at' => '2023-08-30 13:00:30',
                'updated_at' => '2023-08-30 13:00:30',
                'title' => 'Tugas dan Fungsi PPID',
                'name' => NULL,
                'slug' => 'post/tugas-dan-fungsi-ppid',
                'type' => 'post',
                'target' => '_self',
                'menu_id' => 1,
            ),
            11 => 
            array (
                'id' => 16,
                'created_at' => '2023-08-30 13:02:17',
                'updated_at' => '2023-08-30 13:02:17',
                'title' => 'Visi, Misi dan Moto PPID',
                'name' => NULL,
                'slug' => 'post/visi-misi-dan-moto-ppid',
                'type' => 'post',
                'target' => '_self',
                'menu_id' => 1,
            ),
            12 => 
            array (
                'id' => 17,
                'created_at' => '2023-08-30 14:29:45',
                'updated_at' => '2023-08-30 14:29:45',
                'title' => 'Kotak Saran',
                'name' => NULL,
                'slug' => 'contact',
                'type' => 'custom',
                'target' => '_self',
                'menu_id' => 1,
            ),
            13 => 
            array (
                'id' => 18,
                'created_at' => '2023-08-30 17:08:35',
                'updated_at' => '2023-08-31 19:35:59',
                'title' => 'Survey Publik',
                'name' => 'Survey Indeks Kepuasan Masyarakat',
                'slug' => 'https://sikm.kemenagpessel.com',
                'type' => 'custom',
                'target' => '_blank',
                'menu_id' => 1,
            ),
            14 => 
            array (
                'id' => 20,
                'created_at' => '2023-08-30 17:36:54',
                'updated_at' => '2023-08-30 17:36:54',
                'title' => 'Informasi Berkala',
                'name' => NULL,
                'slug' => 'info/informasi_berkala',
                'type' => 'custom',
                'target' => '_self',
                'menu_id' => 1,
            ),
            15 => 
            array (
                'id' => 21,
                'created_at' => '2023-08-30 17:37:24',
                'updated_at' => '2023-08-30 17:37:24',
                'title' => 'Informasi Serta Merta',
                'name' => NULL,
                'slug' => 'info/informasi_serta_merta',
                'type' => 'custom',
                'target' => '_self',
                'menu_id' => 1,
            ),
            16 => 
            array (
                'id' => 22,
                'created_at' => '2023-08-30 17:37:43',
                'updated_at' => '2023-08-30 17:37:43',
                'title' => 'Informasi Setiap Saat',
                'name' => NULL,
                'slug' => 'info/informasi_setiap_saat',
                'type' => 'custom',
                'target' => '_self',
                'menu_id' => 1,
            ),
            17 => 
            array (
                'id' => 23,
                'created_at' => '2023-08-30 17:37:58',
                'updated_at' => '2023-08-30 17:37:58',
                'title' => 'Informasi Dikecualikan',
                'name' => NULL,
                'slug' => 'info/informasi_dikecualikan',
                'type' => 'custom',
                'target' => '_self',
                'menu_id' => 1,
            ),
            18 => 
            array (
                'id' => 25,
                'created_at' => '2023-08-31 19:26:46',
                'updated_at' => '2023-08-31 19:26:46',
                'title' => 'e-PPID Mobile',
                'name' => NULL,
                'slug' => 'post/e-ppid-mobile',
                'type' => 'post',
                'target' => '_self',
                'menu_id' => 1,
            ),
            19 => 
            array (
                'id' => 26,
                'created_at' => '2023-08-31 19:30:37',
                'updated_at' => '2023-08-31 19:30:37',
                'title' => 'SOP Layanan Informasi Publik',
                'name' => NULL,
                'slug' => 'post/sop-layanan-informasi-publik',
                'type' => 'post',
                'target' => '_self',
                'menu_id' => 1,
            ),
            20 => 
            array (
                'id' => 29,
                'created_at' => '2023-08-31 19:40:28',
                'updated_at' => '2023-08-31 19:40:28',
                'title' => 'Maklumat Pelayanan',
                'name' => NULL,
                'slug' => 'post/maklumat-pelayanan',
                'type' => 'post',
                'target' => '_self',
                'menu_id' => 1,
            ),
            21 => 
            array (
                'id' => 30,
                'created_at' => '2023-08-31 19:40:28',
                'updated_at' => '2023-08-31 19:40:28',
                'title' => 'Jadwal Pelayanan',
                'name' => NULL,
                'slug' => 'post/jadwal-pelayanan',
                'type' => 'post',
                'target' => '_self',
                'menu_id' => 1,
            ),
            22 => 
            array (
                'id' => 31,
                'created_at' => '2023-08-31 19:40:28',
                'updated_at' => '2023-08-31 19:40:28',
                'title' => 'Biaya Tarif Layanan',
                'name' => NULL,
                'slug' => 'post/biaya-tarif-layanan',
                'type' => 'post',
                'target' => '_self',
                'menu_id' => 1,
            ),
            23 => 
            array (
                'id' => 32,
                'created_at' => '2023-08-31 19:40:28',
                'updated_at' => '2023-08-31 19:40:28',
                'title' => 'Standar Pelayanan',
                'name' => NULL,
                'slug' => 'post/standar-pelayanan',
                'type' => 'post',
                'target' => '_self',
                'menu_id' => 1,
            ),
            24 => 
            array (
                'id' => 33,
                'created_at' => '2023-09-07 08:05:29',
                'updated_at' => '2023-09-07 08:05:29',
                'title' => 'Berita',
                'name' => NULL,
                'slug' => 'berita',
                'type' => 'custom',
                'target' => '_self',
                'menu_id' => 1,
            ),
            25 => 
            array (
                'id' => 34,
                'created_at' => '2023-09-07 09:16:27',
                'updated_at' => '2023-09-07 09:16:27',
                'title' => 'Aktifitas',
                'name' => NULL,
                'slug' => 'aktifitas',
                'type' => 'custom',
                'target' => '_self',
                'menu_id' => 1,
            ),
            26 => 
            array (
                'id' => 35,
                'created_at' => '2023-09-13 16:14:34',
                'updated_at' => '2023-09-13 16:14:34',
                'title' => 'Profil',
                'name' => NULL,
                'slug' => 'profil',
                'type' => 'category',
                'target' => '_self',
                'menu_id' => 1,
            ),
            27 => 
            array (
                'id' => 36,
                'created_at' => '2023-09-13 16:15:15',
                'updated_at' => '2023-09-13 16:15:15',
                'title' => 'Kotak Saran',
                'name' => NULL,
                'slug' => 'contact',
                'type' => 'custom',
                'target' => '_self',
                'menu_id' => 1,
            ),
            28 => 
            array (
                'id' => 37,
                'created_at' => '2023-09-13 16:18:32',
                'updated_at' => '2023-09-13 16:18:32',
                'title' => 'Struktur Organisasi',
                'name' => NULL,
                'slug' => 'post/struktur-organisasi',
                'type' => 'post',
                'target' => '_self',
                'menu_id' => 1,
            ),
            29 => 
            array (
                'id' => 38,
                'created_at' => '2023-09-13 21:06:49',
                'updated_at' => '2023-09-13 22:03:13',
                'title' => 'Galeri',
                'name' => 'Galeri',
                'slug' => 'sect/gallery',
                'type' => 'custom',
                'target' => '_self',
                'menu_id' => 1,
            ),
            30 => 
            array (
                'id' => 39,
                'created_at' => '2023-09-13 21:08:10',
                'updated_at' => '2023-10-25 20:58:02',
                'title' => 'Artikel',
                'name' => 'Artikel',
                'slug' => 'blog?category=artikel',
                'type' => 'custom',
                'target' => '_self',
                'menu_id' => 1,
            ),
            31 => 
            array (
                'id' => 41,
                'created_at' => '2023-09-13 21:19:20',
                'updated_at' => '2023-10-26 15:15:00',
                'title' => 'Pengaduan',
                'name' => 'Pengaduan',
                'slug' => '#',
                'type' => 'custom',
                'target' => '_self',
                'menu_id' => 1,
            ),
            32 => 
            array (
                'id' => 42,
                'created_at' => '2023-09-13 21:19:33',
                'updated_at' => '2023-09-13 21:19:33',
                'title' => 'Layanan Publik',
                'name' => NULL,
                'slug' => '#',
                'type' => 'custom',
                'target' => '_self',
                'menu_id' => 1,
            ),
            33 => 
            array (
                'id' => 43,
                'created_at' => '2023-09-13 21:20:19',
                'updated_at' => '2023-09-13 21:20:19',
                'title' => 'Kolom',
                'name' => NULL,
                'slug' => '#',
                'type' => 'custom',
                'target' => '_self',
                'menu_id' => 1,
            ),
            34 => 
            array (
                'id' => 45,
                'created_at' => '2023-09-13 21:21:41',
                'updated_at' => '2023-09-13 21:41:08',
                'title' => 'Opini',
                'name' => 'Opini',
                'slug' => 'blog?category=opini',
                'type' => 'custom',
                'target' => '_self',
                'menu_id' => 1,
            ),
            35 => 
            array (
                'id' => 46,
                'created_at' => '2023-09-13 21:22:03',
                'updated_at' => '2023-09-13 21:41:22',
                'title' => 'Wawancara',
                'name' => 'Wawancara',
                'slug' => 'blog?category=wawancara',
                'type' => 'custom',
                'target' => '_self',
                'menu_id' => 1,
            ),
            36 => 
            array (
                'id' => 47,
                'created_at' => '2023-09-13 21:23:03',
                'updated_at' => '2023-09-13 21:23:22',
                'title' => 'Data Pegawai',
                'name' => 'Data Pegawai',
                'slug' => 'https://simpeg.kemenag.go.id/laporan/total_pegawai.aspx',
                'type' => 'custom',
                'target' => '_blank',
                'menu_id' => 1,
            ),
            37 => 
            array (
                'id' => 48,
                'created_at' => '2023-09-13 21:25:52',
                'updated_at' => '2023-09-13 21:25:52',
                'title' => 'Sejarah Kementerian Agama',
                'name' => NULL,
                'slug' => 'post/sejarah-kementerian-agama',
                'type' => 'post',
                'target' => '_self',
                'menu_id' => 1,
            ),
            38 => 
            array (
                'id' => 49,
                'created_at' => '2023-09-13 21:28:24',
                'updated_at' => '2023-09-13 21:28:24',
                'title' => 'Visi Misi Kementerian Agama',
                'name' => NULL,
                'slug' => 'post/visi-misi-kementerian-agama',
                'type' => 'post',
                'target' => '_self',
                'menu_id' => 1,
            ),
            39 => 
            array (
                'id' => 50,
                'created_at' => '2023-09-13 21:31:37',
                'updated_at' => '2023-09-13 21:31:37',
                'title' => 'Kedudukan, Tugas dan Fungsi Kementerian Agama Provinsi',
                'name' => NULL,
                'slug' => 'post/kedudukan-tugas-dan-fungsi-kementerian-agama-provinsi',
                'type' => 'post',
                'target' => '_self',
                'menu_id' => 1,
            ),
            40 => 
            array (
                'id' => 52,
                'created_at' => '2023-09-13 21:34:09',
                'updated_at' => '2023-09-13 21:35:46',
                'title' => 'Informasi Setiap Saat',
                'name' => 'Informasi Setiap Saat',
                'slug' => 'info/informasi_setiap_saat',
                'type' => 'custom',
                'target' => '_self',
                'menu_id' => 1,
            ),
            41 => 
            array (
                'id' => 53,
                'created_at' => '2023-09-13 21:34:30',
                'updated_at' => '2023-09-13 21:35:52',
                'title' => 'Informasi Serta Merta',
                'name' => 'Informasi Serta Merta',
                'slug' => 'info/informasi_serta_merta',
                'type' => 'custom',
                'target' => '_self',
                'menu_id' => 1,
            ),
            42 => 
            array (
                'id' => 54,
                'created_at' => '2023-09-13 21:34:50',
                'updated_at' => '2023-09-13 21:35:57',
                'title' => 'Informasi Dikecualikan',
                'name' => 'Informasi Dikecualikan',
                'slug' => 'info/informasi_dikecualikan',
                'type' => 'custom',
                'target' => '_self',
                'menu_id' => 1,
            ),
            43 => 
            array (
                'id' => 55,
                'created_at' => '2023-09-13 21:36:44',
                'updated_at' => '2023-09-13 21:36:44',
                'title' => 'Semua Informasi',
                'name' => NULL,
                'slug' => 'info/semua_informasi_publik',
                'type' => 'custom',
                'target' => '_self',
                'menu_id' => 1,
            ),
            44 => 
            array (
                'id' => 57,
                'created_at' => '2023-09-13 21:38:43',
                'updated_at' => '2023-09-13 21:38:43',
                'title' => 'Semua Informasi',
                'name' => NULL,
                'slug' => 'info/semua_informasi_publik',
                'type' => 'custom',
                'target' => '_self',
                'menu_id' => 1,
            ),
            45 => 
            array (
                'id' => 58,
                'created_at' => '2023-09-13 21:38:59',
                'updated_at' => '2023-09-13 21:38:59',
                'title' => 'Informasi Berkala',
                'name' => NULL,
                'slug' => 'info/informasi_berkala',
                'type' => 'custom',
                'target' => '_self',
                'menu_id' => 1,
            ),
            46 => 
            array (
                'id' => 59,
                'created_at' => '2023-09-13 21:39:26',
                'updated_at' => '2023-10-25 20:55:58',
                'title' => 'Informasi Serta Merta',
                'name' => 'Informasi Serta Merta',
                'slug' => 'info/informasi_serta_merta',
                'type' => 'custom',
                'target' => '_self',
                'menu_id' => 1,
            ),
            47 => 
            array (
                'id' => 60,
                'created_at' => '2023-09-13 21:39:47',
                'updated_at' => '2023-09-13 21:39:47',
                'title' => 'Informasi Setiap Saat',
                'name' => NULL,
                'slug' => 'info/informasi_setiap_saat',
                'type' => 'custom',
                'target' => '_self',
                'menu_id' => 1,
            ),
            48 => 
            array (
                'id' => 61,
                'created_at' => '2023-09-13 21:40:05',
                'updated_at' => '2023-09-13 21:40:05',
                'title' => 'Informasi Dikecualikan',
                'name' => NULL,
                'slug' => 'info/informasi_dikecualikan',
                'type' => 'custom',
                'target' => '_self',
                'menu_id' => 1,
            ),
            49 => 
            array (
                'id' => 62,
                'created_at' => '2023-09-13 21:54:22',
                'updated_at' => '2023-09-13 21:54:22',
                'title' => 'Berita',
                'name' => NULL,
                'slug' => 'berita',
                'type' => 'category',
                'target' => '_self',
                'menu_id' => 1,
            ),
            50 => 
            array (
                'id' => 64,
                'created_at' => '2023-09-15 10:52:17',
                'updated_at' => '2023-09-15 11:04:20',
                'title' => 'SIMKAH',
                'name' => 'SIMKAH',
                'slug' => 'https://simkah.kemenag.go.id/index.php',
                'type' => 'custom',
                'target' => '_blank',
                'menu_id' => 1,
            ),
            51 => 
            array (
                'id' => 65,
                'created_at' => '2023-10-25 12:06:40',
                'updated_at' => '2023-10-25 12:06:40',
                'title' => 'Utama',
                'name' => NULL,
                'slug' => 'blog?category=utama',
                'type' => 'custom',
                'target' => '_self',
                'menu_id' => 1,
            ),
            52 => 
            array (
                'id' => 66,
                'created_at' => '2023-10-25 12:07:03',
                'updated_at' => '2023-10-25 12:07:03',
                'title' => 'Daerah',
                'name' => NULL,
                'slug' => 'blog?category=daerah',
                'type' => 'custom',
                'target' => '_self',
                'menu_id' => 1,
            ),
            53 => 
            array (
                'id' => 67,
                'created_at' => '2023-10-25 12:07:21',
                'updated_at' => '2023-10-25 12:07:21',
                'title' => 'Nasional',
                'name' => NULL,
                'slug' => 'blog?category=nasional',
                'type' => 'custom',
                'target' => '_self',
                'menu_id' => 1,
            ),
            54 => 
            array (
                'id' => 68,
                'created_at' => '2023-10-25 12:07:33',
                'updated_at' => '2023-10-25 12:07:33',
                'title' => 'Internasional',
                'name' => NULL,
                'slug' => 'blog?category=internasional',
                'type' => 'custom',
                'target' => '_self',
                'menu_id' => 1,
            ),
            55 => 
            array (
                'id' => 70,
                'created_at' => '2023-10-26 13:15:58',
                'updated_at' => '2023-10-26 13:15:58',
                'title' => 'Informasi Publik',
                'name' => NULL,
                'slug' => '#',
                'type' => 'custom',
                'target' => '_self',
                'menu_id' => 1,
            ),
            56 => 
            array (
                'id' => 71,
                'created_at' => '2023-10-26 13:16:57',
                'updated_at' => '2023-10-26 13:16:57',
                'title' => 'Semua Informasi Publik',
                'name' => NULL,
                'slug' => 'info/semua_informasi_publik',
                'type' => 'custom',
                'target' => '_self',
                'menu_id' => 1,
            ),
            57 => 
            array (
                'id' => 72,
                'created_at' => '2023-10-26 13:17:31',
                'updated_at' => '2023-10-26 13:17:31',
                'title' => 'Informasi Serta Merta',
                'name' => NULL,
                'slug' => 'info/informasi_serta_merta',
                'type' => 'custom',
                'target' => '_self',
                'menu_id' => 1,
            ),
            58 => 
            array (
                'id' => 73,
                'created_at' => '2023-10-26 13:17:54',
                'updated_at' => '2023-10-26 13:17:54',
                'title' => 'Informasi Setiap Saat',
                'name' => NULL,
                'slug' => 'info/informasi_setiap_saat',
                'type' => 'custom',
                'target' => '_self',
                'menu_id' => 1,
            ),
            59 => 
            array (
                'id' => 74,
                'created_at' => '2023-10-26 13:18:36',
                'updated_at' => '2023-10-26 13:18:36',
                'title' => 'Informasi Berkala',
                'name' => NULL,
                'slug' => 'info/informasi_berkala',
                'type' => 'custom',
                'target' => '_self',
                'menu_id' => 1,
            ),
            60 => 
            array (
                'id' => 75,
                'created_at' => '2023-10-26 13:18:56',
                'updated_at' => '2023-10-26 13:18:56',
                'title' => 'Informasi Dikecualikan',
                'name' => NULL,
                'slug' => 'info/informasi_dikecualikan',
                'type' => 'custom',
                'target' => '_self',
                'menu_id' => 1,
            ),
            61 => 
            array (
                'id' => 76,
                'created_at' => '2023-10-26 15:15:29',
                'updated_at' => '2023-10-26 15:15:29',
                'title' => 'Pengaduan Masyarakat',
                'name' => 'Pengaduan Masyarakat',
                'slug' => 'https://siguntur.kemenag.go.id/ptsp/login',
                'type' => 'custom',
                'target' => '_self',
                'menu_id' => 1,
            ),
            62 => 
            array (
                'id' => 77,
                'created_at' => '2023-10-26 23:23:43',
                'updated_at' => '2023-10-26 23:23:43',
                'title' => 'Kakanwil Sumbar dari Masa ke Masa',
                'name' => NULL,
                'slug' => 'post/kakanwil-sumbar-dari-masa-ke-masa',
                'type' => 'post',
                'target' => '_self',
                'menu_id' => 1,
            ),
            63 => 
            array (
                'id' => 78,
                'created_at' => '2023-10-26 23:25:08',
                'updated_at' => '2023-10-26 23:25:08',
                'title' => 'Tentang Sumatera Barat',
                'name' => NULL,
                'slug' => 'post/tentang-sumatera-barat',
                'type' => 'post',
                'target' => '_self',
                'menu_id' => 1,
            ),
            64 => 
            array (
                'id' => 79,
                'created_at' => '2023-10-27 08:31:47',
                'updated_at' => '2023-10-27 08:31:47',
                'title' => 'Foto Peristiwa',
                'name' => NULL,
                'slug' => 'gallery/t/foto',
                'type' => 'custom',
                'target' => '_self',
                'menu_id' => 1,
            ),
            65 => 
            array (
                'id' => 80,
                'created_at' => '2023-10-27 08:31:55',
                'updated_at' => '2023-10-27 08:31:55',
                'title' => 'Video',
                'name' => NULL,
                'slug' => 'gallery/t/video',
                'type' => 'custom',
                'target' => '_self',
                'menu_id' => 1,
            ),
            66 => 
            array (
                'id' => 83,
                'created_at' => '2023-10-27 11:23:32',
                'updated_at' => '2023-10-27 11:24:08',
                'title' => 'Kabupaten Tanah Datar',
                'name' => 'Kabupaten Tanah Datar',
                'slug' => 'http://tanahdatar.kemenag.go.id/',
                'type' => 'custom',
                'target' => '_blank',
                'menu_id' => 1,
            ),
            67 => 
            array (
                'id' => 84,
                'created_at' => '2023-10-31 09:08:09',
                'updated_at' => '2023-10-31 09:08:09',
                'title' => 'Kabupaten Pasaman Barat',
                'name' => NULL,
                'slug' => 'post/kabupaten-pasaman-barat',
                'type' => 'post',
                'target' => '_self',
                'menu_id' => 1,
            ),
            68 => 
            array (
                'id' => 85,
                'created_at' => '2023-10-31 09:11:24',
                'updated_at' => '2023-10-31 09:11:24',
                'title' => 'Kabupaten Kepulauan Mentawai',
                'name' => NULL,
                'slug' => 'post/kabupaten-kepulauan-mentawai',
                'type' => 'post',
                'target' => '_self',
                'menu_id' => 1,
            ),
            69 => 
            array (
                'id' => 86,
                'created_at' => '2023-10-31 09:11:24',
                'updated_at' => '2023-10-31 09:11:24',
                'title' => 'Kabupaten Dharmasraya',
                'name' => NULL,
                'slug' => 'post/kabupaten-dharmasraya',
                'type' => 'post',
                'target' => '_self',
                'menu_id' => 1,
            ),
            70 => 
            array (
                'id' => 87,
                'created_at' => '2023-10-31 09:24:08',
                'updated_at' => '2023-10-31 09:24:08',
                'title' => 'Unit Kerja',
                'name' => NULL,
                'slug' => '/unit-kerja',
                'type' => 'custom',
                'target' => '_self',
                'menu_id' => 1,
            ),
            71 => 
            array (
                'id' => 88,
                'created_at' => '2023-10-31 09:24:30',
                'updated_at' => '2023-10-31 09:24:30',
                'title' => 'Kabupaten Pesisir Selatan',
                'name' => NULL,
                'slug' => 'post/kabupaten-pesisir-selatan',
                'type' => 'post',
                'target' => '_self',
                'menu_id' => 1,
            ),
            72 => 
            array (
                'id' => 89,
                'created_at' => '2023-10-31 09:24:30',
                'updated_at' => '2023-10-31 09:24:30',
                'title' => 'Kabupaten Agam',
                'name' => NULL,
                'slug' => 'post/kabupaten-agam',
                'type' => 'post',
                'target' => '_self',
                'menu_id' => 1,
            ),
            73 => 
            array (
                'id' => 90,
                'created_at' => '2023-10-31 09:24:30',
                'updated_at' => '2023-10-31 09:24:30',
                'title' => 'Kota Sawahlunto',
                'name' => NULL,
                'slug' => 'post/kota-sawahlunto',
                'type' => 'post',
                'target' => '_self',
                'menu_id' => 1,
            ),
            74 => 
            array (
                'id' => 91,
                'created_at' => '2023-10-31 09:24:30',
                'updated_at' => '2023-10-31 09:24:30',
                'title' => 'Kota Payakumbuh',
                'name' => NULL,
                'slug' => 'post/kota-payakumbuh',
                'type' => 'post',
                'target' => '_self',
                'menu_id' => 1,
            ),
            75 => 
            array (
                'id' => 92,
                'created_at' => '2023-10-31 09:24:30',
                'updated_at' => '2023-10-31 09:24:30',
                'title' => 'Kota Pariaman',
                'name' => NULL,
                'slug' => 'post/kota-pariaman',
                'type' => 'post',
                'target' => '_self',
                'menu_id' => 1,
            ),
            76 => 
            array (
                'id' => 93,
                'created_at' => '2023-10-31 09:24:30',
                'updated_at' => '2023-10-31 09:24:30',
                'title' => 'Kota Padang Panjang',
                'name' => NULL,
                'slug' => 'post/kota-padang-panjang',
                'type' => 'post',
                'target' => '_self',
                'menu_id' => 1,
            ),
            77 => 
            array (
                'id' => 94,
                'created_at' => '2023-10-31 09:24:30',
                'updated_at' => '2023-10-31 09:24:30',
                'title' => 'Kota Padang',
                'name' => NULL,
                'slug' => 'post/kota-padang',
                'type' => 'post',
                'target' => '_self',
                'menu_id' => 1,
            ),
            78 => 
            array (
                'id' => 95,
                'created_at' => '2023-10-31 09:24:30',
                'updated_at' => '2023-10-31 09:24:30',
                'title' => 'Kota Bukittinggi',
                'name' => NULL,
                'slug' => 'post/kota-bukittinggi',
                'type' => 'post',
                'target' => '_self',
                'menu_id' => 1,
            ),
            79 => 
            array (
                'id' => 96,
                'created_at' => '2023-10-31 09:24:30',
                'updated_at' => '2023-10-31 09:24:30',
                'title' => 'Kabupaten Tanah Datar',
                'name' => NULL,
                'slug' => 'post/kabupaten-tanah-datar',
                'type' => 'post',
                'target' => '_self',
                'menu_id' => 1,
            ),
            80 => 
            array (
                'id' => 97,
                'created_at' => '2023-10-31 09:24:30',
                'updated_at' => '2023-10-31 09:24:30',
                'title' => 'Kabupaten Solok Selatan',
                'name' => NULL,
                'slug' => 'post/kabupaten-solok-selatan',
                'type' => 'post',
                'target' => '_self',
                'menu_id' => 1,
            ),
            81 => 
            array (
                'id' => 98,
                'created_at' => '2023-10-31 09:24:30',
                'updated_at' => '2023-10-31 09:24:30',
                'title' => 'Kota Solok',
                'name' => NULL,
                'slug' => 'post/kota-solok',
                'type' => 'post',
                'target' => '_self',
                'menu_id' => 1,
            ),
            82 => 
            array (
                'id' => 99,
                'created_at' => '2023-10-31 09:24:30',
                'updated_at' => '2023-10-31 09:24:30',
                'title' => 'Kabupaten Sijunjung',
                'name' => NULL,
                'slug' => 'post/kabupaten-sijunjung',
                'type' => 'post',
                'target' => '_self',
                'menu_id' => 1,
            ),
            83 => 
            array (
                'id' => 100,
                'created_at' => '2023-10-31 09:24:30',
                'updated_at' => '2023-10-31 09:24:30',
                'title' => 'Kabupaten Pasaman',
                'name' => NULL,
                'slug' => 'post/kabupaten-pasaman',
                'type' => 'post',
                'target' => '_self',
                'menu_id' => 1,
            ),
            84 => 
            array (
                'id' => 101,
                'created_at' => '2023-10-31 09:24:30',
                'updated_at' => '2023-10-31 09:24:30',
                'title' => 'Kabupaten Padang Pariaman',
                'name' => NULL,
                'slug' => 'post/kabupaten-padang-pariaman',
                'type' => 'post',
                'target' => '_self',
                'menu_id' => 1,
            ),
            85 => 
            array (
                'id' => 102,
                'created_at' => '2023-10-31 09:24:30',
                'updated_at' => '2023-10-31 09:24:30',
                'title' => 'Kabupaten Lima Puluh Kota',
                'name' => NULL,
                'slug' => 'post/kabupaten-lima-puluh-kota',
                'type' => 'post',
                'target' => '_self',
                'menu_id' => 1,
            ),
            86 => 
            array (
                'id' => 103,
                'created_at' => '2023-10-31 09:24:30',
                'updated_at' => '2023-10-31 09:24:30',
                'title' => 'Kabupaten Kepulauan Mentawai',
                'name' => NULL,
                'slug' => 'post/kabupaten-kepulauan-mentawai',
                'type' => 'post',
                'target' => '_self',
                'menu_id' => 1,
            ),
            87 => 
            array (
                'id' => 104,
                'created_at' => '2023-10-31 09:24:30',
                'updated_at' => '2023-10-31 09:24:30',
                'title' => 'Kabupaten Dharmasraya',
                'name' => NULL,
                'slug' => 'post/kabupaten-dharmasraya',
                'type' => 'post',
                'target' => '_self',
                'menu_id' => 1,
            ),
            88 => 
            array (
                'id' => 105,
                'created_at' => '2023-10-31 09:24:30',
                'updated_at' => '2023-10-31 09:24:30',
                'title' => 'Kabupaten Pasaman Barat',
                'name' => NULL,
                'slug' => 'post/kabupaten-pasaman-barat',
                'type' => 'post',
                'target' => '_self',
                'menu_id' => 1,
            ),
            89 => 
            array (
                'id' => 106,
                'created_at' => '2023-10-31 09:55:30',
                'updated_at' => '2023-10-31 09:55:30',
                'title' => 'Kabupaten Solok',
                'name' => NULL,
                'slug' => 'post/kabupaten-solok',
                'type' => 'post',
                'target' => '_self',
                'menu_id' => 1,
            ),
        ));
        
        
    }
}