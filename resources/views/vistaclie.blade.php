<!DOCTYPE html>
<html>
<head>
	<title>Vista de tabla</title>
</head>
<body>
	<table>
		<thead>
			<tr>
				<th scope="col">Id</th>
				<th scope="col">Primer Nombre</th>
				<th scope="col">Segundo Nombre</th>
				<th scope="col">Primer Apellido</th>
				<th scope="col">Segundo Apellido</th>
				<th scope="col">Correo electrónico</th>
				<th scope="col">Dirección</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($clientes as $cliente)
			<tr>

				<th scope="row">{{$cliente ->iden_clie}}</th>
				<td>{{$cliente->pnom_clie}}</td>
				<td>{{$cliente->snom_clie}}</td>
				<td>{{$cliente->pape_clie}}</td>
				<td>{{$cliente->sape_clie}}</td>
				<td>{{$cliente->emai_clie}}</td>
				<td>{{$cliente->dire_clie}}</td>
				
			</tr>
			@endforeach
		</tbody>
	</table>

	<a href="/ingresoclientes"><input type="button" value="Atrás"></a>

</body>
</html>