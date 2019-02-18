<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Carbon\Carbon;
use Indonesia;
use File;
use Image;

class UsersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        //DEFINISIKAN PATH
        $this->path = 'img/users';
    }

    public function profile(){
        return view('users.profile');
    }

    public function edit(){


    	$provinsi = Indonesia::allProvinces();
    	$kota = Indonesia::paginateCities($numRows = 50);
    	$kecamatan = Indonesia::paginateDistricts($numRows = 50);
    	$kelurahan = Indonesia::paginateVillages($numRows = 50);

        return view('users.edit', ['provinsi' => $provinsi, 'kota' => $kota, 'kecamatan' => $kecamatan, 'kelurahan' => $kelurahan]);
    }    

    // public function update(Request $request){
    // 	$messages = [
    //         'required'=>'Form :attribute harus di isi!',
    //         'min'=>'Form :attribute harus di isi minimal :min karakter.',
    //         'max'=>'Form :attribute harus di isi maksimal :max karakter.',
    //         'alpha'=>'Form :attribute harus di isi huruf.',
    //         'numeric'=>'Form :attribute harus di isi angka.',
    //         'alpha_num'=>'Form :attribute harus di isi huruf dan angka.',];

    //     //validasi
    //     $this->validate($request,[
    //         'image'=>'image|mimes:jpg,png,jpeg',
    //         'kategori'=>'required',
    //         'nama'=>'required|min:2|max:30',
    //         'harga'=>'required|min:1|max:20',
    //         'deskripsi'=>'required|min:5|max:250',
    //         'waktu_proses'=>'required',
    //         'terjual'=>'required'
    //     ],$messages);

    //     if (!File::isDirectory($this->path)) {
    //         //MAKA FOLDER TERSEBUT AKAN DIBUAT
    //         File::makeDirectory($this->path,0777,true,true);
    //     }

    //     $produk = Produk::findOrFail($id);
        
    //     if($request->hasFile('gambar')){
    //         //MENGAMBIL FILE IMAGE DARI FORM
    //         $file = $request->file('gambar');
    //         //MEMBUAT NAME FILE DARI GABUNGAN TIMESTAMP DAN UNIQID()
    //         $fileName = Carbon::now()->timestamp . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
    //         //UPLOAD ORIGINAN FILE (BELUM DIUBAH DIMENSINYA)
    //         Image::make($file)->save($this->path . '/' . $fileName);

    //         foreach ($this->dimensions as $row) {
    //             //MEMBUAT CANVAS IMAGE SEBESAR DIMENSI YANG ADA DI DALAM ARRAY 
    //             $canvas = Image::canvas($row, $row);
    //             //RESIZE IMAGE SESUAI DIMENSI YANG ADA DIDALAM ARRAY 
    //             //DENGAN MEMPERTAHANKAN RATIO
    //             $resizeImage  = Image::make($file)->resize($row, $row, function($constraint) {
    //                 $constraint->aspectRatio();
    //             });
                
    //             //CEK JIKA FOLDERNYA BELUM ADA
    //             if (!File::isDirectory($this->path . '/' . $row)) {
    //                 //MAKA BUAT FOLDER DENGAN NAMA DIMENSI
    //                 File::makeDirectory($this->path . '/' . $row,0777,true,true);
    //             }
                
    //             //MEMASUKAN IMAGE YANG TELAH DIRESIZE KE DALAM CANVAS
    //             $canvas->insert($resizeImage, 'center');
    //             //SIMPAN IMAGE KE DALAM MASING-MASING FOLDER (DIMENSI)
    //             $canvas->save($this->path . '/' . $row . '/' . $fileName);
    //         }
    //         $produk->update([
    //             'gambar'=>$fileName,
    //             'kategori'=>$request->kategori,
    //             'nama' => $request->nama,
    //             'harga' => $request->harga,
    //             'deskripsi' => $request->deskripsi,
    //             'waktu_proses' => $request->waktu_proses,
    //             'terjual' => $request->terjual
    //         ]);
    //     } else {
    //         //memasukkan data ke table Produk
    //         $produk->update([
    //             'kategori'=>$request->kategori,
    //             'nama' => $request->nama,
    //             'harga' => $request->harga,
    //             'deskripsi' => $request->deskripsi,
    //             'waktu_proses' => $request->waktu_proses,
    //             'terjual' => $request->terjual
    //         ]);
    //     }
    // }
}
