@extends('template')

@section('title','Crear Nuevo Trámite')

@section('content')


<form class="form-horizontal container" enctype="multipart/form-data">

  <h2><p class="text-center">  Crear Nuevo Trámite </p></h2>
  <br>

    <div class="form-group">
      <label for="encargado" class="col-sm-2 control-label" >Encargado</label>
      <div class="col-sm-10">
        <select name="encargado" class="form-control" id="encargado">
          <option value="" >Seleccionar</option>
        </select>
        <p id="encargadoID" ></p>
      </div>
    </div>

    <div class="form-group">
      <label for="destino" class="col-sm-2 control-label" >Área a delegar</label>
      <div class="col-sm-10">
        <select name="destino" class="form-control" id="destino">
          <option value="" >Seleccionar</option>
        </select>
        <p id="nodestino" ></p>
      </div>
    </div>

  	<div class="form-group">
  		<label for="asunto" class="col-sm-2 control-label" >Asunto </label>
  		<div class="col-sm-10" >
  			<textarea name="asunto" class="form-control" rows="3" id="descrip" placeholder="Ingrese el asunto"></textarea>
  		</div>
  	</div>


		<div class="form-group">
			<label for="prioridad" class="col-sm-2 control-label" >Prioridad </label>
			<div class="col-sm-10">
				<select name="prioridad"  class="form-control" id="opciones">
          <option value="" >Seleccionar</option>
  				<option value="1" required>Urgente</option>
          <option value="2" required>Alta</option>
  				<option value="3" required>Normal</option>
				</select>
        <p id="nopcion" ></p>
		  </div>
		</div>

    <div class="form-group">
    <label for="archivo" class="col-sm-2 control-label">Archivo</label>
    <div class="col-sm-10">
      <input id="archivo" name="archivo" type="file" class="file" data-show-preview="false">
      <script type="text/javascript">
      (function($){
        $("#archivo").fileinput(
        {
          showUpload:false,
          language: 'es',
          allowedFileExtensions: ["doc","docx","odt"],
          maxFilesNum: 1
        })}(jQuery);
      </script>
    </div>

    <br><br><br>

    <div class="row">
      <div class="text-center">
        <labelv">Creado en </label>
        <script>
          document.write(Date());
        </script>
      </div>
    </div>

    <nav>
      <ul class="pager">
        <li><a href="#">Cancelar</a></li>

      </ul>
    </nav>

  	<div class="form-group">
    	<div class="text-center">
      		<button type="submit" class="btn btn-lg">Agregar Trámite</button>
    	</div>
  	</div>


    <p> </p>
    <p> .</p>
    <p> .</p>

</form>

@endsection