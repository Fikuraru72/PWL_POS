<?php

namespace App\Models;

use App\Models\KategoriModel;
use Illuminate\Database\Eloquent\Model;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Barang extends Model
{
    public function getJWTIdentifier(){
        return $this->getKey();
     }
     public function getJWTCustomClaims(){
        return [];
     }

    protected $table = 'm_barang';
    protected $primaryKey ='barang_id';

    protected $fillable = ['kategori_id','barang_kode', 'barang_nama', 'harga_beli', 'harga_jual', 'image'];

    public function kategori() : BelongsTo{
        return $this->belongsTo(KategoriModel::class, 'kategori_id', 'kategori_id');
    }

    public function stok() : BelongsTo{
        return $this->belongsTo(Stok::class, 'barang_id', 'barang_id');
    }

}
