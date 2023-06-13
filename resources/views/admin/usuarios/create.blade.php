@extends('layouts.plantilla')

@section('contenido')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card form-group">
                    <div class="card-body form-group">
                        <form method="Post" action="{{ route('usuarios.store') }}">
                            @csrf
                            <div class="table form-group">
                                <label for="exampleInputEmail1">Nombre</label>
                                <input type="text" class="form-control" id="exampleText" name="nombre">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Correo</label>
                                <input type="text" class="form-control" id="exampleInput" name="email">
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="" class="form-label">Estado</label>
                                <select class="form-control" name="Estado">
                                @foreach ($usuarios as $usuario)
                                    <option value="{{$usuarios->id}}">{{$usuarios->nombre}}</option> 
                                @endforeach
                                </select>
                            </div>
                            
                            <button type="submit" class="btn btn-primary btn">AGREGAR</button>
                            <a href="{{route('usuarios.index')}}" class="btn btn-danger">CANCELAR</a>
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
