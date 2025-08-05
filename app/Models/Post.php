<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';
    protected $primaryKey = 'id_post';
    protected $fillable = ['id_usuario','titulo','conteudo','imagem','status'];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario');
    }

    public function comentarios()
    {
        return $this->hasMany(Comentario::class, 'id_post');
    }

    public function favoritadoPor()
    {
        return $this->belongsToMany(Usuario::class, 'favoritos', 'id_post', 'id_usuario');
    }
}