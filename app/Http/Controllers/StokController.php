<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Routing\Controller;
use App\Models\Stok;
use App\Models\UserModel;
use App\Models\Barang;

class StokController extends Controller
{
    public function index(){
        $breadcrumb = (object) [
            'title' => 'Daftar Stok',
            'list' => ['Home', 'Stok']
        ];

        $page = (object) [
            'title' => 'Daftar stok barang yang terdaftar dalam sistem'
        ];

        $activeMenu = 'stok';
        $barang = Barang::all();
        $user = UserModel::all();

        return view('stok.index', ['breadcrumb' => $breadcrumb, 'page' => $page, 'barang' => $barang, 'user' => $user, 'activeMenu' => $activeMenu]);
    }

    // Ambil Data
    public function list(Request $request){
        $stok = Stok::select('stok_id', 'barang_id', 'user_id','stok_tanggal', 'stok_jumlah')->with('barang')->with('user');

        return DataTables::of($stok)
        ->addIndexColumn()
        ->addColumn('aksi', function ($stok) {
            $btn = '<a href="'.url('/stok/' . $user->user_id).'" class="btn btn-info btn-sm">Detail</a> ';
            $btn .= '<a href="'.url('/stok/' . $stok->stok_id . '/edit').'"class="btn btn-warning btn-sm">Edit</a> ';
            $btn .= '<form class="d-inline-block" method="POST" action="'.url('/stok/'.$stok->stok_id).'">'. csrf_field() . method_field('DELETE') .'<button type="submit" class="btn btn-danger btn-sm" onclick="return confirm(\'Apakah Anda yakit menghapus data ini?\');">Hapus</button></form>';
        return $btn;
        })
        ->rawColumns(['aksi'])
        ->make(true);
    }

}
