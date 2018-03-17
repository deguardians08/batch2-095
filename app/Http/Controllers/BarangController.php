<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
class BarangController extends Controller
{
     public function getBarang()
   {
   		$barang= Barang::all();//eloquent, sama kayak select * from tabel
   		//$barang= Barang::find(2);//mencari data berdasarkan idss
   		//$barang= Barang::destroy(2);//mengahpus data berdasar id
   		//$barang= Barang::where('nama','test2')->first();//berdasarkan field lain, bukan berdasar primary, first(), get(), delete()
   		//$barang= DB::table('barang');->get();//harus pake load use DB; diatas
   		dd($barang);
   		return view('welcome');//welcome adalah file diview

   }

   	public function getNama($nama){
   		$barang = Barang::where('nama',$nama)->first();//pake use barang,buat ngambil data di database
   		return 'Nama barang adalah :'.$barang->nama;
   	}

   	public function getAlamat(){

   	return 'Bandung';
   	}

}
