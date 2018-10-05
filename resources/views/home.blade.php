@include('plantillas.header')

<legend>Productos</legend>

<div class="row">
  <div class=col-md-4>
    @if(session('info'))
    <div class="alert alert-success">
      {{ session('info') }}
    </div>
    @endif
  </div>
</div>

<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>ID</th>
      <th>Producto</th>
      <th>receta</th>
    
    </tr>
  </thead>
  <tbody>
      @if(count($productos)>0)
        @foreach($productos->all() as $producto)
      <tr>    
          <td>{{$producto->idproducto}}</td>
        <td>{{$producto->descripcion_producto}}</td>
        <td>{{$producto->receta_idreceta}}</td>
   
        <td>
         
          <a href='{{ url("/producto/edit/{$producto->idproducto}") }}' class="label label-success">Modificar</a>
          
        </td>
    
            
    </tr>
        @endforeach
      @endif  
   
    
  </tbody>
</table> 

@include('plantillas.footer')