@extends ('Plantilla')
@section('contenido')

<h1 class="mt-4 display-1 text-center">Formulario</h1>

@if(session()->has('confirmacion'))
    {!! "<script> Swal.fire('listo','tu peticion llego al controlador','success')</script>" !!}
    <div class="alert alert-primary alert-dimissible fade show text-center" role="alert">
        <strong>{{session('confirmacion')}}</strong>
        <button type="button" class="btn-close" data-bs-dimiss="alert" aria-label="close"></button>
    </div>
@endif 

<h1 class="mt-4 display-1 text-center">Ingresar Insectos</h1>
<br>
<div class="container mt-5 col-md-6">

    <div>
        <div class="card-header text-center text-primary">
            ¿Que insecto viste el dia de hoy?<i class="bi bi-wechat"></i>
        </div>

        @if($errors->any())
            @foreach($errors->all() as $error)
            <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
                <strong>Formulario incompleto!</strong>{{$error}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
            </div>
            @endforeach
        @endif

    </div>
        <form method="post" action="{{ route('insecto.store') }}">
            @csrf 
            <div>
                <label class="form-label" name="labelTitulo">Insecto:</label>
                <input type="text" class="form-control" name="txtInsecto" value="{{old ('txtInsecto')}}">
                <p class="fw-bold text-danger">{{$errors->first('txtInsecto')}}</p>
            </div>

            <div>
                <label class="form-label" name="labelRecuerdo">Tipo:</label>
                <input type="text" class="form-control" name="txtTipo" value="{{old ('txtTipo')}}">
                <p class="fw-bold text-danger">{{$errors->first('txtTipo')}}</p>
            </div>
    </div>
        <div class="text-center">
            <button type="submit" name="btnGuardar" class="btn btn-lg btn-block mt-5 btn-danger">Guardar</button>
        </div>
        </form>
    </div>
</div>
<br>
@stop 
