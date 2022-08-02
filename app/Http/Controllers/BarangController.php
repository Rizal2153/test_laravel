<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\BarangModel;

class BarangController extends Controller
{
    public function __construct()
    {
        $this->barang_model = new BarangModel();
    }

    public function respon($status, $code, $massage)
    {
        $data = [
            "status" => $status,
            "code" => $code,
            "massage" => $massage,
        ];

        return response()->json($data);
    }

    public function index()
    {
        //mengambil data dari table pegawai
        $barang = DB::table('barang')->get();

        //mengirim data pegawai ke view index
        return view('index', ['barang' => $barang]);
    }

    public function tambah()
    {
        //memanggil view tambah
        return view('tambah');
    }
    
    public function store(Request $request)
    {
        $id = $this->barang_model->insert_barang($request);
        
        if($id)
        {
            return $this->respon("success","200","Insert Data Success");
        }
        else
        {
            return $this->respon("failed","400","Insert Data Failed");
        }
    }

    public function edit($id)
    {
        $barang = DB::table('barang')->where('id_barang',$id)->get();
        
        return view('edit',['barang' => $barang]);
    }

    public function update(Request $request)
    {
        
        // return dd($request);
        $id = $this->barang_model->update_barang($request);
        
        if($id)
        {
            return $this->respon("success","200","Update Data Success");
        }
        else
        {
            return $this->respon("failed","400","Update Data Failed");
        }
    }

    public function hapus($id){
        DB::table('barang')->where('id_barang',$id)->delete();

        return redirect('/barang');
    }
}
