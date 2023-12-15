<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelicula extends Model
{
    use HasFactory;
    protected $table = 'peliculas'; 
    protected $primaryKey = 'id'; 

    protected $fillable = ['titulo', 'duracion', 'sinopsis', 'id_cate', 'id_dire'];
    public function director()
    {
        return $this->belongsTo(directores::class, 'id_dire');
    }

    public function categoria()
    {
        return $this->belongsTo(categorias::class, 'id_cate');
    }
}
