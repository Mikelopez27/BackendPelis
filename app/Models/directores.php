<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class directores extends Model
{
    use HasFactory;
    protected $table = 'directores';
    protected $primaryKey = 'id_dire'; 

    protected $fillable = ['director']; 

    public function pelis()
    {
        return $this->hasMany(pelicula::class, 'id_dire', 'id_dire');
    }
}
