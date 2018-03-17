<?php

namespace App\Http\Controllers;
use App\Barang;//mengambil model atau load model
//use DB;

class HomeController extends Controller
{
   public function getHome()
   {
   		$barang= Barang::all();//eloquent, sama kayak select * from tabel
   		//$barang= Barang::find(2);//mencari data berdasarkan idss
   		//$barang= Barang::destroy(2);//mengahpus data berdasar id
   		//$barang= Barang::where('nama','test2')->first();//berdasarkan field lain, bukan berdasar primary, first(), get(), delete()
   		//$barang= DB::table('barang');->get();//harus pake load use DB; diatas
   		dd($barang);
   		return view('welcome');//welcome adalah file diview

   }

}
