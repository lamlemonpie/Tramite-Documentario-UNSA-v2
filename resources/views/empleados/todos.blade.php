@extends('template')

@section('title','Empleados')

@section('content')

<h2><p class="text-center">  Ver Todos </p></h2>
	<br>

<div class="container" id="container">
</div>


<script>
var TablaEmpleados;
</script>

<script type="text/babel" src="{{asset('rs/TablaEmpleados.js')}}">
</script>
<script type="text/babel">

ReactDOM.render(
	<TablaEmpleados url="{{asset('empleados/todos')}}" refresh="100000" base = "{{asset('empleados')}}" />,

	document.getElementById('container')
);
</script>
@endsection