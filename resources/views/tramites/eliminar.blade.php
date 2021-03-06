@extends('template')

@section('title','Eliminar Trámite')

@section('content')



<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <div class="text-center">
                <h3 class="panel-title">Eliminar Trámite</h3>
              </div>
            </div>
            <div class="panel-body">
              <div class="row">
               
                <div class=" col-md-12 col-lg-12 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>DNI: </td>
                        <td>{{$tramite->persona->dni}}</td>
                      </tr>
                      <tr>
                        <td>Nombre: </td>
                        <td>{{$tramite->persona->nombre}}</td>
                      </tr>
                      <tr>
                        <td>Apellidos: </td>
                        <td>{{$tramite->persona->apellido}}</td>
                      </tr>
                      <tr>
                        <td>Persona a cargo: </td>
                        @if($tramite->empleado == NULL)
                          <td>Sin encargado</td>
                        @else
                          <td>{{$tramite->empleado}}</td>
                        @endif
                      </tr>
                      <tr>
                        <td>Número de expediente: </td>
                        <td>{{$tramite->nro_expediente}}</td>
                      </tr>
                      <tr>
                        <td>Área a delegar:</td>
                        <td>{{$tramite->area->nombre}}</td>
                      </tr>
                      <tr>
                        <td>Tipo de trámite:</td>
                        <td>{{$tramite->tipoTramite->nombre}}</td>
                      </tr>
                      <tr>
                        <td> Prioridad: </td>
                        @if($tramite->prioridad == 1)
                          <td>Urgente</td>
                        @elseif($tramite->prioridad == 2)
                          <td>Alta</td>
                        @elseif ($tramite->prioridad == 3)
                          <td>Normal</td>
                        @endif
                      </tr>
                      <tr>
                        <td> Asunto: </td>
                        <td>{{$tramite->asunto}}</td>
                      </tr>
                      <tr>
                        <td> Movimientos: </td>
                        <td>
                          <a href="{{asset('tramites')}}{{'/'.$tramite->id.'/'}}" data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-info"><i class="glyphicon glyphicon-th-list"></i> Ir a movimientos </a>
                        </td>
                      </tr>
                     
                    </tbody>
                  </table>

                </div>
              </div>
            </div>
          </div>

          <div class="text-center">
              <button type="button" class="btn btn-info btn-lg" value="" data-toggle="modal" data-target="#Eliminar">Eliminar</button>
            </div>
            
        <!--
            <div id="Eliminar" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Eliminar</h4>
                  </div>
                  <div class="modal-body">
                    <p>¿Está seguro que desea eliminar este cargo?</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" value="submit" class="btn btn-default" data-dismiss="modal">Sí</button>
                    <button type="button" value="" class="btn btn-default" data-dismiss="modal">No</button>
                  </div>
                </div>
              </div>
            </div>
        -->


              <ul class="pager">
                  <li><a href="#">Cancelar</a></li>
              </ul>

        </div>


@endsection