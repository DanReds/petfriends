<!DOCTYPE html>
<html>
<head>
	<title>Vista de tabla</title>
</head>
<body>
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

				<th scope="row">{{$cuentas ->codi_ctas}}</th>
				<td>{{$cuentas->nomb_ctas}}</td>
				<td>{{$cuentas->codi_natu}}</td>
				
				<td>{{$cuentas->codi_clas}}</td>
				<td>{{$cuentas->auxi_ctas}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	<a href="/ingresoctas"><input type="button" value="Atrás"></a>
	


</body>
</html>