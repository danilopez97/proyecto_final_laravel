@include('plantillas.header')

<legend>Detalles de Produccion</legend>

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
      <th>codigo produccion</th>
      <th>codigo materia prima</th>
      <th>cantidad materia prima</th>
      
   
    
    </tr>
  </thead>
  <tbody>
      @if(count($detalles)>0)
        @foreach($detalles->all() as $detalle)
      <tr>    
          <td>{{$detalle->iddetalle_produccion}}</td>
        <td>{{$detalle->produccion_idproduccion}}</td>
         <td>{{$detalle->materia_idmateria}}</td>
          <td>{{$detalle->cantidad_materia_prima}}</td>
          
        
        
   
        <td>
       

          <a href='{{ url("/detalles/edit/{$detalle->iddetalle_produccion}") }}' class="label label-success">Modificar</a>

          
        </td>
    
            
    </tr>
        @endforeach
      @endif  
   
    
  </tbody>
</table> 

@include('plantillas.footer')