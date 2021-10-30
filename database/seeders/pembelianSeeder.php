<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class pembelianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // memasukan query
        $pembelian = [
            ['nama_barang'=>'Emina Suscreen','nama_supplier'=>'Shin Hye Sun','qyt'=>70,'tanggal'=>'2021-01-25'],
            ['nama_barang'=>'Nivea Pencuci Muka','nama_supplier'=>'Lee Min Ho','qyt'=>75,'tanggal'=>'2021-02-02'],
            ['nama_barang'=>'Nivea Toner','nama_supplier'=>'Do Kyung So','qyt'=>65,'tanggal'=>'2021-03-13'],
            ['nama_barang'=>'Viva Milk Cleanser','nama_supplier'=>'Putri Perdana','qyt'=>80,'tanggal'=>'2021-01-18'],
            ['nama_barang'=>'Nivea Mosturizer','nama_supplier'=>'Song Hye Kyo','qyt'=>60,'tanggal'=>'2021-05-25']
        ];
        DB::table('pembelian')->insert($pembelian);
    }
}
