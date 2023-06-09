@extends("layouts.plantilla")

@section('titulo')
  <h2>categorias</h2>
@endsection

@section('contenido')

<a href="{{route('categorias.create')}}" class="btn btn-success mb-4">CREAR</a>

<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">nombre</th>
        <th scope="col">descripcion</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
        @foreach ($categorias as $categoria)
        <tr>
          <td>{{$categoria->nombre}}</td>
          <td>{{$categoria->descripcion}}</td>
          <td>
            <form action="{{route('categorias.destroy', $categoria->id)}}" method="POST">
              @csrf
              @method('DELETE')
            <a href="{{route('categorias.edit',$categoria->id)}}" class="btn btn-primary btn-sm mr-3">EDITAR</a>
            <button type="submit" class="btn btn-danger btn-sm">ELIMINAR</button>
            </form>
          </td>
        </tr>
        @endforeach
    </tbody>
  </table>

  @endsection