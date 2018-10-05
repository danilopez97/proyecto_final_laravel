@include('plantillas.header')

<legend>Clientes</legend>

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
      <th>nombre </th>
      <th>telefono</th>
      <th>direccion</th>
      
   
    
    </tr>
  </thead>
  <tbody>
      @if(count($clientes)>0)
        @foreach($clientes->all() as $cliente)
      <tr>    
          <td>{{$cliente->idcliente}}</td>
        <td>{{$cliente->nombre_cliente}}</td>
         <td>{{$cliente->telefono_cliente}}</td>
          <td>{{$cliente->direccion_cliente}}</td>
          
        
        
   
        <td>
       

          <a href='{{ url("/cliente/edit/{$cliente->idcliente}") }}' class="label label-success">Modificar</a>

          
        </td>
    
            
    </tr>
        @endforeach
      @endif  
   
    
  </tbody>
</table> 

@include('plantillas.footer')