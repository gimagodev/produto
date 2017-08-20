<?php

namespace Produtos\Entidades;

use Illuminate\Database\Eloquent\Model;

class AvaliacaoProduto extends Model
{
  protected $fillable = [
      'produto_id',
      'nota',
      'comentario'
    ];

    public function produto()
    {
      return $this->belongsTo('Produtos\Entidades\Produto');
    }

}
