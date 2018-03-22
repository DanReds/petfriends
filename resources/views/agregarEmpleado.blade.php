<html>
<head>
	<title>Agregar empleado</title>
</head>
<body>

<center>

	<form action="/crearEmple" method="POST">

	{{ csrf_field()}}

	<label> Numero de identificación  </label>
	<input type= "text" name="iden_empl" placeholder="   ">
	<br>
	<br>
	<br>
	<label> Nombre </label>
	<input type= "text" name="pnom_empl" placeholder="  ">
	<br>
	<br>
	<br>
	<label> Segundo nombre </label>
	<input type= "text" name="snom_empl" placeholder="   ">
	<br>
	<br>
	<br>
	<label> Primer apellido </label>
	<input type= "text" name="pape_empl" placeholder="  ">
	<br>
	<br>
	<label> Segundo apellido </label>
	<input type= "text" name="sape_empl" placeholder="  ">
	<br>
	<br>
	<br>
	<label> Direccion </label>
	<input type= "text" name="dire_empl" placeholder="  ">
	<br>
	<br>
	<button type="submit">Agregar</button>
	<br>
	<br>
	<br>


	<a href="/"><input type="button" value="volver a inicio"></a>











	</form>



</body>



</html>