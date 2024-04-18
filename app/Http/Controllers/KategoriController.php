<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\DataTables\KategoriDataTable;
use App\Models\KategoriModel;

class KategoriController extends Controller
{
    public function index (KategoriDataTable $dataTable) {
    //     $data = [
    //         'kategori_kode' => 'SNK',
    //         'kategori_nama' => 'Snack/Makanan Ringan',
    //         'created_at' => now()
    //     ];
    //     DB::table('m_kategori')->insert($data);
    //     return 'insert data baru berhasil';

        // $row = DB::table('m_kategori')->where('kategori_kode', 'SNK')->update(['kategori_nama' => 'Camilan']);
        // return 'Update data berhasil. Jumlah data yang diupdate ' .$row. 'baris';

        // $row = DB::table('m_kategori')->where('kategori_kode', 'SNK')->update(['kategori_nama' => 'Camilan']);
        // return 'update data berhasil. Jumlah data yang diupdate '. $row. ' baris';

        // $data = DB::table('m_kategori')->get();
        // return view('kategori', ['data' => $data]);
        // dd($dataTable);
        return $dataTable->render('kategori.index');

    }

    public function create (){
        return view('kategori.create');
    }

    public function store (Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'kategori_kode' => 'requaired',
            'kategori_nama' => 'requaired',
        ]);

        return redirect('/kategori');
    }

    public function edit(){
        return view('kategori.edit');
    }

    public function hapus($id){
        $kategori = KategoriModel::find($id);
        $kategori->delete();
        return redirect('/kategori');
    }
}


