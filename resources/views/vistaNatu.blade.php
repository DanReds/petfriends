<html>
<head>
	<title>  </title>
</head>
<body>

	<table> 
		<thead>
			<TR>
				<th SCOPE="col">Codigo</th>
				<th scope="col">Nombre</th>
			</TR>

		</thead>

		<tbody>

			@foreach ($natu_ctas as $naturaleza)

			<TR>


				<th scope="row">{{$naturaleza->codi_natu}}</th>
				<td>{{$naturaleza->nomb_natu}}</td> 	
			</TR>	
			@endforeach
		</tbody>
 	</table>

 	<a href="/"><input type="button" value="Atrás"></a>

</body>
</html>
