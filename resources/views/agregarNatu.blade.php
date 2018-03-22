<html>
<head>
	<title>Agregar naturaleza de la cuenta</title>
</head>
<body>

<center>

	<form action="/crear_natu" method="POST">

	{{ csrf_field()}}

	<label> Naturaleza de la cuenta </label>
	<input type= "text" name="codi_natu" placeholder="   ">
	<br>
	<br>
	<br>
	<label> Nombre de la cuenta </label>
	<input type= "text" name="nomb_natu" placeholder="   ">
	<br>
	<br>
	<br>
	<button type="submit">agregar</button>
	<br>
	<br>

	<a href="/"><input type="button" value="volver a inicio"></a>











	</form>



</body>



</html>