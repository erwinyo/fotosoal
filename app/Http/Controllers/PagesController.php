<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function home()
    {
    	$nama = "Erwin Yonata";
    	return view('index', ['nama' => $nama]);
    }

    public function carakerja()
    {
    	return view('cara-kerja');
    }

    public function dataset()
    {
    	$dataset = DB::table('dataset')->get();
    	return view('dataset.main', ['dataset' => $dataset]);
    }

    public function about()
    {
    	return view('about');
    }
}
