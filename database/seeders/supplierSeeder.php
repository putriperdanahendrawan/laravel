<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class supplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $supplier = [
            ['nama'=>'Putri Perdana','alamat'=>'cangkuang wetan','kose_pos'=>32038,'kota'=>'Bandung'],
            ['nama'=>'Shin Hye Sun','alamat'=>'Seoul','kose_pos'=>32087,'kota'=>'seoul'],
            ['nama'=>'Kim Soo Hyun','alamat'=>'gangnam','kose_pos'=>32081,'kota'=>'gangnam'],
            ['nama'=>'Lee min Ho','alamat'=>'Busan','kose_pos'=>32090,'kota'=>'busan'],
            ['nama'=>'Do Kyung So','alamat'=>'Pulau Jezu','kose_pos'=>32080,'kota'=>'Pulau zeju'],

         ];
         DB::table('supplier')->insert($supplier);
    }
}
