<html>
<head>
	<title>  </title>
</head>
<body>

	<table> 
		<thead>
			<TR>
				<th SCOPE="col">ide</th>
				<th scope="col">nombre</th>
			</TR>

		</thead>

		<tbody>

			@foreach ($roles as $rol)

			<TR>


				<th scope="row">{{$rol->iden_rol}}</th>
				<td>{{$rol->nomb_rol}}</td> 	
			</TR>	
			@endforeach
		</tbody>
 	</table>

 	<a href="/create"><input type="button" value="Atrás"></a>

</body>
</html>
