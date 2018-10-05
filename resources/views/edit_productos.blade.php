@include('plantillas.header')

<div class="container">
	<div class="row">
		<div class="col-md-6">
			
			<form class="form-horizontal" method="POST" action='{{ url("/producto/update/{$producto->idproducto}")}}' >
      {{ csrf_field() }}
      <fieldset>
        <legend>editar Productos</legend>

        @if(count($errors)>0)
          @foreach($errors->all() as $error)
            <div class="alert alert-danger"> 
              {{ $error }}
            </div>
          @endforeach
        @endif

        <div class="form-group">
          <label for="inputEmail" class="col-lg-2 control-label">Descripcion del producto</label> 
          <div class="col-lg-10">
            <input type="text" value="{{ $producto->descripcion_producto}}" class="form-control" name="descripcion_producto" id="inputEmail" placeholder="descripcion del producto">
          </div>
        </div>

     <div class="form-group">
          <label for="inputEmail"class="col-lg-2 control-label">Codigo Receta</label>
          <div class="col-lg-10">
             <input type="text" value="{{ $producto->receta_idreceta}}" class="form-control" name="receta_idreceta" id="inputEmail" placeholder="descripcion del producto">
           
          </div>





        
       
        <div class="form-group">
          <div class="col-lg-10 col-lg-offset-2">
            <a href="{{ url('/home') }}" class="btn btn-default" >Regresar</a>
            <button type="submit" class="btn btn-primary">Actualizar Producto</button>
          </div>
        </div>
      </fieldset>
    </form>


		</div>
	</div>
</div>


@include('plantillas.footer')