@include('plantillas.header')

<div class="container">
	<div class="row">
		<div class="col-md-6">
			
			<form class="form-horizontal" method="POST" action='{{ url("/cliente/update/{$cliente->idcliente}")}}' >
      {{ csrf_field() }}
      <fieldset>
        <legend>Editar Clientes</legend>

        @if(count($errors)>0)
          @foreach($errors->all() as $error)
            <div class="alert alert-danger"> 
              {{ $error }}
            </div>
          @endforeach
        @endif

        <div class="form-group">
          <label for="inputEmail" class="col-lg-2 control-label">Nombre cliente</label> 
          <div class="col-lg-10">
            <input type="text" value="{{ $cliente->nombre_cliente}}" class="form-control" name="nombre_cliente" id="inputEmail" placeholder="Nombre cliente">
          </div>
        </div>

     <div class="form-group">
          <label for="inputEmail"class="col-lg-2 control-label">Telefono cliente</label>
          <div class="col-lg-10">
             <input type="text" value="{{ $cliente->telefono_cliente}}" class="form-control" name="telefono_cliente" id="inputEmail" placeholder="telefono_cliente">
           </div>
          </div>

          <div class="form-group">
          <label for="inputEmail"class="col-lg-2 control-label">Direccion cliente</label>
          <div class="col-lg-10">
             <input type="text" value="{{ $cliente->direccion_cliente}}" class="form-control" name="direccion_cliente" id="inputEmail" placeholder="direccion_cliente">
           </div>
          </div>





        
       
        <div class="form-group">
          <div class="col-lg-10 col-lg-offset-2">
            <a href="{{ url('/mostrarcliente') }}" class="btn btn-default" >Regresar</a>
            <button type="submit" class="btn btn-primary">Actualizar Producto</button>
          </div>
        </div>
      </fieldset>
    </form>


		</div>
	</div>
</div>


@include('plantillas.footer')