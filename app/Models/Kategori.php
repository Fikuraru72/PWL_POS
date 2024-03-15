<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Kategori extends Model
{
    protected $table = 'm_kategori';
    protected $primaryKey ='kategori_id';

    protected $fillable = ['kategori_kode', 'kategori_nama'];

    public function barang(){
        return $this->hashMany(BarangModel::class, 'barang_id', 'barang_id');
    }
}
