<?php
namespace Produtos\Repositories\Eloquent;

use Produtos\Entidades\Produto;
use Produtos\Repositories\AbstractRepository;
use Produtos\Repositories\Contracts\ProdutoRepositoryInterface;

class ProdutoRepository extends AbstractRepository implements ProdutoRepositoryInterface
{

    /**
    * @param Produto $model
    */
    public function __construct(Produto $model)
    {
        /** @var Proudto $model */
      //  $produto = new Produto();
      $this->model = $model;

    }
}
