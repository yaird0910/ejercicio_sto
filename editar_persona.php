<!DOCTYPE HTML>
	<head>
		<meta charset="utf-8"/>  <!--sirve para que acepte simbolos poco comunes como la ñ -->
		<meta name="author" content="yair"/>
		<meta name="description" content="editar datos de la persona seleccionada"/>
		<meta name="keywords" content="formularios, HTML, PHP, base de datos"/>
		<link type="image/jpg" href="image.jpg" rel="icon" /> <!--es la imagen de la pestaña del navegador, href es la ubicacion d la imagen y rel la convierte a icono-->
		<title> Datos de clientes en BD </title>  <!--titulo q aparece en la pestaña del navegador-->
		<style type="text/css"> 
		table{
			width: 70%; border-color: #777ccc; font-size: x-large;
		}
		</style>
	</head>

	<body>
		<header>
			<h1 align="center">Datos de Personas</h1>
			<br>
			<nav>
				<div align="center">
					--- <a href="nueva_persona.html">Nueva persona</a> ---
				</div>
			</nav>
		</header>
		<section>
			<?php
				$accion=$_POST['accion'];
				$id_persona=$_POST['id_persona'];

				$con = mysqli_connect("localhost","root","","sto");
				if (mysqli_connect_errno())
				{
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
				}

				if ($accion == 'modificar') {
					$sql="SELECT * FROM persona WHERE id=".$id_persona."";
					$result=mysqli_query($con,$sql);
					$row=mysqli_fetch_assoc($result);
					echo "
						<form action='actualizar_persona.php' method='POST'>
							<fieldset>
							<legend> <h2><i>Datos de la persona</i></h2> </legend>
								<table height='300px' width='95%' border='0'>
									<tr>
										<td>nombre: <input type='text' name='nombre' value='".$row['nombre']."' /></td>
									</tr>
									<tr>
										<td>apellido paterno: <input type='text' name='ap_paterno' value='".$row['ap_paterno']."' /> </td>
									</tr>
									<tr>
										<td>apellido materno: <input type='text' name='ap_materno' value='".$row['ap_materno']."' /> </td>
									</tr>
									<tr>
										<td>sexo: <select name='sexo'>
										 		<option value='masculino'>masculino</option>
												<option value='femenino'>femenino</option>
											</select>
										</td>
									</tr>
									<tr>
										<td>edad: <input type='number' name='edad' value=".$row['edad']."> </td>
									</tr>
									<tr>
										<td>lugar de nacimiento: <input type='text' name='lugar_nacimiento' value='".$row['lugar_nacimiento']."' /> </td>
									</tr>
								</table>
								<input type='hidden' name='id' value='".$id_persona."'>
							</fieldset>
							<br/>
							<input type='submit' value='guardar'>
							<input type='reset' value='borrar'>
						</form>
					";
				}
				else{
					$sql="DELETE FROM persona WHERE id=".$id_persona."";
					$result=mysqli_query($con,$sql);
					mysqli_free_result($result);
					mysqli_close($con);
					header('Location: index.php');
				}
			?>
			
		</section>
	</body>
</HTML>