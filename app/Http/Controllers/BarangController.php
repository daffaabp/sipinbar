<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index(Request $request)
    {
        $models = Barang::all();
        if ($request->filled('q')) {
            $models = $models->where('nama', 'LIKE', '%' . $request->q . '%');
        }

        $title = 'Data Barang';
        return view('admin.barang_index', compact('models', 'title'));
    }

    public function create()
    {
        // kita lakukan validasi terlebih dahulu agar user tidak dapat merubah ID pada URL -> jadi apabila user mengganti ID pada URL yang bukan milik UserId itu sendiri akan muncul halaman "NotFound"
        // caranya dengan kita lakukan Query berdasarkan UserMasjid
        $models = Barang::all()->firstOrFail();

        $data['model'] = new Barang();
        $data['route'] = 'barang.store';
        $data['method'] = 'POST';
        $data['title'] = 'Tambah Informasi Hewan Kurban';
        $data['barang'] = $models;
        return view('admin.barang_form', $data);
    }
}