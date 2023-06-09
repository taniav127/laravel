@extends('layouts.plantilla')

@section('content')
  <div class="conten-form">

    <form method="Post" action="{{route('categorias.store')}}">
      @csrf
      <div class="table form-group">
        <label for="exampleInputEmail1">Nombre Producto</label>
        <input type="text" class="form-control" id="exampleText" placeholder="Producto" name="name">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Precio</label>
        <input type="number" class="form-control" id="exampleInput" placeholder="$" name="price">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Cantidad</label>
        <input type="number" class="form-control" id="exampleInput" placeholder="Cantidad #" name="amount">
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <label class="input-group-text" for="inputGroupSelect01">Categoria</label>
        </div>
        <select class="custom-select" id="inputGroupSelect01" name="category_id">
          <option require selected>Seleciona</option>
          @foreach ($categorias as $categorias)
          <option value="{{ $categorys->id }}" required> {{ $categorias->name }} </option>
          @endforeach
         
        </select>
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <label class="input-group-text" for="inputGroupSelect01">Subcategoria</label>
        </div>
        <select class="custom-select" id="inputGroupSelect01" name="subcategory_id">
          <option required selected>Seleciona</option>
          @foreach ($subcategory as $subcategorias)
          <option value="{{ $subcategorys->id }}" required> {{ $subcategorys->name }} </option>
          @endforeach
        </select>
      </div>
      
      <button type="submit" class="btn btn-primary">Agregar</button>
    </form>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    
  </div>

<style>



.conten-form {
  display: flex;
  flex-direction: column;
  align-items: center;
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

.btn {
  width: 120%;
  max-width: 220px; 
}

</style>

<script>

function options(){
  var optionCategory = document.getElementById
}



</script>

@stop