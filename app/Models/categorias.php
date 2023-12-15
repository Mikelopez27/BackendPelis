<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categorias extends Model
{
    use HasFactory;
    protected $table = 'categorias'; 
    protected $primaryKey = 'id_cate'; 

    protected $fillable = ['categoria'];
    
    public function pelis()
    {
        return $this->hasMany(pelicula::class, 'id_cate', 'id_cate');
    }
}
