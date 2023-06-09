@extends('layouts.plantilla')

@section('content')

<a href="{{route('categorias.create')}}" class="btn btn-success mb-4">CREAR</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    

@stop