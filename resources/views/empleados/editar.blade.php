@extends('template')

@section('title','Editar Empleado')


@section('content')
	
	<div class="row">
  		<div class="col-md-6 col-md-offset-3">

		<h2><p class="text-center">  Editar Empleados </p></h2>

		<br><br>
			<form method="post" onsubmit="return validar()" action="{{asset('empleados')}}{{'/'.$empleado->id}}">

				{{ csrf_field()}}

				<div class="row">
					<div class="col-sm-12">
						<label for="nombre" >Nombre: </label>
						<div class="input-group">
								<span class="input-group-addon" id="basic-addon1">
									<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
								</span>
							<input class="form-control" type="string" name ="nombre" id="nombre" value="{{$empleado->user->nombre}}"  required="true">
						</div>
					</div>
				</div><br>

				<div class="row">
				  <div class="col-sm-12">
				  		<label for="apellido" >Apellido: </label>
						<div class="input-group">
								<span class="input-group-addon" id="basic-addon1">
									<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
								</span>
					    	<input class="form-control" type="string" name ="apellido" id="apellido" value="{{$empleado->user->apellido}}"  required="true">
					    </div>
				  </div>
				</div><br>

				<div class="row">
					<div class="col-sm-6">
						<label for="area">Area: </label>
						    <select name="area" class="form-control" id="area">
				              <option value="{{$empleado->area->id}}" >{{$empleado->area->nombre}}</option>
				              @foreach($areas as $area)
				                @if( $empleado->area->id != $area->id)
				                  <option value="{{$area->id}}" >{{$area->nombre}}</option>
				                @endif
				              @endforeach
				            </select>
					</div>
				    <div class="col-sm-6">
				  		<label for="cargo" >Cargo: </label>
							<select name="cargo" class="form-control" id="cargo">
				              <option value="{{$empleado->cargo->id}}" >{{$empleado->cargo->nombreCargo}}</option>
				                @foreach($cargos as $cargo)
				                @if( $empleado->cargo->id != $cargo->id)
				                  <option value="{{$cargo->id}}" >{{$cargo->nombreCargo}}</option>
				                @endif
				              @endforeach
				            </select>
					</div>

				</div><br>

				<div class="row">
					<div class="col-sm-6">
						<label for="mail" >e-mail: </label>
						<div class="input-group">
								<span class="input-group-addon" id="basic-addon1">
									<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
								</span>
						    <input class="form-control" type="string" name ="email" id="mail" value="{{$empleado->user->email}}"  required="true">
						</div>
						<p id="nocorreo"></p>
					</div>
					<div class="col-sm-6">
						<label for="DNI" >DNI: </label>
						<div class="input-group">
								<span class="input-group-addon" id="basic-addon1">
									<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
								</span>
						    <input class="form-control" type="string" name ="dni" id="DNI" value="{{$empleado->user->dni}}"  required="true">
						</div>
						<p id="noingreso"></p>
					</div>
				</div><br>

				<div class="row">
				 
				  		<label for="activo" >Estado: </label>
						<select name="estado" class="form-control" id="cargo">
				              <option value="{{$empleado->estado->id}}" >{{$empleado->estado->nombre}}</option>
				                @foreach($estados as $stads)
				                @if( $empleado->estado->id != $stads->id)
				                  <option value="{{$stads->id}}" >{{$stads->nombre}}</option>
				                @endif
				              @endforeach
				            </select>
				  
				</div><br><br>


				<div class="form-group">
    				<div class="text-center">
						<button class="btn btn-lg" type="submit" value="Submit"> 
						Guardar cambios </button> 
					</div>
				</div>

			</form>
		</div>
	</div>

	<script type="text/javascript">
	function validar(){
		var DNI = document.getElementById("DNI").value;
		var correo = document.getElementById("mail").value;
		var texto,texto2;

		if( !(/^\d{8}$/.test(DNI)) ) {
		    texto ="Ingrese un número de 8 digitos";
  			document.getElementById("noingreso").innerHTML = texto;
			return false;
		}

		if( !(/\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w/.test(correo)) ) {
			texto2 = "Ingrese un e-mail válido";
			document.getElementById("nocorreo").innerHTML = texto2;
			return false;
		}
	}
	</script>


@endsection