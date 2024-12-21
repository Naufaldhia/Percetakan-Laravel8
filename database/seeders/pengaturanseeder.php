<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class pengaturanseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   // untuk Menghubungkan Table dari Database
        DB::table('pengaturans')->insert(
            [
                'tanggal' => '2005-05-10',
                'lokasi'=> 'Medan',
                'kepada'=> 'Joko Susilo',
                'bon_faktur'=> '00532508',
                'banyak_barang'=> '2',
                'jenis_barang'=> 'lembar',
                'nama_barang'=>'PT Jaya Indonesia',
                'harga'=> '5000',
                'jumlah'=>'2',
            ]
        );
    }
}
