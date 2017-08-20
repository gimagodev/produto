<?php

namespace Produtos\Entidades;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable =[
     'nome',
    'descricao'
  ];

  public function avaliacoes()
  {
    return $this->hasMany('Produtos\Entidades\AvaliacaoProduto');
  }

  public function tags()
  {
    return $this->belongsToMany('Produtos\Entidades\Tag');
  }

}
