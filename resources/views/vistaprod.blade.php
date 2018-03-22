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
				<th scope="col">Descripción</th>
				<th scope="col">Categoría</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($producto as $productos)
			<tr>

				<th scope="row">{{$productos ->iden_prod}}</th>
				<td>{{$productos->desc_prod}}</td>
				<td>{{$productos->iden_cate}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	<a href="/ingresoprod"><input type="button" value="Atrás"></a>
	


</body>
</html>