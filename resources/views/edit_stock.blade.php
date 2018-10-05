@include('plantillas.header')

<div class="container">
	<div class="row">
		<div class="col-md-6">
			
			<form class="form-horizontal" method="POST" action='{{ url("/stock/update/{$stock->idstock}")}}' >
      {{ csrf_field() }}
      <fieldset>
        <legend>Editar Stock</legend>

        @if(count($errors)>0)
          @foreach($errors->all() as $error)
            <div class="alert alert-danger"> 
              {{ $error }}
            </div>
          @endforeach
        @endif

        <div class="form-group">
          <label for="inputEmail" class="col-lg-2 control-label">Existencias</label> 
          <div class="col-lg-10">
            <input type="text" value="{{ $stock->existencias}}" class="form-control" name="existencias" id="inputEmail" placeholder="existencias">
          </div>
        </div>

        <div class="form-group">
          <label for="inputEmail" class="col-lg-2 control-label">precio</label>
          <div class="col-lg-10">
             <input type="text" value="{{ $stock->precio}}" class="form-control" name="precio" id="inputEmail" placeholder="precio de Producto">
           
          </div>
          </div>


  
        
        </div>
        </div>


        
       
        <div class="form-group">
          <div class="col-lg-10 col-lg-offset-2">
            <a href="{{ url('/mostrarstock') }}" class="btn btn-default" >Regresar</a>
            <button type="submit" class="btn btn-primary">Actualizar Producto</button>
          </div>
        </div>
      </fieldset>
    </form>


		</div>
	</div>
</div>


@include('plantillas.footer')