<html>
<head>
	<title> Empleados </title>
</head>
<body>

	<table> 
		<thead>
			<TR>
				<th SCOPE="col">ide</th>
				<th scope="col">nombre</th>
				<th scope="col">Segundo nombre</th>
				<th scope="col">Primer apellido</th>
				<th scope="col">Segundo apellido</th>
				<th scope="col">Direccion</th>

			</TR>

		</thead>

		<tbody>

			@foreach ($emple as $empleado)

			<TR>


				<th scope="row">{{$empleado -> iden_empl}}</th>
				<td>{{$empleado->pnom_empl}}</td>
				<td>{{$empleado->snom_empl}}</td>
				<td>{{$empleado->pape_empl}}</td>
				<td>{{$empleado->sape_empl}}</td>
				<td>{{$empleado->dire_empl}}</td>

				 	
			</TR>	
			@endforeach
		</tbody>
 	</table>

 	<br>
 	<a href="/crearEmple"><input type="button" value="Atrás"></a>

</body>
</html>
