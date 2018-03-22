<!DOCTYPE html>
<html lang="es">
<head>
	<title>Telefonos de clientes</title>
</head>
<body>
<table> 
		<thead>
			<TR>
				<th SCOPE="col">CC Cliente</th>
				<th scope="col">Teléfono</th>
			</TR>

		</thead>

		<tbody>

			@foreach ($telf_clie as $tele_clie)

			<TR>


				<td scope="row">{{$tele_clie->iden_clie}}</td>
				<td>{{$tele_clie->tlef_clie}}</td> 	
			</TR>	
			@endforeach
		</tbody>
 	</table>

 	<a href="/agregartel"><input type="button" value="Atrás"></a>

</body>
</html>