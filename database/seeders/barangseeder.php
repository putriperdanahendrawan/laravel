<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class barangseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //data seeder
        $barang = [
            ['nama'=>'Emina Sunscreen','varian'=>'sunscreen sun protection','harga_beli'=>30000,'harga_jual'=> 35000],
            ['nama'=>'Nivea Pencuci muka','varian'=>'Brightening cerah seketika','harga_beli'=>15000,'harga_jual'=>20000],
            ['nama'=>'Nivea Toner','varian'=>'Toner Pembersih Muka','harga_beli'=>25000,'harga_jual'=>30000],
            ['nama'=>'Viva Milk Cleanser','varian'=>'Cleanser bengkoang','harga_beli'=>6000,'harga_jual'=>11000],
            ['nama'=>'Nivea Mosturizer','varian'=>'Smooth and Creamy','harga_beli'=>20000,'harga_jual'=>26000],
        ];
        DB::table('barang')->insert($barang);
    }
}
