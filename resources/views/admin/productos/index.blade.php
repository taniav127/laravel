@extends("layouts.plantilla")


@section('titulo')
  <h2>productos</h2>
@endsection

@section('contenido')

<a href="{{route('productos.create')}}" class="btn btn-success mb-4">CREAR</a>

<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">nombre</th>
        <th scope="col">precio</th>
        <th scope="col">cantidad</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
        @foreach ($productos as $producto)
        <tr>
          <td>{{$producto->nombre}}</td>
          <td>{{$producto->precio}}</td>
          <td>{{$producto->cantidad}}</td>
          <td>
            <form action="{{route('productos.destroy', $producto->id)}}" method="POST">
              @csrf
              @method('DELETE')
            <a href="{{route('productos.edit',$producto->id)}}" class="btn btn-primary btn-sm mr-3">EDITAR</a>
            <button type="submit" class="btn btn-danger btn-sm">ELIMINAR</button>
            </form>
          </td>
        </tr>
        @endforeach
    </tbody>
  </table>

  @endsection