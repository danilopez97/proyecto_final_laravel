@include('plantillas.header')

<div class="container">
	<div class="row">
		<div class="col-md-6">
			
			<form class="form-horizontal" method="POST" action="{{ url('/venta/store')}}">
      {{ csrf_field() }}
      <fieldset>
        <legend>Ventas
        </legend>

        @if(count($errors)>0)
          @foreach($errors->all() as $error)
            <div class="alert alert-danger"> 
              {{ $error }}
            </div>
          @endforeach
        @endif

        <div class="form-group">
          <label for="inputEmail" class="col-lg-2 control-label">Cliente</label>
          <div class="col-lg-10">
            <select name="nombrecliente_venta" id="nombrecliente_venta" class="form-control"> 



              @foreach($clientes as $cliente)
            <option value="{{$cliente['nombre_cliente']}}">{{$cliente['nombre_cliente']}} </option>
          @endforeach
            </select>
          </div>
        </div>

          <div class="form-group">
          <label for="inputEmail" class="col-lg-2 control-label">Producto</label>
          <div class="col-lg-10">
            <select name="producto_venta" id="producto_venta" class="form-control"> 



              @foreach($categorias as $categoria)
            <option value="{{$categoria['producto_stock']}}">{{$categoria['producto_stock']}} </option>
          @endforeach
            </select>
          </div>
        </div>


        <div class="form-group">
          <label for="inputEmail" class="col-lg-2 control-label">cantidad</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" name="cantidad_venta" id="inputEmail" placeholder="cantidad_venta">
          </div>
        </div>

        <div class="form-group">
          <label for="inputEmail" class="col-lg-2 control-label">total</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" name="total" id="inputEmail" placeholder="total">
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
            <a href="{{ url('/mostrarrecetas') }}" class="btn btn-default" >Regresar</a> 
            <button type="submit" class="btn btn-primary">Ingresar</button>
          </div>
        </div>
      </fieldset>
    </form>

		</div>
	</div>
</div>

@include('plantillas.footer')