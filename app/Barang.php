<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barang';

    protected $fillable = ['nama_barang','jenis_barang','stok','harga_beli','harga_jual','created_at',
    						'updated_at'];

    						
}
