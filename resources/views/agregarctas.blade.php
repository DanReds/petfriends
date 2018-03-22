<!DOCTYPE html>
<html>
<head>
	<title>Agregar Cuenta</title>
</head>
<body>
	<center>
		<form action="/ingresoctas" method="POST">
		
			{{csrf_field()}}

			<label>Código</label>
			<input type="text" name="codi_ctas" placeholder="Número">
			
			<label>Nombre Cuenta</label>
			<input type="text" name="nomb_ctas" placeholder="Nombre...">
			<br>
			<br>

			<label for="">Naturaleza</label>
			<select name="codi_natu" id="codi_natu" class="form-control">
				<option value="">--Seleccione--</option>
				@foreach($nat as $natu)
					<option value="{{$natu['codi_natu']}}">{{$natu['nomb_natu']}}</option>
				@endforeach
			</select>
			<label>Clasificación</label>
			<select name="codi_clas" id="codi_clas" class="form-control">
				<option value="">--Seleccione--</option>
				@foreach($clas as $clas_c)
					<option value="{{$clas_c['codi_clas']}}">{{$clas_c['nomb_clas']}}</option>
				@endforeach
			</select>
		

			<label for="">Auxiliar</label>
			<select name="auxi_ctas" id="auxi_ctas" class="form-control">
				<option value="">--Seleccione--</option>
				<option value="SI">SI</option>
				<option value="NO">NO</option>

			</select>

			<button type="submit"  class="btn btn-info">Agregar</button>
			
		</form>
		<br>
		<a href="/"><input type="button" value="Inicio"></a>
		<a href="/verctas"><input type="button" value="Ver"></a>
		
	</center>
</body>
</html>