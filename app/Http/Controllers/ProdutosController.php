<?php

namespace Produtos\Http\Controllers;

use Produtos\Http\Requests\ProdutoRequest;
use Produtos\Http\Requests;
use Produtos\Repositories\Contracts\ProdutoRepositoryInterface;
////use Produtos\Repositories\ProdutoRepository;
//use Illuminate\Http\Request;

class ProdutosController extends Controller {

    private $produtoRepository;

    public function __construct(ProdutoRepositoryInterface $produtoRepository)
    {
        $this->produtoRepository = $produtoRepository;
    }


    public function index()
    {
        $produtos = $this->produtoRepository->getAll();
        return view('produtos.index',['produtos'=>$produtos]);
    }

    public function create()
    {
        return view('produtos.create');
    }

    public function store(ProdutoRequest $request)
    {
        $input = $request->all();
        $this->produtoRepository->create($input);
        return redirect()->route('produtos');
    }

    public function edit($id)
    {
        $produto =  $this->produtoRepository->find($id);
        return view('produtos.edit', compact('produto'));
    }

    public function consultar($id)
    {
        $produto = $this->produtoRepository->find($id);
        return view('produtos.consultar', compact('produto'));
    }


    public function update(ProdutoRequest $request, $id)
    {
        $this->produtoRepository->find($id)->update($request->all());
        return redirect()->route('produtos');
    }

    public function destroy($id)
    {
        $this->produtoRepository->find($id)->delete();
        return redirect()->route('produtos');
    }

}
