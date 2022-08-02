<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BarangModel extends Model
{
    use HasFactory;
    
    public function insert_barang($request)
    {
        return DB::table('barang')->insert([
            'kode_barang' => $request->kode_barang,
            'nama_barang' => $request->nama_barang,
            'harga_barang' => $request->harga_barang,
            'created_date' => date("Y-m-d H:i:s"),
            //'modified_date' => $request->modified_date
        ]);
    }

    public function update_barang($request)
    {
        // return dd($request->nama);
        return DB::table('barang')->where('id_barang',$request->id)->update([
            'kode_barang' => $request->kode,
            'nama_barang' => $request->nama,
            'harga_barang' => $request->harga,
            //'created_date' => $request->created,
            'modified_date' => date("Y-m-d H:i:s")
        ]);
    }
}
