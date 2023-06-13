@extends('layouts.plantilla')


@section('titulo')
    <h1>Crear Producto</h1>
@endsection

@section('contenido')


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card form-group">
                    <div class="card-body form-group">
                        <form method="Post" action="{{ route('productos.store') }}">
                            @csrf
                            <div class="table form-group">
                                <label for="exampleInputEmail1">Nombre </label>
                                <input type="text" class="form-control" id="exampleText" name="nombre">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Precio</label>
                                <input type="text" class="form-control" id="exampleInput" name="descripcion">
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="" class="form-label">Cantidad</label>
                                <input type="int" class="form-control"id=exampleinput name="producto">
                            <div>
                              <label for="" class="form-label">subcategoria</label>
                              <br>
                              <select name="subca">
                              @foreach ($subcategoria as $sub)
                                <option value="{{$sub->id}}">{{$sub->nombre}}</option>
                              @endforeach
                              </select>
                            </div>
                                </input>
                                
                            </div>
                            
                            <button type="submit" class="btn btn-primary btn">AGREGAR</button>
                            <a href="{{route('productos.index')}}" class="btn btn-danger">CANCELAR</a>
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