<!DOCTYPE html>
<html>
<head>
	<title>Vista de tabla</title>
	
</head>
<body>}
	<center>
	<table>
		<thead>
			<tr>
				<th scope="col">Id</th>
				<th scope="col">Nombre</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($categoria as $categorias)
			<tr>

				<th scope="row">{{$categorias ->iden_cate}}</th>
				<td>{{$categorias->nomb_cate}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	<a href="/ingresocategoria"><input type="button" value="Atrás"></a>

</center>

</body>
</html>