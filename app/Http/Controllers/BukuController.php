<?php

namespace App\Http\Controllers;

use App\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function tampilData()
    {
        return Buku::all();
    }

    public function tambahData(Request $request)
    {
        $buku = new Buku;
        $buku->judul = $request->judul;
        $buku->tahun_terbit = $request->tahun_terbit;
        $buku->penulis = $request->penulis;
        $buku->jumlah_halaman = $request->jumlah_halaman;
        $buku->penerbit = $request->penerbit;
        $buku->stok = $request->stok;

        $buku->save();

        return "Data Anda Masuk Semeton, Aman !";
    }

    public function  ubahData(Request $request, $id)
    {
        $buku = Buku::find($id);
        $buku->judul = $request->judul;
        $buku->tahun_terbit = $request->tahun_terbit;
        $buku->penulis = $request->penulis;
        $buku->jumlah_halaman = $request->jumlah_halaman;
        $buku->penerbit = $request->penerbit;
        $buku->stok = $request->stok;

        $buku->save();

        return "Data Anda Diubah Semeton, Aman !";
    }

    public function hapusData($id)
    {
        $buku = Buku::find($id);
        $buku->delete();
        return "Data Pelungguh Dihapus Semeton, Aman !";
    }
}
