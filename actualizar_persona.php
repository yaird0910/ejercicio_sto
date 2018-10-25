<?php
	$id=$_POST['id'];
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
	$sql="UPDATE persona SET nombre='$nombre', ap_paterno='$ap_paterno', ap_materno='$ap_materno', sexo='$sexo', edad=$edad, lugar_nacimiento='$lugar_nacimiento' WHERE id=$id";
	//$val_con = mysqli_query($con,"INSERT INTO persona (nombre,ap_paterno,ap_materno,sexo,edad,lugar_nacimiento) VALUES ('$nombre','$ap_paterno','$ap_materno','$sexo','$edad','$lugar_nacimiento')");
	$val_con = mysqli_query($con,$sql);
	echo "id=".$id;
	if ($val_con) {
		echo "los datos se agregaron exitosamente";
	}else{
		echo "los datos no se insertaron";
	}

	mysqli_close($con);
	header('Location: index.php');
?>