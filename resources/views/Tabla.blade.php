@extends ('Plantilla')
@section('contenido')

<h1 class="mt-4 display-1 text-center">Tabla</Table></h1>
<div class="mt-5 container text-center w-50">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Tipo</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach($insectos as $registro)
    <tr>
      <th scope="row">{{ $registro->id }}</th>
      <td>{{ $registro->insecto }}</td>
      <td>{{ $registro->tipo }}</td>
      <td>
        <a href="{{ route('insecto.edit', $registro->id) }}" clas="btn btn-primary">Editar</a>
      </td>
    </tr>
    @endforeach
  </tbody>
  </table>
</div>


@stop 