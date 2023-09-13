<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('posts')->delete();
        
        \DB::table('posts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'category_id' => 6,
                'user_id' => 1,
                'cover' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1694591002/PandanViewMandeh/image_1920x_64ff364b73879_xzhppt.jpg',
                'title' => 'Terbanyak se Indonesia, 46 Film Ikuti KFPI tingkat Sumbar',
                'slug' => 'terbanyak-se-indonesia-46-film-ikuti-kfpi-tingkat-sumbar',
            'desc' => '<p>Bukittinggi, Humas--Dalam rangka menumbuhkembangkan nuansa keagamaan dan mensiarkan seni budaya Islam di tengah-tengah generasi muda, Ditjen Bimas Islam Kemenag RI melalui Direktorat Penerangan Agama Islam&nbsp;menggelar&nbsp;Kompetisi Film Pendek Islami (KFPI).</p><p>Untuk tingkat Provinsi Sumatera Barat proses pendaftaran sudah dilakukan sejak bulan Juli hingga 1 September 2023. Sementera untuk penilaian dan pengumunan pemenang dilaksanakan tanggal 11-13 September 2023.</p><p>Hal ini disampaikan Ketua Tim Kerja Seni Budaya Islam, Musabaqah Alquran dan Hadis, Afrizal disela-sela penilaian Kompetisi Film Pendek Islami, Senin malam (11/9) di Bukittinggi.</p><p>Hadir Analis Kebijakan Ahli Muda pada Subdit Seni Budaya dan Siaran Keagamaan Islam, Nurkumala Dewi, Dewan Hakim Nasional Nurhayati, Ketua Tim Kerja Penyuluh Thomas Febria, Ketua Tim Kerja Sisfo, Yesfi Mira Andria dan dewan juri Profesional Alglory dan Mak Ipin.</p><p>Pada kesempatan itu, Afrizal juga menjelaskan kompetisi film pendek tahun ini mengangkat tema agama, budaya dan kerukunan berbangsa&nbsp;dengan gendre film dokumenter. Sementara untuk durasi film 5-6 menit.</p><p>“Hingga hari terakhir pendaftaran 1 September lalu, tercatat ada 46 judul film yang ikut dalam kompetisi ini. Pesertanya berasal dari kabupaten kota se Sumatera Barat berasal dari umum dan jajaran Kementerian Agama,” jelas Afrizal.</p><p>Untuk penilaian lanjut Afrizal, penyelengara Bidang Penais Zawa menghadirkan unsur Kementerian Agam RI, Kanwil Kemenag Sumbar, Seniman/Budayawan, Influencer, Ahli IT/Akademisi (design grafis)/Media,&nbsp;dan&nbsp;Penggiat Perfilman.</p><p>Sementara itu, Kepala Kanwil Kemenag Sumbar diwakili Kepala Bidang Penerangan Agama Islam Yufrizal mengatakan kompetisi film pendek ini sudah memasuki tahun ke empat dilaksanakan Kanwil Kemenag Sumbar melalui Bidang Penaiszawa.</p><p>“Kegiatan ini sangat penting dalam memberikan perhatian khusus kepada generasi muda sebagai ujung tombak dalam memotivasi generasi muda untuk lebih mengenal nuansa kegamaan dan seni budaya Islam dalam kehidupannya,” tutur Yufrizal.</p><p>Olehkrenanya dalam mewujudkan tujuan ini lanjut Yufrizal, Kementerian Agama&nbsp;menyelenggarakan kegiatan ini secara rutin &nbsp;dengan genre, judul dan tema yang berbeda setiap tahunnya.</p><p>Menurut Yufrizal kompetisi film pendek ini hendaknya bisa mensosialisasikan agama, budaya dan kerukunan&nbsp;pada generasi muda.</p><p>“Dengan memberikan tema yang berbeda setiap tahunnya, hendaknya bisa memotivasi semangat generasi muda untuk lebih mengenal budaya, agama serta arti moderasi beragama dan toleransi melalui perfilman,” harap Kakanwil.</p><p>Analis Kebijakan Ahli Muda Subdit Seni Budaya dan Siaran Keagamaan Islam, Nurkumala Dewi memberikan apresiasi kepada Kanwil Kemenag Sumbar atas kesuksesan penyelenggaraan KFPI di Sumatera Barat dengan peserta terbanyak.</p><p>“Saat ini peserta Sumatera Barat masih unggul dari provinsi lain. Dengan rentang waktu yang lumayan singkat Sumatera Barat berhasil menggaet peserta dengan jumlah film 46 judul,” kata Dewi.</p><p>Setelah dilakukan penilaian ini, dewan juri akan mengumumkan 10 film yang masuk nominasi. Produser film tersebut akan dihadirkan dalam malam penganugerahan yang akan dilaksanakan esok malam, Selasa 12 September. Rinarisna</p>',
                'keywords' => 'Terbanyak se Indonesia, 46 Film Ikuti KFPI tingkat Sumbar',
                'meta_desc' => 'Terbanyak se Indonesia, 46 Film Ikuti KFPI tingkat Sumbar',
                'is_news' => 'yes',
                'reads' => 4,
                'created_at' => '2023-09-13 14:43:44',
                'updated_at' => '2023-09-13 15:56:00',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'category_id' => 6,
                'user_id' => 1,
                'cover' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1694595047/PandanViewMandeh/image_1920x_65002dc69c43f_h6hrbk.jpg',
                'title' => 'Sepuluh Karya Terbaik Lolos Nominasi KFPI Sumbar',
                'slug' => 'sepuluh-karya-terbaik-lolos-nominasi-kfpi-sumbar',
            'desc' => '<p>Bukittinggi, Humas—Proses penilaian dan penjurian Kompetisi Film Pendek Islami&nbsp; sudah memasuki puncak. Setelah melakukan diskusi yang cukup alot, dewan juri menetapkan 10 (sepuluh) karya film sebagai nominasi.<br><br>Kepala Bidang Penerangan Agama Islam Zakat dan Wakaf (Penaiszawa) diwakili Ketua Tim Kerja Seni Budaya Islam, Musabaqah dan Alquran Hadis, Afrizal mengatakan nominator terbaik ini akan dihadirkan dalam acara penganugerahan yang akan dilaksanakan malam ini.<br><br>“Alhamdulillah setelah diakukan penilaian oleh dewan juri, kita sudah mendapat sepuluh karya film yang akan dinilai kembali untuk ditetapkan sebagai pemenang. Dari 46 karya yang masuk sudah dinilai sesuai juknis,”&nbsp; ungkap Afrizal.<br><br>Dikatakan Afrizal, penilaian dan penjurian yang dilakukan dewan juri cukup ketat, karena sebagian besar film memiliki kualitas yang cukup bagus, baik dari ide cerita, pesan yang disampaikan dan kualitas audio visual.<br><br>"Potensi film di Sumatra Barat cukup baik, sehingga ada beberapa film yang nilainya tidak terlalu jauh berbeda. Ini menunjukkan para penggiat film di Sumatera Barat bisa berpacu menghasilkan karya terbaik," jelas Afrizal.<br><br>Sementara itu, Rizieq Amanullah sebagai LO pusat untuk Sumatera Barat sekaligus pemandu jalannya kompetisi mengatakan bahwa iven kali ini bergenree dokumenter.<br><br>"Dokumentar ini, bagaimana para peserta atau produser mengangkat sebuah peristiwa yang benar-benar nyata terjadi di masyarakat. Untuk saat ini temanya, agama, budaya dan kerukunan berbangsa," kata Rieziq.<br><br>Sebagai evaluasi lanjut Rizieq, untuk iven yang akan datang peserta sebaiknya lebih membaca juknis. Karena ada satu atau dua peserta yang mengirimkan karya film bergenre selain dokumenter.<br><br>Berikut 10 karya terbaik yang masuk nominasi Kompetisi Film Pendek Islami (KFPI) tingkat Provinsi Sumatera Barat:<br><br>1. Sumpah&nbsp; Satie Marapalam karya Alfath asal Kabupaten Agam<br><br>2. Nagari Tuo Pariangan karya Andreas Perdana asal Kata Padangpanjang<br><br>3. Pusako karya Ezzah Tanisa asal Kabupaten Limapuluh Kata<br><br>4. Moderasi di Rumah Gadang karya Muhammad Fajri asal Kata Kata Payakumbuh<br><br>5. Harmoni Tarwih 820 karya Muhammad Firdaus asal Kata Padang<br><br>6. Babaliak ka Surau karya Muhammad Reihan asal Kabupaten Solok<br><br>7 . Batu Angkek Sejarah tak Bertepi karya Poppy Novita&nbsp; asal Kabupaten Tanah Datar<br><br>8. Sejarah Istano Batu Basa Pagaruyung karya Riri Awalia Apersa asal Kab. Tanah Datar<br><br>9. Surau Gadang karya Wafdan Sahenkofa asal Kabupaten Solok Selatan<br><br>10. Syeikh Surau Baru&nbsp; Batusangka karya Wahyu Prima Nelga asal Kata Padang.<br>Rinarisna</p>',
                'keywords' => 'Sepuluh Karya Terbaik Lolos Nominasi KFPI Sumbar',
                'meta_desc' => 'Sepuluh Karya Terbaik Lolos Nominasi KFPI Sumbar',
                'is_news' => 'yes',
                'reads' => 2,
                'created_at' => '2023-09-13 15:51:04',
                'updated_at' => '2023-09-13 15:51:31',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'category_id' => 6,
                'user_id' => 1,
                'cover' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1694595498/PandanViewMandeh/image_1920x_64f9153db0b8e_rrlbxm.jpg',
                'title' => 'Evaluasi Haji, Gus Men Minta Kaji Istithaah Kesehatan dan Masa Tinggal Jemaah',
                'slug' => 'evaluasi-haji-gus-men-minta-kaji-istithaah-kesehatan-dan-masa-tinggal-jemaah',
            'desc' => '<p>Bandung, Humas--Direktorat Jenderal Penyelenggaraan Haji dan Umrah (PHU) Kemenag menggelar Rakerna Evaluasi Penyelenggaraan Ibadah Haji 1444 H/2023 M. Menag Yaqut Cholil Qoumas meminta agar skema penetapan istithaah kesehatan jemaah haji dimatangkan.&nbsp;</p><p>"Istithaah jemaah yang paling jadi persoalan adalah istithaah kesehatan. Saya usul, istithaah kesehatan mendahului pelunasan," pesan Menag Yaqut Cholil Qoumas di Bandung, Rabu (6/9/2023).</p><p>Hadir dalam kesempatan itu Wakil Ketua Komisi VIII DPR Tb Ace Hasan Syadzily, Wakil Menteri Agama Saiful Rahmat Dasuki, Dirjen Penyelenggaraan Haji dan Umrah Hilman Latief, para pejabat Eselon I Kemenag, staf ahli dan staf khusus Menteri Agama, anggota Badan Pengelola Keuangan Haji Acep Riana Jayaprawira, serta anggota Amirul Haji 1444 H/2023 M.&nbsp;</p><p>Rakernas mengangkat tema \'Penguatan Istithaah menuju Kemandirian dan Ketahanan Jemaah Haji Indonesia\'. Menurut Menag, pada haji 2023, jemaah melakukan pelunasan terlebih dahulu, baru melakukan pemeriksaan kesehatan.&nbsp;</p><p>"Biasanya jemaah jika sudah _kadung_ lunas, tidak enak kalau tidak diloloskan," sebut Gus Men, panggilan akrabnya.&nbsp;</p><p>Gus Men minta persoalan skena penetapan istithaah kesehatan ini dikaji. Gus Men sadar bahwa usulan ini tidak populer, sehingga harus dikomunikasikan dengan baik kepada jemaah.&nbsp;</p><p>"Ini mungkin tidak mudah karena kita akan berhadapan dengan jemaah saat ini. Tapi jika ini berjalan, akan memudahkan penyelenggaraan haji di masa mendatang. Tidak apa-apa kita mendapat beban sekarang tapi di masa mendatang akan lebih mudah," ujar Menag.&nbsp;</p><p>"Ini dibicarakan, sekaligus bagaimana cara penyampaian yang paling tepat dan baik ke jemaah agar istithaah kesehatan ini bisa diterima dan dijalankan dengan baik," sambungnya.</p><p>Selain istithaah, Gus Men minta Rakernas Evaluasi ini juga membahas sejumlah terobosan pelaksanaan haji di masa mendatang. Secara khusus, Menag menyebut pentingnya meninjau ulang masa tinggal jemaah agar bisa lebih pendek. Menurutnya, hal itu diharapkan bisa lebih menekan biaya haji.</p><p>"Jika bisa diperpendek, jemaah akan merasa senang. Tolong dicari bagaimana cara memperpendek. Paling tidak 35 hari," ucap Gus Men.</p><p>Masa tinggal petugas juga menjadi sorotan. Gus Men minta pola penugasan diatur ulang. Selama ini, petugas dalam satu Daerah Kerja (Daker) berangkat secara bersama-sama sejak awal dan pulang juga bersama-sama pada akhir operasional.</p><p>"Akibatnya setelah puncak haji di Arafah, Muzdalifah, dan Mina, banyak petugas yang kelelahan dan mengalami kejenuhan," kata Menag.&nbsp;</p><p>"Bisa dibahas skema pemberangkatan petugas dalam dua gelombang. Gelombang pertama pulang seminggu setelah Armuzna pulang. Gelombang kedua berangkat seminggu sebelum Armuzna. Sehingga, saat Armuzna petugas kumpul dalam energi yang masih penuh," lanjutnya.</p><p>Menag juga minta agar Ditjen PHU meningkatkan koordinasi dan komunikasi dengan Komisi VIII DPR. Menag mengingatkan agar jajarannya tidak merasa bisa kerja sendiri.&nbsp;</p><p>"Komisi VIII bersentuhan langsung dengan masyarakat. Mereka biasa ketemu konstituen. Mereka mendapat masukan yang perlu kita dengar untuk dicarikan solusinya," tandasnya.</p><p>*Dukungan Komisi VIII*</p><p>Usulan Menteri Agama agar penetapan istithaah jemaah dilakukan sebelum pelunasan biaya haji disambut baik oleh Komisi VIII DPR. Wakil Ketua Komisi VIII DPR Tb Ace Hasan Syadzily menilai usulan itu sangat tepat.&nbsp;</p><p>"Gus Men melontarkan usulan melakukan screening terlebih dahulu sebelum pelunasan. Ini sangat baik dan akan dipertimbangkan oleh kami dalam proses penyelenggaraan haji 2024," ujar Tb Ace Hasan Syadzily.</p><p>Sejalan dengan itu, Komisi VIII berkomitmen untuk membahas evaluasi penyelenggaraan haji lebih cepat dibanding tahun sebelumnya. Selain itu, pria yang akrab disapa Ace ini juga ingin pembahasan Biaya Penyelenggaraan Ibadah Haji (BPIH) dipercepat.</p><p>"Kami menargetkan pembahasan BPIH 1445 H bisa diselesaikan antara Oktober atau November 2023. Sehingga ada waktu uang cukup bagi proses penyelenggaraan ibadah haji 2024," tegasnya.&nbsp;</p><p>Ace berharap Rakernas Evaluasi ini bisa mencari dan menemukan hal-hal yang dirasakan jemaah perlu diperbaiki. Hal itu penting untuk perbaikan kualitas pelayanan di tahun mendatang.&nbsp;</p><p>"Komisi VIII juga punya catatan dan itu bagi kami perlu terus diperbaiki. Terima kasih atas kerja keras Kementerian Agama. Semoga layanan haji akan lebih baik di tahun mendatang," tandasnya.</p><p>Dalam kesempatan ini, dirilis buku Haji Lansia di Mata Lensa MCH 2023. Buku secara simbolis diserahkan Menag kepada Wakil Ketua Komisi VIII DPR Tb Ace Hasan Syadzily, anggota BPKH Acep Riana Jayaprawira, Wakil Amirul Hajj Habib Ali Bahar, dan wakil MCH dari detik.com H Erwin Daryanto</p><p>Ikut mendampingi Wamenag Saiful Rahmat Dasuki, Dirjen Penyelenggaraan Haji dan Umrah Hilman Latief, Staf Khusus Menag Bidang Image Building dan Komunikasi Publik (Pengendali Teknis MCH) Wibowo Prasetyo.</p>',
                'keywords' => 'Evaluasi Haji, Gus Men Minta Kaji Istithaah Kesehatan dan Masa Tinggal Jemaah',
                'meta_desc' => 'Evaluasi Haji, Gus Men Minta Kaji Istithaah Kesehatan dan Masa Tinggal Jemaah',
                'is_news' => 'yes',
                'reads' => 7,
                'created_at' => '2023-09-13 15:58:46',
                'updated_at' => '2023-09-13 16:20:25',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'category_id' => 1,
                'user_id' => 1,
                'cover' => NULL,
                'title' => 'Struktur Organisasi',
                'slug' => 'struktur-organisasi',
                'desc' => '<figure class="image"><img src="http://sumbarkemenag.v4/media/publicpreview_1694596597.jpeg"></figure>',
                'keywords' => 'Struktur Organisasi',
                'meta_desc' => 'Struktur Organisasi',
                'is_news' => 'no',
                'reads' => 2,
                'created_at' => '2023-09-13 16:16:51',
                'updated_at' => '2023-09-13 16:19:01',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}