@include('plantillas.header')

<legend>Stock</legend>

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
      <th>existencias</th>
      <th>imagen</th>
    <th>precio</th>
      <th>Producto</th>
 
    </tr>
  </thead>
  <tbody>
      @if(count($stockes)>0)
        @foreach($stockes->all() as $stock)
      <tr>    
          <td>{{$stock->idstock}}</td>
        <td>{{$stock->existencias}}</td>
        <td>
          <img src="{{asset('img_productos/')}}/{{$stock->imagen}}" width="70" heigth="70"><br>  </td>

       
         

        <td>{{$stock->precio}}</td>
        <td> {{$stock->producto_stock}}</td>
        
   
      <td>
         

          <a href='{{ url("/stock/edit/{$stock->idstock}") }}' class="label label-success">Modificar</a>

          
        </td>
    
            
    </tr>
        @endforeach
      @endif  
   
   
    
  </tbody>
</table> 
@include('plantillas.footer')