<html>
<head>
	<title>Agregar Rol</title>
</head>
<body>

<center>

	<form action="/create" method="POST">

	{{ csrf_field()}}

	<label> identificación del rol </label>
	<input type= "text" name="iden_rol" placeholder="identificación del rol">
	<br>
	<br>
	<br>
	<label> nombre del rol </label>
	<input type= "text" name="nomb_rol" placeholder="nombre del rol">
	<br>
	<br>
	<br>
	<button type="submit">agregar</button>

	<br>
	<br>
	<a href="/"><input type="button" value="volver a inicio"></a>
	<a href="/vista"><input type="button" value="ver">











	</form>



</body>



</html>