@include('plantillas.header')

<div class="container">
	<div class="row">
		<div class="col-md-6">
			
			<form class="form-horizontal" method="POST" action='{{ url("/receta/update/{$receta->idreceta}")}}' >
      {{ csrf_field() }}
      <fieldset>
        <legend>Editar Receta</legend>

        @if(count($errors)>0)
          @foreach($errors->all() as $error)
            <div class="alert alert-danger"> 
              {{ $error }}
            </div>
          @endforeach
        @endif

        <div class="form-group">
          <label for="inputEmail" class="col-lg-2 control-label">Descripcion de la Receta</label> 
          <div class="col-lg-10">
            <input type="text" value="{{ $receta->descripcion_receta}}" class="form-control" name="descripcion_receta" id="inputEmail" placeholder="descripcion de Receta">
          </div>
        </div>



        
       
        <div class="form-group">
          <div class="col-lg-10 col-lg-offset-2">
            <a href="{{ url('/mostrarrecetas') }}" class="btn btn-default" >Regresar</a>
            <button type="submit" class="btn btn-primary">Actualizar Receta</button>
          </div>
        </div>
      </fieldset>
    </form>


		</div>
	</div>
</div>


@include('plantillas.footer')