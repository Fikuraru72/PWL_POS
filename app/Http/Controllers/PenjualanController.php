<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use App\Models\Penjualan;
use Illuminate\Routing\Controller;
use Yajra\DataTables\Facades\DataTables;

class PenjualanController extends Controller
{
    public function index(){
        $breadcrumb = (object) [
            'title' => 'Daftar Penjualan',
            'list' => ['Home', 'Penjualan']
        ];

        $page = (object) [
            'title' => 'Daftar Penjualan yang terdaftar dalam sistem'
        ];

        $penjualan = Penjualan::all();
        $user = UserModel::all();

        $activeMenu = 'penjualan';

        return view('penjualan.index', ['breadcrumb' => $breadcrumb, 'page' => $page, 'penjualan' => $penjualan, 'user' => $user, 'activeMenu' => $activeMenu]);
    }

    public function list(Request $request){
        $penjualans = Penjualan::select('penjualan_id', 'user_id', 'pembeli', 'penjualan_kode', 'penjualan_tanggal')->with('user');

        if ($request->user_id) {
            $penjualans->where('user_id', $request->user_id);
        }

        return DataTables::of($penjualans)
            ->addIndexColumn()
            ->addColumn('aksi', function ($penjualan) {
                $btn = '<a href="' . url('/penjualan/' . $penjualan->penjualan_id) . '" class="btn btn-info btn-sm">Detail</a> ';
                return $btn;
            })
            ->rawColumns(['aksi'])
            ->make(true);
    }

    public function show(string $id){
        $penjualan = Penjualan::with(['user', 'detail'])->find($id);

        $breadcrumb = (object) [
            'title' => 'Daftar Penjualan',
            'list' => ['Home', 'Penjualan', 'Detail']
        ];

        $page = (object) [
            'title' => 'Detail penjualan'
        ];

        $activeMenu = 'penjualan';

        return view('penjualan.show', ['breadcrumb' => $breadcrumb, 'page' => $page, 'penjualan' => $penjualan, 'activeMenu' => $activeMenu]);
    }

    public function create(){
        $breadcrumb = (object) [
            'title' => 'Tambah Penjualan',
            'list' => ['Home', 'Penjualan', 'Tambah']
        ];

        $page = (object) [
            'title' => 'Tambah User Baru'
        ];

        $user = UserModel::all();
        $activeMenu ='penjualan';

        return view('penjualan.create', ['breadcrumb' => $breadcrumb, 'page' => $page, 'user' => $user, 'activeMenu' => $activeMenu ]);
    }

    // public function store (Request $request){
    //     $request->validate([

    //     ]);

    //     UserModel::create([

    //     ]);

    //     return redirect('/user')->with('success', 'Data user berhasil disimpan ');
    // }




}
