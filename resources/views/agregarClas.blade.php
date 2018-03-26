<html>
<head>
	<title>Agregar clasificación</title>
</head>
<body>

<center>

	<form action="/crear_clas" method="POST">

	{{ csrf_field()}}

	<label> clasificación de cuentas </label>
	<input type= "text" name="codi_clas" placeholder="codigo de clasificación">
	<br>
	<br>
	<br>
	<label> clasificación </label>
	<input type= "text" name="nomb_clas" placeholder="nombre de clasificación">
	<br>
	<br>
	<br>
	<button type="submit">agregar</button>
	<a href="/verclas"><input type="button" value="ver"></a>
	<br>
	<br>
	
	<a href="/"><input type="button" value="volver a inicio"></a>











	</form>



</body>



</html>