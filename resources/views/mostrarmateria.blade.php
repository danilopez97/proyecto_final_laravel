@include('plantillas.header')

<legend>Materia Prima</legend>

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
      <th>Descripcion de materia Prima</th>
      <th>Cantidad Materia Prima</th>
      <th>Precio Materia Prima</th>
   
    
    </tr>
  </thead>
  <tbody>
      @if(count($materias)>0)
        @foreach($materias->all() as $materia)
      <tr>    
          <td>{{$materia->idmateria}}</td>
        <td>{{$materia->descripcion_materia}}</td>
         <td>{{$materia->cantidad_materia}}</td>
          <td>{{$materia->precio_materia}}</td>
        
        
   
        <td>
        

          <a href='{{ url("/materia/edit/{$materia->idmateria}") }}' class="label label-success">Modificar</a>

         
        </td>
    
            
    </tr>
        @endforeach
      @endif  
   
    
  </tbody>
</table> 

@include('plantillas.footer')