<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    use HasFactory;

    protected $table = 'projetos';
    protected $primaryKey = 'id_projeto';
    public $timestamps = true;
    protected $fillable = ['id_usuario','titulo', 'slug', 'descricao','imagem','status','link'];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario');
    }

     // Route Model Binding vai usar o slug
    public function getRouteKeyName()
    {
        return 'slug';
    }
}