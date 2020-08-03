<?php

use Illuminate\Database\Seeder;
use \App\Buku;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $buku = [
            [
                'judul' => 'Internet Marketing',
                'tahun_terbit' => '2019',
                'penulis' => 'Yuni Yusriani',
                'jumlah_halaman' => 300,
                'penerbit' => 'PT. Aldila Creative',
                'stok' => 9,
            ],
            [
                'judul' => 'Bisnis Kopi',
                'tahun_terbit' => '2020',
                'penulis' => 'Lalu Aldi',
                'jumlah_halaman' => 159,
                'penerbit' => 'PT. Lombok Abadi',
                'stok' => 8,
            ]
        ];

        foreach ($buku as $key => $value) {
            Buku::create($value);
        }
    }
}
