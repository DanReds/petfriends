<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type></script>
<title>Agregar Factura</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"></script>
</head>
<body>
	<center>
		<div class="container">
			<br>

<form action="/agregarfactura " method="POST">		
			{{ csrf_field()}}
			<label>Numero de factura</label>
			<input type="text" name="iden_fact" placeholder="    ">
			<br>
			<br>
			<br>
			<label>Fecha Factura</label>
			<input type="text" name="fech_fact" placeholder="    ">
			<br>
			<br>
			<br>
			<label for="">Cliente</label>
			<select name="iden_clie" id="iden_clie" class="form-control">
				<option value="">--Seleccione--</option>
				@foreach($cli as $clie)
					<option value="{{$clie['iden_clie']}}">{{$clie['pnom_clie']}} {{$clie['pape_clie']}}</option>
				@endforeach
			</select>
			<br>
			<br>
			<br>
			<label for="">Usuario</label>
			<select name="codi_usua" id="codi_usua" class="form-control">
				<option value="">--Seleccione--</option>
				@foreach($usu as $usua)
					<option value="{{$usua['codi_usua']}}">{{$usua['nomb_usua']}}</option>
				@endforeach
			</select>
			<br>
			<br>
			<button type="submit">Agregar</button>
			
			<a href="/vistafactura"><input type="button" value="ver"></a>
			<br>
			<br>
			<a href="/"><input type="button" value="volver a inicio"></a>
			</form>



			<a href="#ventana" class="btn btn-primary btn-lg" data-toggle="modal">AgregarProductos</a>
			<div class="modal fade" id="ventana" rol="dialog">
				<div class="modal-dialog">
					<div class="modal-content">

						<div class="modal-header">	
							<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-tittle">Agregar Productos</h4>
						</div>

						<div class="modal-body">

			
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</center>
<script scr="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/popper.min.js"></script>
</body>
</html>