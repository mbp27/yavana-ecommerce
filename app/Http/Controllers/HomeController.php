<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;
use App\User;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::orderBy('created_at','desc')->take(8)->get();
        $products_soldout = Product::orderBy('soldout','desc')->take(8)->get();
        $users = Auth::user();
        return view('pages.index', ['products' => $products, 'products_soldout' => $products_soldout, 'users' => $users]);
    }

}
