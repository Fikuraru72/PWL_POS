<?php

namespace App\Models;

use App\Models\KategoriModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Barang extends Model
{
    protected $table = 'm_barang';
    protected $primaryKey ='barang_id';

    protected $fillable = ['barang_kode', 'barang_nama', 'harga_beli', 'harga_jual'];

    public function kategori() : BelongsTo{
        return $this->belongsTo(KategoriModel::class, 'kategori_id', 'kategori_id');
    }

}
