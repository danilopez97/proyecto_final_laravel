@include('plantillas.header')

<legend>Reporte Materia Prima</legend>

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
      <th>id</th>
      <th>descripcion</th>
      <th>cantidad</th>
   
    
    </tr>
  </thead>
  <tbody>
      @if(count($cursos)>0)
        @foreach($cursos->all() as $curso)
      <tr>    
          <td>{{$curso->id}}</td>
          <td>{{$curso->descripcion}}</td>
          <td>{{$curso->cantidad}}</td>
       
        
   
        <td>
        

         

          
        </td>
    
            
    </tr>
        @endforeach
      @endif  
   
    
  </tbody>
</table> 

@include('plantillas.footer')