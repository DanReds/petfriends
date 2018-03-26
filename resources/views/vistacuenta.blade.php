<!DOCTYPE html>
<html>
<head>
	<title>Vista de tabla</title>
</head>
<body>
	<center>
	<table>
		<thead>
			<tr>
				<th scope="col">Código</th>
				<th scope="col">Nombre</th>
				<th scope="col">Naturaleza</th>
				<th scope="col">Clasificación</th>
				<th scope="col">Auxiliar</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($cuenta as $cuentas)
			<tr>

				<th scope="row">{{$cuentas ->codigo}}</th>
				<td>{{$cuentas->nombre}}</td>
				<td>{{$cuentas->nat}}</td>
				<td>{{$cuentas->name}}</td>
				<td>{{$cuentas->aux}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	<a href="/ingresoctas"><input type="button" value="Atrás"></a>
	

</center>
</body>
</html>