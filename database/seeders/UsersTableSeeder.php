<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Log;
use Illuminate\Support\Facades\Artisan;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        
        $data = [
            ['name' => 'Pramana Yuda Sayeti, S.Kom, M.T.I', 'username' => '199407292022031002', 'email' => '199407292022031002@kemenag.go.id', 'password' => Hash::make('1000kali'), 'plain_password' => '1000kali', 'current_role_id' => 1, 'created_at' =>  \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['name' => 'RHAMA EKA PUTRA, S.T, M.CIO', 'username' => '198605082011011013', 'email' => '198605082011011013@kemenag.go.id', 'password' => Hash::make('nasirandang123'), 'plain_password' => 'nasirandang123', 'current_role_id' => 2, 'created_at' =>  \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],

            ['name' => 'ERI GUSNEDI, S.Pd.I., MA.', 'username' => '197807302007011009', 'email' => '197807302007011009@kemenag.go.id', 'password' => Hash::make('erigusnedi'), 'plain_password' => 'erigusnedi', 'current_role_id' => 3, 'created_at' =>  \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['name' => 'RISNA YANTI S.Sos.I', 'username' => '198007022005012012', 'email' => '198007022005012012@kemenag.go.id', 'password' => Hash::make('risnayanti'), 'plain_password' => 'risnayanti', 'current_role_id' => 3, 'created_at' =>  \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['name' => 'VETHRIA RAHMI, S.Sos.I', 'username' => '198110082007012016', 'email' => '198110082007012016@kemenag.go.id', 'password' => Hash::make('vethiarahmi'), 'plain_password' => 'vethiarahmi', 'current_role_id' => 3, 'created_at' =>  \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['name' => 'FITRA DEWI, A.Md.', 'username' => '198512082005012001', 'email' => '198512082005012001@kemenag.go.id', 'password' => Hash::make('fitradewi'), 'plain_password' => 'fitradewi', 'current_role_id' => 3, 'created_at' =>  \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['name' => 'H RIZKI RONALDI, S.Kom', 'username' => '198203092009011007', 'email' => '198203092009011007@kemenag.go.id', 'password' => Hash::make('rizkironaldi'), 'plain_password' => 'rizkironaldi', 'current_role_id' => 3, 'created_at' =>  \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
        
        ];


        foreach ($data as $key => $item) {
            \App\Models\User::firstOrCreate(
                ['username' => $item['username']],
                $item
            );
        }

        
    }
}
