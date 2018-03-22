<!DOCTYPE html>
<html>
<head>
	<title>Vista de tabla</title>
</head>
<body>
	<table>
		<thead>
			<tr>
				<th scope="col">NIT</th>
				<th scope="col">Razón Social</th>
				<th scope="col">Dirección</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($provedor as $provedores)
			<tr>

				<th scope="row">{{$provedores ->nit_prov}}</th>
				<td>{{$provedores->rasz_prov}}</td>
				<td>{{$provedores->dire_prov}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	<a href="/ingresoprov"><input type="button" value="Atrás"></a>
	


</body>
</html>