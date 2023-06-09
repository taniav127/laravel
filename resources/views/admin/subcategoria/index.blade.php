@extends("layouts.plantilla")



@section('titulo')
  <h2>subcategorias</h2>
@endsection

@section('contenido')

<a href="{{route('subcategorias.create')}}" class="btn btn-success mb-4">CREAR</a>

<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">nombre</th>
        <th scope="col">descripcion</th>
        <th scope="col">categoria</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($subcategorias as $subcategoria)
        <tr>
          <td>{{$subcategoria->nombre}}</td>
          <td>{{$subcategoria->descripcion}}</td>
          <td>{{$subcategoria->categoria_id}}</td>
          <td>
            <form action="{{route('subcategorias.destroy', $subcategoria->id)}}" method="POST">
              @csrf
              @method('DELETE')
            <a href="{{route('subcategorias.edit',$subcategoria->id)}}" class="btn btn-primary btn-sm mr-3">EDITAR</a>
            <button type="submit" class="btn btn-danger btn-sm">ELIMINAR</button>
            </form>
          </td>
        </tr>
        @endforeach
    </tbody>
  </table>

  @endsection