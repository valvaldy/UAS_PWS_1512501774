<?php

namespace App\Http\Controllers;
use App\modelmahasiswa;
use App\Http\Transformers\mhstransformers;
use Illuminate\Http\Request;

class mhscontroller extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index(){
    $data = modelmahasiswa::all();
    return response ($data);
  }

  public function showmahasiswa($id){
    $data = modelmahasiswa::where('id',$id)->get();
    return response ($data);
  }

  public function storemahasiswa(Request $request){ //buat post
    $data = new modelmahasiswa();
    $data->nama = $request->input('nama');
    $data->nim = $request->input('nim');
    $data->tgl_lhr = $request->input('tgl_lhr');
    $data->email = $request->input('email');
    $data->jenkel = $request->input('jenkel');
    $data->alamat = $request->input('alamat');
    $data->tlp = $request->input('tlp');
    //$data->alamat = $request->input('alamat');
    //$data->email = $request->input('email');
    //$data->jenjang = $request->input('jenjang');
    //$data->notelp = $request->input('notelp');
    $data->save();

    return response('Berhasil Tambah Data');
  }
  
  public function updatemahasiswa(Request $request, $id){
    $data = modelmahasiswa::where('id',$id)->first();
    $data->nama = $request->input('nama');
    $data->nim = $request->input('nim');
    $data->tgl_lhr = $request->input('tgl_lhr');
    $data->email = $request->input('email');
    $data->jenkel = $request->input('jenkel');
    $data->alamat = $request->input('alamat');
    $data->tlp = $request->input('tlp');
    $data->save();

    return response('Berhasil Merubah Data');
  }

  public function destroymahasiswa($id){
    $data = modelmahasiswa::where('id',$id)->first();
    $data->delete();

    return response('Berhasil Menghapus Data');
  }
  
  
}