@include('plantillas.header')

<div class="container">
	<div class="row">
		<div class="col-md-6">
			
			<form class="form-horizontal" method="POST" action='{{ url("/materia/update/{$materia->idmateria}")}}' >
      {{ csrf_field() }}
      <fieldset>
        <legend>Editar Materia Prima</legend>

        @if(count($errors)>0)
          @foreach($errors->all() as $error)
            <div class="alert alert-danger"> 
              {{ $error }}
            </div>
          @endforeach
        @endif

        <div class="form-group">
          <label for="inputEmail" class="col-lg-2 control-label">Descripcion de materia</label> 
          <div class="col-lg-10">
            <input type="text" value="{{ $materia->descripcion_materia}}" class="form-control" name="descripcion_materia" id="inputEmail" placeholder="descripcion de Materia Prima">
          </div>
        </div>

        <div class="form-group">
          <label for="inputEmail" class="col-lg-2 control-label">Cantidad Materia Prima</label>
          <div class="col-lg-10">
             <input type="text" value="{{ $materia->cantidad_materia}}" class="form-control" name="cantidad_materia" id="inputEmail" placeholder="Cantidad de materia prima">
           
          </div>
          </div>


           <div class="form-group">
          <label for="inputEmail" class="col-lg-2 control-label">Precio de materia Prima</label> 
          <div class="col-lg-10">
            <input type="text" value="{{ $materia->precio_materia}}" class="form-control" name="precio_materia" id="inputEmail" placeholder="precio de Materia Prima">
        
        </div>
        </div>


        
       
        <div class="form-group">
          <div class="col-lg-10 col-lg-offset-2">
            <a href="{{ url('/mostrarmateria') }}" class="btn btn-default" >Regresar</a>
            <button type="submit" class="btn btn-primary">Actualizar Producto</button>
          </div>
        </div>
      </fieldset>
    </form>


		</div>
	</div>
</div>


@include('plantillas.footer')