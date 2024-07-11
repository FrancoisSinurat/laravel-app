<?php

namespace App\Models;

use App\Models\Jenis;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table='barangs';
    protected $fillable=['nama','kategori_id','jenis','harga'];
    
     public function kategori()
    {
        return $this->hasOne(Kategori::class,'kategori_id');
    }
}
