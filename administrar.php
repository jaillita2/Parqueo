<?php
include("php/conexion.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
   	<title>Parqueo</title>

   	<!--<link rel="shortcut icon" href="imagenes/logo.ico">-->
    	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.min.css"/>
   	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    
	<link rel="stylesheet" href="css/general.css">
	<link rel="stylesheet" href="css/administrar.css">
 	

</head>
<body >
	<header class="cabecera">
    		<nav class="barraSuperior">
           		<div class="logo">
              			<img class="logoUmss" src="imagenes/logoU.png" alt="logo" height="100" width="100"/>
             			<div class="texLogo">UMSS</div>
          		</div>
			
			<div class="logo">
              			<img class="logoFcyt" src="imagenes/logoF.png" alt="logo" height="100" width="100"/>
             			<div class="texLogo">FCyT</div>
          		</div>	
        	</nav>
	</header>

	<section class="pagina">
		<div class="cuerpo">
			<div class="boton2">
					<button class="botonCerrar" name ="botonCerrar" onclick="location.href='index.html'">Cerrar Sesión</button>
			</div>

			<div class="titulo">Usuarios</div>
			<div class="contenedor">
				
			<table id="tablaTecnica">
				<tr>
					<th>Nombre Completo</th>
					<th>CI</th>
					<th>Celular</th>
					<th>E-mail</th>
					<th>Eliminar</th>
				</tr>

				<?php
					
					$sql="SELECT * FROM usuario";
					$result=mysqli_query($conexion,$sql);
					while($mostrar=mysqli_fetch_array($result)){
					$email = $mostrar['email'];
				?>
						<tr>
							<td><?php echo $mostrar['nombreCompleto']?></td>
							<td><?php echo $mostrar['ci']?></td>
							<td><?php echo $mostrar['celular']?></td>
							<td><?php echo $mostrar['email']?></td>
							<td class="fech">
								<a class="botonBorrar" onclick="borrar('<?php echo $email; ?>');"> Eliminar </a>
							</tr>
				<?php
					}
				?>

			</table>
		
			</div> 
			
			<div class="boton">
				<button class="botonAceptar" name ="botonAceptar" onclick="location.href='inicioAdmin.html'">Volver</button>

			</div>

		</div>
	</section>
	<script src ="https://code.jquery.com/jquery-3.6.0.min.js"></script>	
	<script src="js/eliminar.js"></script>

	<footer>
		<p1>Contactanos</p1>
		<div class="contenidoFooter">
			<p> Celular: 73770458</p>
			<p> E-mail: planetsoft166@gmail.com</p>
			<p> Dirección: Av. America y Calle Rosales N°1556</p>
		</div>
	</footer>
	
</body> 

</html>