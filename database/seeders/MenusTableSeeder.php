<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menus')->delete();
        
        \DB::table('menus')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => '2023-08-30 10:42:54',
                'updated_at' => '2023-10-25 20:58:02',
                'title' => 'Header',
                'location' => 'header',
                'content' => '[[{"id":11,"title":"Beranda","target":"_self","slug":"#","type":"custom","children":[[]]},{"id":35,"title":"Profil","target":"_self","slug":"profil","type":"category","children":[[{"id":47,"title":"Data Pegawai","target":"_blank","slug":"https:\\/\\/simpeg.kemenag.go.id\\/laporan\\/total_pegawai.aspx","type":"custom","children":[[]]},{"id":37,"title":"Struktur Organisasi","target":"_self","slug":"post\\/struktur-organisasi","type":"post","children":[[]]},{"id":48,"title":"Sejarah Kementerian Agama","target":"_self","slug":"post\\/sejarah-kementerian-agama","type":"post","children":[[]]},{"id":49,"title":"Visi Misi Kementerian Agama","target":"_self","slug":"post\\/visi-misi-kementerian-agama","type":"post","children":[[]]},{"id":50,"title":"Kedudukan, Tugas dan Fungsi Kementerian Agama Provinsi","target":"_self","slug":"post\\/kedudukan-tugas-dan-fungsi-kementerian-agama-provinsi","type":"post","children":[[]]}]]},{"id":56,"title":"Data dan Informasi","target":"_self","slug":"data-dan-informasi","type":"category","children":[[{"id":57,"title":"Semua Informasi","target":"_self","slug":"info\\/semua_informasi_publik","type":"custom","children":[[]]},{"id":58,"title":"Informasi Berkala","target":"_self","slug":"info\\/informasi_berkala","type":"custom","children":[[]]},{"id":60,"title":"Informasi Setiap Saat","target":"_self","slug":"info\\/informasi_setiap_saat","type":"custom","children":[[]]},{"id":59,"title":"Informasi Serta Merta","target":"_self","slug":"info\\/informasi_serta_merta","type":"custom","children":[[]]},{"id":61,"title":"Informasi Dikecualikan","target":"_self","slug":"info\\/informasi_dikecualikan","type":"custom","children":[[]]}]]},{"id":38,"title":"Media & Galeri","target":"_self","slug":"sect\\/gallery","type":"custom","children":[[]]},{"id":62,"title":"Berita","target":"_self","slug":"berita","type":"category","children":[[{"id":65,"title":"Utama","target":"_self","slug":"blog?category=utama","type":"custom","children":[[]]},{"id":66,"title":"Daerah","target":"_self","slug":"blog?category=daerah","type":"custom","children":[[]]},{"id":67,"title":"Nasional","target":"_self","slug":"blog?category=nasional","type":"custom","children":[[]]},{"id":68,"title":"Internasional","target":"_self","slug":"blog?category=internasional","type":"custom","children":[[]]}]]},{"id":43,"title":"Kolom","target":"_self","slug":"#","type":"custom","children":[[{"id":45,"title":"Opini","target":"_self","slug":"blog?category=opini","type":"custom","children":[[]]},{"id":39,"title":"Artikel","target":"_self","slug":"blog?category=artikel","type":"custom","children":[[]]},{"id":46,"title":"Wawancara","target":"_self","slug":"blog?category=wawancara","type":"custom","children":[[]]}]]},{"id":41,"title":"Aduan Masyarakat","target":"_self","slug":"#","type":"custom","children":[[]]},{"id":42,"title":"Layanan Publik","target":"_self","slug":"#","type":"custom","children":[[{"id":64,"title":"SIMKAH","target":"_blank","slug":"https:\\/\\/simkah.kemenag.go.id\\/index.php","type":"custom","children":[[]]}]]},{"id":36,"title":"Kotak Saran","target":"_self","slug":"contact","type":"custom","children":[[]]}]]',
            ),
        ));
        
        
    }
}