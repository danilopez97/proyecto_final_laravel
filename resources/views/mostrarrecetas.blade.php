@include('plantillas.header')

<legend>Recetas</legend>

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
      <th>Descripcion de Recetas</th>
   
    
    </tr>
  </thead>
  <tbody>
      @if(count($recetas)>0)
        @foreach($recetas->all() as $receta)
      <tr>    
          <td>{{$receta->idreceta}}</td>
        <td>{{$receta->descripcion_receta}}</td>
        
   
        <td>
        

          <a href='{{ url("/receta/edit/{$receta->idreceta}") }}' class="label label-success">Modificar</a>

          
        </td>
    
            
    </tr>
        @endforeach
      @endif  
   
    
  </tbody>
</table> 

@include('plantillas.footer')