@include('plantillas.header')

<legend>Ventas</legend>

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
      <th>Nombre cliente</th>
      <th>producto</th>
      <th>cantidad</th>
       <th>total</th>
   
    
    </tr>
  </thead>
  <tbody>
      @if(count($ventas)>0)
        @foreach($ventas->all() as $venta)
      <tr>    
          <td>{{$venta->idventa}}</td>
        <td>{{$venta->nombrecliente_venta}}</td>
         <td>{{$venta->producto_venta}}</td>
          <td>{{$venta->cantidad_venta}}</td>
          <td>{{$venta->total}}</td>
        
        
   
        
    
            
    </tr>
        @endforeach
      @endif  
   
    
  </tbody>
</table> 

@include('plantillas.footer')