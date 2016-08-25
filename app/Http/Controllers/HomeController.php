<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    public function index(){
    	echo "dari function index";
    }
    public function sekolah($sekolah="."){
	echo "dari controller". $sekolah;
	}
	public function detail($sekolah="."){
		$data['sekolah']= $sekolah;
		return view('sekolah')->with($data);
	}
}
