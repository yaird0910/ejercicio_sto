<!DOCTYPE HTML>
	<head>
		<meta charset="utf-8"/>  <!--sirve para que acepte simbolos poco comunes como la ñ -->
		<meta name="author" content="yair"/>
		<meta name="description" content="visualizacion de personas dadas de alta en la base de datos STO"/>
		<meta name="keywords" content="formularios, HTML, PHP, base de datos"/>
		<link type="image/jpg" href="image.jpg" rel="icon" /> <!--es la imagen de la pestaña del navegador, href es la ubicacion d la imagen y rel la convierte a icono-->
		<title> Datos de personas en BD </title>  <!--titulo q aparece en la pestaña del navegador-->
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
				$mysqli = new mysqli("localhost", "root", "", "sto");
				if ($mysqli->connect_errno) {
    				echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
				}
				
				$sql = "SELECT * FROM persona order by ap_paterno";
				if (!$resultado = $mysqli->query($sql)) {
    				echo "Lo sentimos, este sitio web está experimentando problemas.";
				}

			echo "<br/><br/><br/>
					<table border='1' align='center'>
					<tr> <th>id</th> <th>apellido paterno</th> <th>apellido materno</th> <th>nombre</th> <th>sexo</th> <th>edad</th> <th>lugar de nacimiento</th> </tr>";
			
			$cant_personas=1;
			while ($ar = $resultado->fetch_assoc()){
				    echo "<tr>";
					echo "<td>".$ar['id']."</td>";
					echo "<td>".$ar['ap_paterno']."</td>";
					echo "<td>".$ar['ap_materno']."</td>";
					echo "<td>".$ar['nombre']."</td>";
					echo "<td>".$ar['sexo']."</td>";
					echo "<td>".$ar['edad']."</td>";
					echo "<td>".$ar['lugar_nacimiento']."</td>";
					echo "</tr>";
					if ($cant_personas < $ar['id']) {
						$cant_personas = $ar['id'];
					}
			}
			echo "</table>";
			echo "<br/>";
			echo "
				<form action='editar_persona.php' method='POST'>
    				<fieldset>
        				<legend>Eliga una persona</legend>
        				<div>
            				<input type='radio' name='accion' value='modificar' checked/>
				            <label>Modificar</label>
				        </div>

				        <div>
				            <input type='radio' name='accion' value='borrar' />
					        <label>Borrar</label>
					    </div>
					    <select name='id_persona'>";
					    	for ($i=1; $i <= $cant_personas; $i++) { 
							 	echo "<option value='".$i."'>".$i."</option>";
					    	}
					echo "</select>	
				    </fieldset>
				    <input type='submit' value='continuar'>
				</form>
				<br/><br/><br/>";

			$resultado->free();
			$mysqli->close();
			 ?>
		</section>
	</body>
</html>