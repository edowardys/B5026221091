<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class kabelcontroller extends Controller
{
	public function indexkabel()
	{
        $kabel = DB::table('kabel')->get();
		return view('indexkabel',['kabel' => $kabel]);

	}

    public function tambahkabel()
	{

		// memanggil view tambah
		return view('tambahkabel');

	}

    public function storekabel(Request $request)
	{
		// insert data ke table pegawai
		DB::table('kabel')->insert([
			'MerkKabel' => $request->merkkabel,
			'StockKabel' => $request->stockkabel,
            'Tersedia'=> $request->has('tersedia') ?'y':'n'
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/kabel');

	}

    public function editkabel($kodekabel)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$kabel = DB::table('kabel')->where('KodeKabel',$kodekabel)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('editkabel',['kabel' => $kabel]);

	}

    // update data kabel
	public function update(Request $request)
	{
		// update data kabel
		DB::table('kabel')->where('KodeKabel',$request->kodekabel)->update([
            'MerkKabel' => $request->merkkabel,
			'StockKabel' => $request->stockkabel,
            'Tersedia'=> $request->has('tersedia') ?'y':'n'
		]);
		// alihkan halaman ke halaman kabel
		return redirect('/kabel');
	}

    // method untuk hapus data kabel
	public function hapuskabel($kodekabel)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('kabel')->where('KodeKabel',$kodekabel)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/kabel');
	}

    public function viewkabel($kodekabel)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $kabel = DB::table('kabel')
                    ->where('KodeKabel', $kodekabel)
                    ->get();

        // passing data pegawai yang didapat ke view edit.blade.php
        return view('viewkabel', ['kabel' => $kabel]);
	}
}
