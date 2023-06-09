


<div class="row">
        <div class="col">
        <form action="{{route('subca.store')}}" method="POST">
            @csrf
        <div>
            <label for="exampleformControlimput1" class="form-label">Categoria</label>
            <select class="form-label" name="categoria" >
                @foreach($categorias as $c)
            <option value="categoria1"></option>
            <option value="categoria2"></option>
            <option value="categoria3"></option>
            <option value="categoria4"></option>
                @endforeach

            </select>
        </div>
        
    


         <div class="mb-3">
             <label for="exampleformControlimput1" class="form-label">Categoria</label>
              <input type="text" name="name" class="form-control" required>
        </div>

        <div  class="mb-3">
            <label for="exampleformControlimput1" class="form-label">Categoria</label>
            <select class="form-label" name="estado">
                <option value="1">activo</option>
                <option value="0">inactivo</option>
        </select>
        </div>
