<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table='barang';//nama tabel di database
    protected $primaryKey='id';//buat primary key

    protected $fillable = [
        'nama', 'kode'
    ];
}
