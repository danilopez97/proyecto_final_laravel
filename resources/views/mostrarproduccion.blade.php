@include('plantillas.header')

<legend>Produccion</legend>

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
      <th>Costo de Materia Prima</th>
      <th>codigo del producto</th>
      
   
    
    </tr>
  </thead>
  <tbody>
      @if(count($producciones)>0)
        @foreach($producciones->all() as $produccion)
      <tr>    
          <td>{{$produccion->idproduccion}}</td>
        <td>{{$produccion->costo_materia_prima}}</td>
         <td>{{$produccion->producto_idproducto}}</td>
          
        
        
   
        <td>
       

          

          
        </td>
    
            
    </tr>
        @endforeach
      @endif  
   
    
  </tbody>
</table> 

@include('plantillas.footer')