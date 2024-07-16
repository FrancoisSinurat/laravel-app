<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $table='kategoris';
     protected $fillable=['nama'];
     public function barangs()
    {
        return $this->hasOne(Barang::class);
    }
    //  public function jenis()
    // {
    //     return $this->belongsTo(Jenis::class);
    // }
}
