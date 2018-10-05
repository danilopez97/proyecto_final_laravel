@include('plantillas.header')

<div class="container">
	<div class="row">
		<div class="col-md-6">
			
			<form class="form-horizontal" method="POST" action="{{ url('/cliente/store')}}">
      {{ csrf_field() }}
      <fieldset>
        <legend>Ingreso de clientes</legend>

        @if(count($errors)>0)
          @foreach($errors->all() as $error)
            <div class="alert alert-danger"> 
              {{ $error }}
            </div>
          @endforeach
        @endif

        <div class="form-group">
          <label for="inputEmail" class="col-lg-2 control-label">Nombre Cliente</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" name="nombre_cliente" id="inputEmail" placeholder="nombre_cliente">
          </div>
        </div>

         <div class="form-group">
          <label for="inputEmail" class="col-lg-2 control-label">telefono cliente</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" name="telefono_cliente" id="inputEmail" placeholder="telefono_cliente">
          </div>
        </div>

        <div class="form-group">
          <label for="inputEmail" class="col-lg-2 control-label">Direccion cliente</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" name="direccion_cliente" id="inputEmail" placeholder="direccion_cliente">
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
            <a href="{{ url('/mostrarcliente') }}" class="btn btn-default" >Regresar</a> 
            <button type="submit" class="btn btn-primary">Ingresar</button>
          </div>
        </div>
      </fieldset>
    </form>

		</div>
	</div>
</div>

@include('plantillas.footer')