<!DOCTYPE html>
<html>
<head>
	<title>Agregar Provedores</title>
</head>
<body>
	<center>
		<form action="/ingresoprov" method="POST">
		
			{{csrf_field()}}

			<label>NIT</label>
			<input type="text" name="nit_prov" placeholder="Número">
			<br>
			<br>
			<label>Razón Social</label>
			<input type="text" name="rasz_prov" placeholder="Nombre...">
			<br>
			<br>
			<label for="">Dirección</label>
			<input type="text" name="dire_prov" placeholder="CL 45 12 21">
			<br>
			<button type="submit"  class="btn btn-info">Agregar</button>
			
		</form>
		<br>
		<a href="/"><input type="button" value="Inicio"></a>
		<a href="/verprov"><input type="button" value="Ver"></a>
		
	</center>
</body>
</html>