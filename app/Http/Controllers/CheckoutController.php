<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Indonesia;

class CheckoutController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
	
    public function index()
    {
    	$provinsi = Indonesia::allProvinces();
    	$kota = Indonesia::paginateCities($numRows = 50);
    	$kecamatan = Indonesia::paginateDistricts($numRows = 50);
    	$kelurahan = Indonesia::paginateVillages($numRows = 50);

        return view('pages.checkout', ['provinsi' => $provinsi, 'kota' => $kota, 'kecamatan' => $kecamatan, 'kelurahan' => $kelurahan]);
    }

}
