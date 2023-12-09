<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KeranjangBelanjaController extends Controller
{
	public function index()
	{
    	// mengambil data dari table keranjang belanja
		$keranjangbelanja = DB::table('keranjangbelanja')->get();
        // $keranjangbelanja = DB::table('keranjangbelanja')
        //             ->orderBy('ID', 'asc')

    	// mengirim data keranjangbelanja ke view index
		return view('index5',['keranjangbelanja' => $keranjangbelanja]);

	}

	// method untuk menampilkan view form tambah keranjangbelanja
	public function beli()
	{

		// memanggil view tambah
		return view('beli');

	}

	// method untuk insert data ke table keranjangbelanja
	public function store(Request $request)
	{
		// insert data ke table keranjangbelanja
		DB::table('keranjangbelanja')->insert([
			'keranjangbelanja_id' => $request->id,
			'keranjangbelanja_kodebarang' => $request->kodebarang,
			'keranjangbelanja_jumlah' => $request->jumlah,
			'keranjangbelanja_harga' => $request->harga
		]);
		// alihkan halaman ke halaman keranjangbelanja
		return redirect('/keranjangbelanja');

	}

	// method untuk edit data keranjangbelanja
	public function edit($id)
	{
		// mengambil data keranjangbelanja berdasarkan id yang dipilih
		$keranjangbelanja = DB::table('keranjangbelanja')->where('keranjangbelanja_id',$id)->get();
		// passing data keranjangbelanja yang didapat ke view edit.blade.php
		return view('edit',['keranjangbelanja' => $keranjangbelanja]);

	}

	// update data keranjangbelanja
	public function update(Request $request)
	{
		// update data keranjangbelanja
		DB::table('keranjangbelanja')->where('keranjangbelanja_id',$request->id)->update([
			'keranjangbelanja_id' => $request->id,
			'keranjangbelanja_kodebarang' => $request->kodebarang,
			'keranjangbelanja_jumlah' => $request->jumlah,
			'keranjangbelanja_harga' => $request->harga
		]);
		// alihkan halaman ke halaman keranjangbelanja
		return redirect('/keranjangbelanja');
	}

	// method untuk hapus data keranjangbelanja
	public function hapus($id)
	{
		// menghapus data keranjangbelanja berdasarkan id yang dipilih
		DB::table('keranjangbelanja')->where('keranjangbelanja_id',$id)->delete();

		// alihkan halaman ke halaman keranjangbelanja
		return redirect('/keranjangbelanja');
	}

    // public function cari(Request $request)
	// {
	// 	// menangkap data pencarian
	// 	$cari = $request->cari;

    // 		// mengambil data dari table keranjangbelanja sesuai pencarian data
	// 	$keranjangbelanja = DB::table('keranjangbelanja')
	// 	->where('keranjangbelanja_nama','like',"%".$cari."%")
	// 	->paginate();

    // 		// mengirim data keranjangbelanja ke view index
	// 	return view('index',['keranjangbelanja' => $keranjangbelanja, 'cari' => $cari]);

	// }

    // // method untuk view data keranjangbelanja
	// public function views($id)
	// {
	// 	// mengambil data keranjangbelanja berdasarkan id yang dipilih
	// 	$keranjangbelanja = DB::table('keranjangbelanja')->where('keranjangbelanja_id',$id)->get();
	// 	// passing data keranjangbelanja yang didapat ke view view.blade.php
	// 	return view('views',['keranjangbelanja' => $keranjangbelanja]);

	// }

}
