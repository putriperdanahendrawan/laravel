<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class pesananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $pesanan = [
            ['nama_pelangan'=>'Shin Hye Sun','nama_barang'=>'Emina Suscreen','qyt'=>70,'tanggal_pesan'=>'2021-01-25'],
            ['nama_pelangan'=>'Lee Min Ho','nama_barang'=>'Nivea Pencuci Muka','qyt'=>75,'tanggal_pesan'=>'2021-02-02'],
            ['nama_pelangan'=>'Do Kyung So','nama_barang'=>'Nivea Toner','qyt'=>65,'tanggal_pesan'=>'2021-03-13'],
            ['nama_pelangan'=>'Putri Perdana','nama_barang'=>'Viva Milk Cleanser','qyt'=>80,'tanggal_pesan'=>'2021-01-18'],
            ['nama_pelangan'=>'Song Hye Kyo','nama_barang'=>'Nivea Mosturizer','qyt'=>60,'tanggal_pesan'=>'2021-05-25']
        ];
        DB::table('pesanan')->insert($pesanan);
    }
}
