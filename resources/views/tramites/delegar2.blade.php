@extends('template')

@section('title','Nuevo Tramite')

@section('content')


<form method="POST" action="{{asset('delegandoAndo')}}" id="">
	{{ csrf_field()}}

	<h2><p class="text-center">  Delegar </p></h2>
				<br><br>

<div class="container">
	
	<div class="col-md-6">

		<div class="row">
			<div class="col-sm-12">
				<label for="idExped" >Nro. Expediente: </label>
				<div class="input-group">
				  <span class="input-group-addon" id="basic-addon1">
				    <span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>
				  </span>
				  <input type="text" class="form-control" name="num_exp" id="numExp" value="{{$tramite->nro_expediente}}" required="true">
				</div>
			</div>
		</div><br>

		<div class="row">
			<div class="col-sm-12 col-md-12">
				<label for="remitente" >Área Destino: </label>
				<div class="input-group">
					<select required="" name="area" type="text" class="form-control" id="area_id">
				        <option value="" >Seleccionar área</option>
			          		@foreach($areas as $are)
				                <option value='{{$are->id}}'>{{$are->nombre}}</option>
				            @endforeach
				    </select>
				</div>
			</div>
		</div><br>

		<div class="row">
			<div class="col-sm-12">
				<label for="nombre_doc" >Nombre de documento: </label>
				<div class="input-group">
				  <span class="input-group-addon" id="basic-addon1">
				    <span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>
				  </span>
				  <input type="text" class="form-control" name="nombre_doc" id="nombre_doc" value="" >
				</div>
			</div>
		</div><br>

    
    </div>

    <div class="col-md-6">
    	  <div class="row">
    	  	<div class="col-sm-12">
		        <label for="comentario" >Comentario: </label>
		        <div class="">
		          <textarea type="text" class="form-control" rows="5" name="comentario" id="comentario"> </textarea>
		        </div>
			</div>
	      </div>
    </div>

</div>

<div class="container">
	<div class="text-center" id="boton">
		<button class="btn btn-lg btn-primary" type="submit" value="Submit">Enviar</button> 
	</div>
</div>

</form>

@endsection

