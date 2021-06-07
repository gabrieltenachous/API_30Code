<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{  
    protected $fillable = [
        'nivel','description','detalhe','title','image'
    ];
    public function categoriaProdutos()
    {
        return $this->hasMany(Categoria_Produto::class);
    }
    use HasFactory;
}
