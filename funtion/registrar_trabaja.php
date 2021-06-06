<?php

include("dbcon.php");

if (isset($_POST['register'])) {
	if (
		strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['celular']) >= 1
		&& strlen($_POST['correo']) >= 1 && strlen($_POST['gusta']) >= 1
	) {
		$name	= trim($_POST['nombre']);
		$apell	= trim($_POST['apellido']);
		$cel 	= trim($_POST['celular']);
		$email 	= trim($_POST['correo']);
		$gusta 	= trim($_POST['gusta']);


		$consulta = "INSERT INTO  trabajo(name, last_name, cel, email, hacer) 
		VALUES ('$name', '$apell','$cel', '$email', '$gusta')";

		$resultado = mysqli_query($conectar, $consulta);



		if ($resultado) {

?>
			<h4 class="ok">¡Tu solicitud fue enviada de manera correcta! :) </h4>
		<?php
		} else {
		?>
			<h4 class="bad">¡Ups ha ocurrido un error! :(</h4>
		<?php
		}
	} else {
		?>
		<h4 class="bad">¡Por favor complete los campos! >:/</h4>
<?php
	}
}

?>