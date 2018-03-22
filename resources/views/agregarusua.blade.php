<!DOCTYPE html>
<html>
<head>
	<title>Agregar usuarios</title>
</head>
<body>
	<center>
	<form action="/ingresousua" method="POST">
		{{ csrf_field()}}

	<label>Codigo del usuario</label>
	<input type="text" name="codi_usua" placeholder="codigo...">
	<br>
	<br>
	<label>Nombre de usuario</label>
	<input type="text" name="nomb_usua" placeholder="usuario...">
	<br>
	<br>
	<label>Contraseña del usuario </label>
	<input type="password" name="pass_usua">
	<br>
	<br>
	<label>Tipo de rol</label>
	<select name="iden_rol" id="iden_rol">
		<option>--Seleccione--</option>
		@foreach($rol as $roles)
				<option value="{{$roles['iden_rol']}}">{{$roles['nomb_rol']}}</option>
		@endforeach

	</select>
	<br>
	<br>
	<button type="submit">Agregar</button>
	<a href="/verusua"><input type="button" value="ver"></a>
	<br>
	<br>
	<a href="/"><input type="button" value="volver al inicio"></a>
	</form>
	<center>
</body>
</html>