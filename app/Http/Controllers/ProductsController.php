<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;
use App\User;
use App\Cart;
use App\ProductUser;
use Indonesia;
use Auth;
use Session;


class ProductsController extends Controller
{
    public function index()
    {
    	$products = Product::orderBy('created_at','desc')->paginate(12);
        return view('products.product',['products'=>$products]);
    }

    public function search(Request $request){
        $search = $request->search;

        $products = DB::table('products')
        ->where('name','like',"%".$search."%")
        ->paginate(12);
        $users = Auth::user();

        return view('products.product', ['products' => $products, 'users' => $users]);
    }

    public function show($url)
    {
        $products = Product::where('url', $url)->first();
        $users = Auth::user();
        return view('products.detail', ['products' => $products, 'users' => $users]);
    }

    public function addcart(Request $request){        
        if(Auth::check()){
            $cart = Cart::where('user_id', '=', $request->users_id)->where('product_id', '=', $request->product_id)->first();
            if (!$cart) {
                Cart::create([
                    'user_id' => $request->users_id,
                    'product_id' => $request->product_id,
                    'add_value' => $request->add_value,
                ]);     
            } else {
                Cart::where('user_id', '=', $request->users_id)->where('product_id', '=', $request->product_id)->update([
                    'user_id' => $cart->user_id,
                    'product_id' => $cart->product_id,
                    'add_value' => $cart->add_value + $request->add_value,
                ]);       
            }

        } else {
            return redirect('login')->with('alert', 'Anda perlu login untuk menambahkan produk ke dalam keranjang');
        }

        return redirect()->back()->with('alert', 'Berhasil menambahkan produk ke dalam keranjang');
    }

    public function cart(){
        if(Auth::check()){
            $user_auth = Auth::user();
            $users = User::where('id', $user_auth->id)->get();
            $cart = Cart::where('user_id', $user_auth->id)->get();
            $product_user = ProductUser::where('user_id', $user_auth->id)->get();
        } else {
            return redirect('login')->with('alert', 'Anda perlu login untuk mengakses halaman keranjang');            
        }

        return view('pages.cart',['users' => $users, 'product_user' => $product_user, 'cart' => $cart]);
    }

    public function checkout(Request $request){

        $provinsi = Indonesia::allProvinces();
        $kota = Indonesia::paginateCities($numRows = 50);
        $kecamatan = Indonesia::paginateDistricts($numRows = 50);
        $kelurahan = Indonesia::paginateVillages($numRows = 50);

        return view('pages.checkout', ['provinsi' => $provinsi, 'kota' => $kota, 'kecamatan' => $kecamatan, 'kelurahan' => $kelurahan]);
    }
}
