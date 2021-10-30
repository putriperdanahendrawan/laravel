<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class pembeliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $pembeli = [
            ['nama'=>'Putri Perdana','jk'=>'Perempuan','alamat'=>'cangkuang wetan','kode_post'=>32038,'kota'=>'Bandung','tgl_lahir'=>'2005-01-18'],
            ['nama'=>'Shin Hye Sun','jk'=>'Perempuan','alamat'=>'Seoul','kode_post'=>32087,'kota'=>'seoul','tgl_lahir'=>'1998-08-31'],
            ['nama'=>'Kim Soo Hyun','jk'=>'Pria','alamat'=>'gangnam','kode_post'=>32081,'kota'=>'gangnam','tgl_lahir'=>'1990-02-16'],
            ['nama'=>'Lee min Ho','jk'=>'Pria','alamat'=>'Busan','kode_post'=>32090,'kota'=>'busan','tgl_lahir'=>'1996-03-19'],
            ['nama'=>'Do Kyung So','jk'=>'Pria','alamat'=>'Pulau Jezu','kode_post'=>32080,'kota'=>'Pulau zeju','tgl_lahir'=>'1996-02-20'],

         ];
         DB::table('pembeli')->insert($pembeli);
    }
}
