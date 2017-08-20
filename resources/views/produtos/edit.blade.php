@extends('app')

@section('content')
    <div class="container">
        <h1>Editar Produto: {{ $produto->id }}</h1>

        @if ($errors->any())
            <ul class="alert alert-warning">
                  @foreach($errors->all() as $error)
                      <li> {{ $error }}</li>
                  @endforeach
            </ul>
        @endif

        {!! Form::open(['route'=>['produtos.update', $produto->id], 'method'=>'put']) !!}

        <!-- Nome Form Input -->

        <div class="form-group">
            {!! Form::label('nome', 'Nome:') !!}
            {!! Form::text('nome', $produto->nome, ['class'=>'form-control']) !!}
        </div>

        <!-- Descricao Form Input -->

        <div class="form-group">
            {!! Form::label('descricao', 'Descrição:') !!}
            {!! Form::textarea('descricao', $produto->descricao, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Salvar Produto', ['class'=>'btn btn-primary']) !!}
            <a href="{{ route('produtos') }}" class="btn btn-default">Retornar</a>
        </div>



        {!! Form::close() !!}

    </div>
@endsection
