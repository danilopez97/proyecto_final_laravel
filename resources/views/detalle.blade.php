@include('plantillas.header')

<div class="container">
	<div class="row">
		<div class="col-md-6">
			
			<form class="form-horizontal" method="POST" action="{{ url('/detalle/store')}}">
      {{ csrf_field() }}
      <fieldset>
        <legend>Ingreso de Detalle de Produccion</legend>

        @if(count($errors)>0)
          @foreach($errors->all() as $error)
            <div class="alert alert-danger"> 
              {{ $error }}
            </div>
          @endforeach
        @endif

       <!-- <div class="form-group">
          <label for="inputEmail" class="col-lg-2 control-label">codigo de la produccion</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" name="produccion_idproduccion" id="inputEmail" placeholder="codigo produccion">
          </div>
        </div>-->



<div class="form-group">
          <label for="inputEmail" class="col-lg-2 control-label">Codigo de produccion</label>
          <div class="col-lg-10">
            <select name="produccion_idproduccion" id="produccion_idproduccion" class="form-control"> 



              @foreach($holas as $hola)
            <option value="{{$hola['idproduccion']}}">{{$hola['idproduccion']}} </option>
          @endforeach
            </select>
          </div>
        </div>
      

       <div class="form-group">
          <label for="inputEmail" class="col-lg-2 control-label">cantidad Materia Prima</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" name="cantidad_materia_prima" id="inputEmail" placeholder="cantidad_materia_prima">
          </div>
        </div>

  <div class="form-group">
          <label for="inputEmail" class="col-lg-2 control-label">Codigo Materia Prima</label>
          <div class="col-lg-10">
            <select name="materia_idmateria" id="materia_idmateria" class="form-control"> 



              @foreach($categorias as $categoria)
            <option value="{{$categoria['idmateria']}}">{{$categoria['descripcion_materia']}} </option>
          @endforeach
            </select>
          </div>
        </div>


          <!--<div class="form-group">
          <label for="inputEmail" class="col-lg-2 control-label">Cantidad de Materia Prima</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" name="cantidad_materia_prima" id="inputEmail" placeholder="cantidad_materia_prima">
          </div>
        </div>-->


       
<!--<div class="form-group">
          <label for="inputEmail" class="col-lg-2 control-label">tipo de producto</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" name="tipodeproducto" id="inputEmail">
          </div>
        </div>-->


       

        <div class="form-group">
          <div class="col-lg-10 col-lg-offset-2">
            <a href="{{ url('/mostrardetalle') }}" class="btn btn-default" >Regresar</a> 
            <button type="submit" class="btn btn-primary">Ingresar</button>
          </div>
        </div>
      </fieldset>
    </form>

		</div>
	</div>
</div>

@include('plantillas.footer')