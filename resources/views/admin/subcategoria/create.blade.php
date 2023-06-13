@extends('layouts.plantilla')

@section('contenido')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card form-group">
                    <div class="card-body form-group">
                        <form method="Post" action="{{ route('subcategorias.store') }}">
                            @csrf
                            <div class="table form-group">
                                <label for="exampleInputEmail1">Nombre de subcategoria</label>
                                <input type="text" class="form-control" id="exampleText" name="nombre">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">descripcion</label>
                                <input type="text" class="form-control" id="exampleInput" name="descripcion">
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="" class="form-label">CATEGORIA</label>
                                <select class="form-control" name="categoria">
                                @foreach ($categorias as $categoria)
                                    <option value="{{$categoria->id}}">{{$categoria->nombre}}</option> 
                                @endforeach
                                </select>
                            </div>
                            
                            <button type="submit" class="btn btn-primary btn">AGREGAR</button>
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
