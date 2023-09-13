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
                'updated_at' => '2023-09-13 16:18:36',
                'title' => 'Header',
                'location' => 'header',
                'content' => '[[{"id":11,"title":"Beranda","target":"_self","slug":"#","type":"custom","children":[[]]},{"id":35,"title":"Profil","target":"_self","slug":"profil","type":"category","children":[[{"id":37,"title":"Struktur Organisasi","target":"_self","slug":"post/struktur-organisasi","type":"post","children":[[]]}]]},{"id":24,"title":"Regulasi","target":"_self","slug":"post/regulasi","type":"post","children":[[]]},{"id":36,"title":"Kotak Saran","target":"_self","slug":"contact","type":"custom","children":[[]]}]]',
            ),
        ));
        
        
    }
}