<!DOCTYPE html>
<html>
<head>
	<title>Agregar Producto</title>
</head>
<body>
	<center>
		<form action="/ingresoprod" method="POST">
		
			{{csrf_field()}}

			<label>Id producto</label>
			<input type="text" name="iden_prod" placeholder="Número">
			<br>
			<br>
			<label>Descripción del Producto</label>
			<input type="text" name="desc_prod" placeholder="Nombre...">
			<br>
			<br>

			<label for="">Categoría</label>
			<select name="iden_cate" id="iden_cate" class="form-control">
				@foreach($categoria as $categorias)
					<option value="{{$categorias['iden_cate']}}">{{$categorias['nomb_cate']}}</option>
				@endforeach
			</select>
			
			<button type="submit"  class="btn btn-info">Agregar</button>
			
		</form>
		<br>
		<a href="/"><input type="button" value="Inicio"></a>
		<a href="/verprod"><input type="button" value="Ver"></a>
		
	</center>
</body>
</html>