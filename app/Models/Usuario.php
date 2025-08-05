<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    use HasFactory;

    protected $table = 'usuarios';
    protected $primaryKey = 'id_usuario';
    protected $fillable = ['id_user','cargo','foto','bio'];

    protected $hidden = ['senha'];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function projetos()
    {
        return $this->hasMany(Projeto::class, 'id_usuario');
    }

    public function posts()
    {
        return $this->hasMany(Post::class, 'id_usuario');
    }

    public function comentarios()
    {
        return $this->hasMany(Comentario::class, 'id_usuario');
    }

    public function favoritos()
    {
        return $this->belongsToMany(Post::class, 'favoritos', 'id_usuario', 'id_post');
    }
}