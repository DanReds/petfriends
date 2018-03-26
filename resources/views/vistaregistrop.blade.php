<!DOCTYPE html>
<html>
<head>
	<title>Vista registro de productos</title>
</head>
<body>
	<center>
	<table>
		<thead>
			<tr>
				<th>Producto</th>
				<th>Factura N°</th>
				<th>Fecha Factura</th>
				<th>N° Productos</th>
				<th>Precio Total</th>
			</tr>
		</thead>
		<tbody>
			@foreach($registro as $registrop)
			<tr>
				<td>{{$registrop -> iden_prod}}</td>
				<td>{{$registrop -> iden_fact}}</td>
				<td>{{$registrop -> fech_fact}}</td>
				<td>{{$registrop -> cant_prod}}</td>
				<td>{{$registrop -> total}}</td>
			</tr>
			@endforeach
			
		</tbody>
	</table>
	<br>
	<a href="/ingresoregistrop"><input type="button" value="Volver"></a>
	</center>
</body>
</html>