<html>
<head>
	<title>  </title>
</head>
<body>

	<table> 
		<thead>
			<TR>
				<th SCOPE="col">codigo</th>
				<th scope="col">nombre</th>
			</TR>

		</thead>

		<tbody>

			@foreach ($clas_ctas as $clas_cuentas)

			<TR>


				<th scope="row">{{$clas_cuentas->codi_clas}}</th>
				<td>{{$clas_cuentas->nomb_clas}}</td> 	
			</TR>	
			@endforeach
		</tbody>
 	</table>

 	<a href="/crear_clas"><input type="button" value="Atrás"></a>

</body>
</html>
