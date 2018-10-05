@include('plantillas.header')

<div class="container">
	<div class="row">
		<div class="col-md-6">
			
			<form class="form-horizontal" method="POST" action="{{ url('/stock/store')}}" enctype="multipart/form-data">
      {{ csrf_field() }}
      <fieldset>
        <legend>Ingreso de Productos a stock</legend>

        @if(count($errors)>0)
          @foreach($errors->all() as $error)
            <div class="alert alert-danger"> 
              {{ $error }}
            </div>
          @endforeach
        @endif

        <div class="form-group">
          <label for="inputEmail" class="col-lg-2 control-label">cantidad</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" name="existencias" id="inputEmail" placeholder="Nombre">
          </div>
        </div>

        <div class="form-group">
          <label for="inputEmail" class="col-lg-2 control-label">Imagen</label>
          <div class="col-lg-10">
            <input type="file" class="form-control" name="imagen" id="inputEmail" placeholder="Nombre">
          </div>
        </div>

        <div class="form-group">
          <label for="inputEmail" class="col-lg-2 control-label">Precio</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" name="precio" id="inputEmail" placeholder="Nombre">
          </div>
        </div>

      

     

  <div class="form-group">
          <label for="inputEmail" class="col-lg-2 control-label">Producto</label>
          <div class="col-lg-10">
            <select name="producto_stock" id="producto_stock" class="form-control"> 



              @foreach($categorias as $categoria)
            <option value="{{$categoria['descripcion_producto']}}">{{$categoria['descripcion_producto']}} </option>
          @endforeach
            </select>
          </div>
        </div>


       
<!--<div class="form-group">
          <label for="inputEmail" class="col-lg-2 control-label">tipo de producto</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" name="tipodeproducto" id="inputEmail">
          </div>
        </div>-->


       

        <div class="form-group">
          <div class="col-lg-10 col-lg-offset-2">
            <a href="{{ url('/mostrarstock') }}" class="btn btn-default" >Regresar</a> 
            <button type="submit" class="btn btn-primary">Ingresar</button>
          </div>
        </div>
      </fieldset>
    </form>

		</div>
	</div>
</div>

@include('plantillas.footer')