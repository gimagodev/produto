@extends('app')

@section('content')

    <div class="container">
        <h1>Produtos</h1>

        <a href="{{ route('produtos.create') }}" class="btn btn-default"> Novo produto</a>
        <br />
        <br />

        <table class="table"> <!--table-striped table-bordered table-hover"-->
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Ação</th>
                </tr>
            </thead>

            <tbody>

                @foreach($produtos as $produto)
                    <tr>
                        <td> {{ $produto->id }} </td>
                        <td> {{ $produto->nome }} </td>
                        <td> {{ $produto->descricao }} </td>
                        <td>

                            <a href="{{ route('produtos.consultar', ['id'=>$produto->id]) }}" class="btn btn-info btn-sm" title="Consultar">
                                <span class="glyphicon glyphicon-search"></span></a>

                            <a href="{{ route('produtos.edit', ['id'=>$produto->id]) }}" class="btn btn-info btn-sm" title="Alterar">
                                <span  class="glyphicon glyphicon-pencil"></span></a>

                            <a href="{{ route('produtos.destroy', ['id'=>$produto->id] ) }}" class="btn btn-info btn-sm" title="Excluir">
                                <span class="glyphicon glyphicon-trash"></span></a>

                                <!-- glyphicon-trash -->
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

        <p>
          <!-- 'onsubmit' => 'ConfirmDelete()']
http://stackoverflow.com/questions/26625584/confirm-delete-with-laravel-form
        -->
        <!-- @if (count($produtos) === 1)
            I have one record!

        @elseif (count($produtos) > 1)
            I have multiple records!
        @else
            I don't have any records!
        @endif -->

      </p>

      <script>

          function ConfirmDelete()
          {
              var x = confirm("Are you sure you want to delete?");
              if (x)
                return true;
              else
                return false;
          }

      </script>

<!-- https://laravelcollective.com/docs/5.3/html#installation -->

        <p> Checkbox {!! Form::checkbox('name', 'value'); !!} </p>
        <p> Radio button {!! Form::radio('name', 'value'); !!} </p>
        <p> Generating A Number Input {!! Form::number('name', 'value'); !!} </p>
        <p> Generating A Date Input {!! Form::date('name', \Carbon\Carbon::now()); !!} </p>
        <p> Generating A Drop-Down List {!! Form::select('size', ['L' => 'Large', 'S' => 'Small']); !!} </p>
        <p> Drop-Down List With Selected Default
          {!! Form::select('size', ['L' => 'Large', 'S' => 'Small'], 'S'); !!} </p>
        <p> Drop-Down List With an Empty Placeholder
          {!! Form::select('size', ['L' => 'Large', 'S' => 'Small'], null, ['placeholder' => 'Pick a size...']); !!} </p>
        <p> List With Multiple Selectable Options
            {!! Form::select('size', ['L' => 'Large', 'S' => 'Small'], null, ['multiple' => true]); !!} </p>
        <p> DGrouped List
              {!! Form::select('animal',[
                  'Cats' => ['leopard' => 'Leopard'],
                  'Dogs' => ['spaniel' => 'Spaniel'],
                ]); !!} </p>

        <p> Drop-Down List With A Range
          {!! Form::selectRange('number', 10, 20); !!} </p>
        <p>  List With Month Names
            {!! Form::selectMonth('month'); !!} </p>
        <p>  List With Month Names em português
                {!! Form::selectMonth('mes') !!} </p>

                <select class="field" name="mes">
                  <option value="1">Janeiro</option>
                  <option value="2">fevereiro</option>
                  <option value="3">Março</option>
                  <option value="4">Abril</option>
                  <option value="5">Maio</option>
                  <option value="6">Junho</option>
                  <option value="7" selected="selected">Julho</option>

                </select>

    </div>



@endsection
