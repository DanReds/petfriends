<!DOCTYPE html>
<html>
<head>
	<title>Tabla de usuarios</title>
</head>
<body>
	<table>
		<thead>
			<tr>
				<th scope="col">Código</th>
				<th scope="col">Nombre del usuario</th>
				<th scope="col">Contraseña</th>
				<th scope="col">Rol</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($usuarios as $usuario)
			<tr>

				<th scope="row">{{$usuario ->codi_usua}}</th>
				<td>{{$usuario->nomb_usua}}</td>
				<td>{{$usuario->pass_usua}}</td>
				<td>{{$usuario->iden_rol}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<a href="/ingresousua"><input type="button" value="volver"></a>


</body>
</html>