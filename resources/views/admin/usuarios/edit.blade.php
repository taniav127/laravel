@extends('layouts.plantilla')

@section('contenido')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card form-group">
                    <div class="card-body form-group">
                        <form method="POST" action="{{ route('usuarios.update',$usuarios->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="table form-group">
                                <label for="exampleInputEmail1">Nombre de usuarios</label>
                                <input type="text" class="form-control" id="exampleText" name="nombre" value="{{$usuarios->nombre}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">descripcion</label>
                                <input type="text" class="form-control" id="exampleInput" name="descripcion" value="{{$usuarios->descripcion}}">
                            </div>
                            
                            <button type="submit" class="btn btn-primary btn">EDITAR</button>
                            <a href="{{route('subcategorias.index')}}" class="btn btn-danger">CANCELAR</a>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<style>
    .conten-form {
        display: flex;
        flex-direction: column;
        align-items: center;
        min-height: 100vh;
    }

    .form-group {
        width: 100%;
        max-width: 400px;
        margin-bottom: 20px;
    }

    .form-control {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        box-sizing: border-box;
    }
</style>