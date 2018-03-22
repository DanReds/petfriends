<!DOCTYPE html>
<html>
<head>
	<title>Agregar Teléfono</title>
</head>
<body>
	<center>
	<form action="/agregartel" method="POST">
		{{ csrf_field()}}
		<label>Cliente</label>
		<select name="iden_clie" id="iden_clie" class="form-control">
				<option value="">--Seleccione--</option>
				@foreach($cliente as $clientes)
					<option value="{{$clientes['iden_clie']}}">{{$clientes['pnom_clie']}}</option>
				@endforeach
		</select>
		<br>
		<br>
		<label>Teléfono</label>
		<input type="text" name="tlef_clie" placeholder="telefono...">
		<br>
		<br>
		<button type="submit" class="bt button">agregar</button>

		<br>
	</form>
	<br>
	<a href="/"><input type="button" value="Inicio"></a>
	<a href="/vertele"><input type="button" value="Ver"></a>

	</center>
</body>
</html>