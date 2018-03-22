<!DOCTYPE html>
<html lang="es">
<head>
	<title>Lista de facturas</title>
</head>
<body>
	<center>
		<table>
			<thead>
				<th scope="col">Código de la factura</th>
				<th scope="col">Fecha de la factura</th>
				<th scope="col">Cliente</th>
				<th scope="col">Usuario</th>
			</thead>
			<tbody>
				@foreach($factura as $fact)
				<tr>
					<td>{{$fact->iden_fact}}</td>
					<td>{{$fact->fech_fact}}</td>
					<td>{{$fact->iden_clie}}</td>
					<td>{{$fact->codi_usua}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>

<a href="/agregarfactura"><input type="button" value="Volver"></a>
	</center>
</body>
</html>