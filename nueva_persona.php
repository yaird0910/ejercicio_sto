<?php
	$nombre=$_POST['nombre'];
	$ap_paterno=$_POST['ap_paterno']; 
	$ap_materno=$_POST['ap_materno'];
	$sexo=$_POST['sexo'];
	$edad=$_POST['edad'];
	$lugar_nacimiento=$_POST['lugar_nacimiento'];

	$con = mysqli_connect("localhost","root","","sto");
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	$val_con = mysqli_query($con,"INSERT INTO persona (nombre,ap_paterno,ap_materno,sexo,edad,lugar_nacimiento) VALUES ('$nombre','$ap_paterno','$ap_materno','$sexo','$edad','$lugar_nacimiento')");

	if ($val_con) {
		echo "los datos se agregaron exitosamente";
	}else{
		echo "los datos no se insertaron";
	}

	mysqli_close($con);
	header('Location: index.php');
 ?>
