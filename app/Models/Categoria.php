<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{ 
    protected $fillable =[
        'image'
    ];
    public function categoriaProdutos()
    {
        return $this->hasMany(CategoriaProduto::class);
    }
    use HasFactory;
}
